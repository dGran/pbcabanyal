<li>
	@if ($category->posts->count() > 0)
		<span class="publications" title="Publicaciones">
			<div class="hidden-xs">
				<i class="far fa-file-alt"></i>&nbsp;{{ $category->posts->count() }}
			</div>
			<div class="visible-xs">
				Publicaciones: {{ $category->posts->count() }}
			</div>
		</span>
	@endif
</li>
<li>
	<a href="{{ route('admin.categories.edit', $category->slug) }}" title="Editar publicación">
		<div class="hidden-xs">
			<i class="fas fa-edit"></i>
		</div>
		<div class="visible-xs">
			Editar
		</div>
	</a>
</li>

<li>
	@if ($category->posts->count() > 0)
		<button class="delete disabled" disabled>
			<div class="hidden-xs">
				<i class="fas fa-trash"></i>
			</div>
			<div class="visible-xs">
				<span>Eliminar</span>
			</div>
		</button>
	@else
		<form id="formDelete{{ $category->id }}" action="{{ route('admin.categories.delete', $category->slug) }}" method="post">
			{{ csrf_field() }}
			{{ method_field('delete') }}

			<button class="delete" onclick="confirmDelete(event, '{{ $category->id }}', '{{ $category->name }}' )">
				<div class="hidden-xs">
					<i class="fas fa-trash"></i>
				</div>
				<div class="visible-xs">
					Eliminar
				</div>
			</button>
		</form>
	@endif
</li>