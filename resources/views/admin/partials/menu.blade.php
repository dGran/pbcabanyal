<ul class="list-group">
	<li class="list-group-item">
		@if (Route::currentRouteName() == 'admin.categories' || Route::currentRouteName() == 'admin.categories.create')
			<span>
				<i class="fas fa-angle-double-right"></i>
				Categorías
			</span>
		@else
			<a href="{{ route('admin.categories') }}">Categorías</a>
		@endif
	</li>
	<li class="list-group-item">
		@if (Route::currentRouteName() == 'admin.posts' || Route::currentRouteName() == 'admin.posts.create')
			<span>
				<i class="fas fa-angle-double-right"></i>
				Publicaciones
			</span>
		@else
			<a href="{{ route('admin.posts') }}">Publicaciones</a>
		@endif
	</li>
</ul>

<ul class="list-group">
	<li class="list-group-item"><a href="">Galerías</a></li>
	<li class="list-group-item"><a href="">Encuestas</a></li>
	<li class="list-group-item"><a href="">Anuncios generales</a></li>
</ul>

<ul class="list-group">
	<li class="list-group-item"><a href="">Usuarios</a></li>
</ul>