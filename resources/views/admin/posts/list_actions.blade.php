<li>
	<a href="" data-toggle="modal" data-target="#reg{{ $post->id }}">
		<div class="hidden-xs">
			<i class="fas fa-eye"></i>
		</div>
		<div class="visible-xs">
			Ver publicación
		</div>
	</a>
</li>

<li>
	<a href="#">
		<div class="hidden-xs">
			<i class="fab fa-facebook"></i>
		</div>
		<div class="visible-xs">
			Publicar en facebook
		</div>
	</a>
</li>

<li>
	<a href="#">
		<div class="hidden-xs">
			<i class="fab fa-twitter"></i>
		</div>
		<div class="visible-xs">
			Publicar en twitter
		</div>
	</a>
</li>

<li>
	<a href="{{ route('admin.posts.edit', $post->slug) }}">
		<div class="hidden-xs">
			<i class="fas fa-edit"></i>
		</div>
		<div class="visible-xs">
			Editar
		</div>
	</a>
</li>

<li>
	<form id="formDelete{{ $post->id }}" action="{{ route('admin.posts.delete', $post->slug) }}" method="post">
		{{ csrf_field() }}
		{{ method_field('delete') }}

		<button class="delete" onclick="confirmDelete(event, '{{ $post->id }}', '{{ $post->name }}' )">
			<div class="hidden-xs">
				<i class="fas fa-trash"></i>
			</div>
			<div class="visible-xs">
				Eliminar
			</div>
		</button>
	</form>
</li>