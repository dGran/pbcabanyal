<li>
	@if ($category->posts->count() > 0)
		<span class="publications" title="Publicaciones">
			<i class="far fa-file-alt"></i>&nbsp;{{ $category->posts->count() }}
		</span>
	@endif
</li>
<li>
	<a href="" title="Editar publicación">
		<i class="fas fa-edit"></i>
	</a>
</li>

<li>
	@if ($category->posts->count() > 0)
		<button class="delete disabled" disabled>
			<i class="fas fa-trash"></i>
		</button>
	@else
		<form id="formDelete{{ $category->id }}" action="{{ route('admin.categories.delete', $category->id) }}" method="post">
			{{ csrf_field() }}
			{{ method_field('delete') }}
			<button class="delete" onclick="confirmDelete(event, '{{ $category->id }}', '{{ $category->name }}' )">
				<i class="fas fa-trash"></i>
			</button>
		</form>
	@endif
</li>