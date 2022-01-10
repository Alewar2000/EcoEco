<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Models\Product;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');

    }

    public function getDashboard(){
        $products = Product::where('status', '1')->count();
        $users = User::count();
        $data = ['users' => $users, 'products' => $products];
        return view('admin.dashboard', $data);
    }

}
