<ul class="list-group">
	<li class="list-group-item">
		@if (Route::currentRouteName() == 'admin.categories' || Route::currentRouteName() == 'admin.categories.create' || Route::currentRouteName() == 'admin.categories.edit')
			<span>
				<strong>
					<i class="fas fa-angle-double-right"></i>
					Categorías
				</strong>
			</span>
		@else
			<a href="{{ route('admin.categories') }}">Categorías</a>
		@endif
	</li>
	<li class="list-group-item">
		@if (Route::currentRouteName() == 'admin.posts' || Route::currentRouteName() == 'admin.posts.create' || Route::currentRouteName() == 'admin.posts.edit')
			<span>
				<strong>
					<i class="fas fa-angle-double-right"></i>
					Publicaciones
				</strong>
			</span>
		@else
			<a href="{{ route('admin.posts') }}">Publicaciones</a>
		@endif
	</li>
</ul>

<ul class="list-group">
	<li class="list-group-item"><a href="">Eventos</a></li>
	<li class="list-group-item"><a href="">Galerías</a></li>
	<li class="list-group-item"><a href="">Encuestas</a></li>
</ul>

<ul class="list-group">
	<li class="list-group-item">
		@if (Route::currentRouteName() == 'admin.banners')
			<span>
				<strong>
					<i class="fas fa-angle-double-right"></i>
					Banners portada
				</strong>
			</span>
		@else
			<a href="{{ route('admin.banners') }}">Banners portada</a>
		@endif
	</li>
	<li class="list-group-item"><a href="">Anuncios generales</a></li>
</ul>

<ul class="list-group">
	<li class="list-group-item"><a href="">Usuarios</a></li>
</ul>