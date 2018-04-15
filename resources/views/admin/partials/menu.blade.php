<ul class="list-group admin-menu">
	@if (Route::currentRouteName() == 'admin.categories' || Route::currentRouteName() == 'admin.categories.create' || Route::currentRouteName() == 'admin.categories.edit')
		<li class="list-group-item current">
			<i class="fas fa-angle-double-right"></i>
			Categorías
	@else
		<li class="list-group-item">
			<a href="{{ route('admin.categories') }}">
				<span class="indicator"><i class="fas fa-angle-double-right"></i></span>
				Categorías
			</a>
		@endif
	</li>

	@if (Route::currentRouteName() == 'admin.posts' || Route::currentRouteName() == 'admin.posts.create' || Route::currentRouteName() == 'admin.posts.edit')
		<li class="list-group-item current">
			<i class="fas fa-angle-double-right"></i>
			Publicaciones
	@else
		<li class="list-group-item">
			<a href="{{ route('admin.posts') }}">
				<span class="indicator"><i class="fas fa-angle-double-right"></i></span>
				Publicaciones
			</a>
		@endif
	</li>

	<li class="list-group-item">
		<a href="">
			<span class="indicator"><i class="fas fa-angle-double-right"></i></span>
			Eventos
		</a>
	</li>
	<li class="list-group-item">
		<a href="">
			<span class="indicator"><i class="fas fa-angle-double-right"></i></span>
			Galerías
		</a>
	</li>
	<li class="list-group-item">
		<a href="">
			<span class="indicator"><i class="fas fa-angle-double-right"></i></span>
			Encuestas
		</a>
	</li>

	@if (Route::currentRouteName() == 'admin.banners')
		<li class="list-group-item current">
			<i class="fas fa-angle-double-right"></i>
			Banners portada
	@else
		<li class="list-group-item">
			<a href="{{ route('admin.banners') }}">
				<span class="indicator"><i class="fas fa-angle-double-right"></i></span>
				Banners portada
			</a>
	@endif
	</li>

	@if (Route::currentRouteName() == 'admin.ads' || Route::currentRouteName() == 'admin.ads.create' || Route::currentRouteName() == 'admin.ads.edit')
		<li class="list-group-item current">
			<i class="fas fa-angle-double-right"></i>
			Anuncios generales
	@else
		<li class="list-group-item">
			<a href="{{ route('admin.ads') }}">
				<span class="indicator"><i class="fas fa-angle-double-right"></i></span>
				Anuncios generales
			</a>
	@endif
	<li class="list-group-item">
		<a href="">
			<span class="indicator"><i class="fas fa-angle-double-right"></i></span>
			Usuarios
		</a>
	</li>
</ul>