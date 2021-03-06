<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Models\Category, App\Http\Models\Product, App\Http\Models\PGallery;

use Validator, Str, Config, Image;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');

    }

    public function getHome(){
        $products = Product::with(['cat'])->orderBy('id', 'desc')->paginate(25);
        $data = ['products' => $products];
        return view('admin.products.home', $data);
    }

    public function getProductAdd(){
        $cats = Category::where('module', '0')->pluck('name', 'id');
        $data = ['cats' => $cats];
        return view('admin.products.add', $data);
    }

    public function postProductAdd(Request $request){
        $rules = [
            'name' => 'required',
            'img' => 'required',
            'price' => 'required',
            'content' => 'required'


        ];

        $mensajes = [
            'name.required' => 'El nombre del producto es requerido',
            'img.required' => 'Seleccione una imagen destacada',
            'img.image' => 'El tipo de archivo no es valido',
            'price.required' => 'Ingrese el precio del producto',
            'content.required' => 'Ingrese una descripción del producto'

        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);

         if ($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error',)->with('typealert', 'danger')->withInput();
        else:
            $path = '/'.date('Y-m-d');
            $fileExt = trim($request->file('img')->getClientOriginalExtension());
            $upload_path = Config::get('filesystems.disks.uploads.root');
            //espacios en blando de los archivos
            $name = Str::slug(str_replace($fileExt, '', $request->file('img')->getClientOriginalName()));
            //No sobrescribir archivos
            $filename = rand(1,999).'-'.$name.'.'.$fileExt;
            $file_file = $upload_path.'/'.$path.'/'.$filename;

            $product = new Product();
            $product->status = '0';
            $product->name = e($request->input('name'));
            $product->slug = Str::slug($request->input('name'));
            $product->category_id = $request->input('category');
            $product->file_path = date('Y-m-d');
            $product->image = $filename;
            $product->price = $request->input('price');
            $product->in_discount = $request->input('indiscount');
            $product->discount = $request->input('discount');
            $product->content = e($request->input('content'));

            if ($product->save()) {
                if ($request->hasFile('img')) {
                    $fl = $request->img->storeAs($path, $filename, 'uploads');
                    $img = Image::make($file_file);
                    $img->resize(256, 256, function($constraint){
                        $constraint->upsize();
                    });
                    $img->save($upload_path.'/'.$path.'/t_'.$filename);
                }
                return redirect('/admin/products')->with('message', 'Guardado con exito')->with('typealert', 'success');
            }

        endif;



    }


    public function getProductEdit($id){
        $p = Product::findOrFail($id);
        $cats = Category::where('module', '0')->pluck('name', 'id');
        $data = ['cats' => $cats, 'p' => $p];
        return view('admin.products.edit', $data);
    }


    public function postProductEdit($id, Request $request){
        $rules = [
            'name' => 'required',
            'price' => 'required',
            'content' => 'required'


        ];

        $mensajes = [
            'name.required' => 'El nombre del producto es requerido',
            'img.image' => 'El tipo de archivo no es valido',
            'price.required' => 'Ingrese el precio del producto',
            'content.required' => 'Ingrese una descripción del producto'

        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);

         if ($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error',)->with('typealert', 'danger')->withInput();
        else:
            $product = Product::findOrFail($id);
            $ipp = $product->file_path;
            $ip = $product->image;
            $product->status = e($request->input('status'));
            $product->name = e($request->input('name'));
            $product->category_id = $request->input('category');

            if ($request->hasFile('img')):
                $path = '/'.date('Y-m-d');
                $fileExt = trim($request->file('img')->getClientOriginalExtension());
                $upload_path = Config::get('filesystems.disks.uploads.root');
            //espacios en blando de los archivos
                $name = Str::slug(str_replace($fileExt, '', $request->file('img')->getClientOriginalName()));
            //No sobrescribir archivos
                $filename = rand(1,999).'-'.$name.'.'.$fileExt;
                $file_file = $upload_path.'/'.$path.'/'.$filename;


                $product->file_path = date('Y-m-d');
                $product->image = $filename;
            endif;

            $product->price = $request->input('price');
            $product->in_discount = $request->input('indiscount');
            $product->discount = $request->input('discount');
            $product->content = e($request->input('content'));

            if ($product->save()) {
                if ($request->hasFile('img')) {
                    $fl = $request->img->storeAs($path, $filename, 'uploads');
                    $img = Image::make($file_file);
                    $img->fit(256, 256, function($constraint){
                        $constraint->upsize();
                    });
                    $img->save($upload_path.'/'.$path.'/t_'.$filename);
                    unlink($upload_path.'/'.$ipp.'/'.$ip);
                    unlink($upload_path.'/'.$ipp.'/t_'.$ip);
                }
                return back()->with('message', 'Actualizado con éxito')->with('typealert', 'success');
            }

        endif;
    }


    public function postProductGalleryAdd($id, Request $request){
        $rules = [
            'file_image' => 'required'
        ];

        $mensajes = [
            'file_image.required' => 'Seleccione una imagen destacada'

        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);

        if ($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error',)->with('typealert', 'danger')->withInput();
        else:
            if ($request->hasFile('file_image')):
                $path = '/'.date('Y-m-d');
                $fileExt = trim($request->file('file_image')->getClientOriginalExtension());
                $upload_path = Config::get('filesystems.disks.uploads.root');
            //espacios en blando de los archivos
                $name = Str::slug(str_replace($fileExt, '', $request->file('file_image')->getClientOriginalName()));
            //No sobrescribir archivos
                $filename = rand(1,999).'-'.$name.'.'.$fileExt;
                $file_file = $upload_path.'/'.$path.'/'.$filename;


                $g = new PGallery;
                $g->product_id = $id;
                $g->file_path = date('Y-m-d');
                $g->file_name = $filename;

                if ($g->save()) {
                    if ($request->hasFile('file_image')) {
                        $fl = $request->file_image->storeAs($path, $filename, 'uploads');
                        $img = Image::make($file_file);
                        $img->fit(512, 512, function($constraint){
                            $constraint->upsize();
                        });
                        $img->save($upload_path.'/'.$path.'/t_'.$filename);
                    }
                    return back()->with('message', 'Imagen subida con éxito')->with('typealert', 'success');
                }

            endif;
        
        endif;

    }



    function getProductGalleryDelete($id, $gid){
        $g = PGallery::findOrFail($gid);
        $path = $g->file_path;
        $file = $g->file_name;
        $upload_path = Config::get('filesystems.disks.uploads.root');
        if ($g->product_id != $id) {
            return back()->with('message', 'La imagen no se ha podido eliminar')->with('typealert', 'danger');
        }else{
            if ($g->delete()) {
                unlink($upload_path.'/'.$path.'/'.$file);
                unlink($upload_path.'/'.$path.'/t_'.$file);
                return back()->with('message', 'Imagen borrada con éxito')->with('typealert', 'success');
                
            }

        }
    }


}
