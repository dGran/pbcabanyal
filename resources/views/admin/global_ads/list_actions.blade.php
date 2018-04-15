<li>
	<a href="{{ route('admin.ads.edit', $ad->id) }}">
		<div class="hidden-xs">
			<i class="fas fa-edit"></i>
		</div>
		<div class="visible-xs">
			Editar
		</div>
	</a>
</li>

<li>
	<form id="formDelete{{ $ad->id }}" action="{{ route('admin.ads.delete', $ad->id) }}" method="post">
		{{ csrf_field() }}
		{{ method_field('delete') }}

		<button class="delete" onclick="confirmDelete(event, '{{ $ad->id }}', '{{ $ad->shortDetail() }}' )">
			<div class="hidden-xs">
				<i class="fas fa-trash"></i>
			</div>
			<div class="visible-xs">
				Eliminar
			</div>
		</button>
	</form>
</li>