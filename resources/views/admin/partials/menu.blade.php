<ul class="list-group">
	<li class="list-group-item">
		@if (Route::currentRouteName() == 'admin.posts' || Route::currentRouteName() == 'admin.posts.create')
			<span>Publicaciones</span>
		@else
			<a href="{{ route('admin.posts') }}">Publicaciones</a>
		@endif
	</li>
	<li class="list-group-item"><a href="">Usuarios</a></li>
	<li class="list-group-item"><a href="">Categorías</a></li>
	<li class="list-group-item"><a href="">Anuncios generales</a></li>
	<li class="list-group-item"><a href="">Galerías</a></li>
	<li class="list-group-item"><a href="">Encuestas</a></li>
</ul>