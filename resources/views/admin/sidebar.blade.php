

<div class="sidebar shadow">
	<div class="section-top">
		<div class="logo">
			<img src="{{url('static/images/logo2.png')}}" class="img-fluid">
		</div>
		<div class="user">
			<span class="subtitle">Hola:</span>
			<div class="name">
				{{Auth::user()->name}} {{Auth::user()->lastname }}
				<a href="{{url('/logout')}}">
					<i class="fas fa-sign-out-alt"></i>
				</a>
			</div>
			<div class="email">{{Auth::user()->email }}</div>
		</div>
	</div>

	<div class="main">
		<ul>
			<li>
				<a href="{{url('/admin')}}" class="lk-dashboard"><i class="fas fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="{{url('/admin/products')}}" class="lk-products lk-product_add lk-product_edit lk-product_gallery_add"><i class="fas fa-boxes"></i>Productos</a>
			</li>
			<li>
				<a href="{{url('/admin/categories/0')}}" class="lk-categories lk-category_add lk-category_edit lk-categories_delete"><i class="fas fa-object-ungroup"></i>Categorías</a>
			</li>
			<li>
				<a href="{{url('/admin/users')}}" class="lk-user_list lk-user_edit"><i class="fas fa-users"></i>Usuarios</a>
			</li>
		</ul>
	</div>
</div>




