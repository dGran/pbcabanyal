@extends('layouts.app')

@section('breadcrumb')
	<div class="breadcrumbpb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
		  		<a href="{{ route('admin') }}">Panel de Admin</a>
			</li>
			<li class="breadcrumb-item active">
				Categorías
			</li>
		</ol>
	</div>
	</div>
@endsection

@section('content')
    <div class="container">
        <div class="margin10">
        	<div class="row">
        		<div class="col-sm-4">
					@include('admin.partials.menu')
        		</div>
        		<div class="col-sm-8">

					{{-- Session messages --}}
					@if(session()->has('message'))
						<div class="alert alert-success alert-auto-hide animated bounce">
							{{ session()->get('message') }}
						</div>
					@endif

					<div class="panel panel-default admin-register-list">

						<div class="panel-heading">
							<span class="name">
								Categorías
							</span>
							<a id="btnAdd" href="{{ route('admin.categories.create') }}" type="button" class="btn btn-success btn-sm action">
								<i class="fa fa-plus"></i><span class="hidden-xs">&nbsp;&nbsp;Nueva categoría</span>
							</a>
						</div>

						<div class="panel-body">
							<table class="table table-hover table-responsive">
								@if ($categories->count() > 0)
									@foreach ($categories as $category)
									<tr>

										<td width="32" align="right">
											<small>#{{ $category->id }}</small>
										</td>

										<td>
											{{ $category->name }}
										</td>

										<td class="hidden-xs actions">
											<ul>
												@include('admin.posts_categories.list_actions')
											</ul>
										</td>
										<td width="24" class="visible-xs actions dropdown">
						                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						                        <i class="fas fa-ellipsis-v dropdown-toggle"></i>
						                    </a>

						                    <ul class="dropdown-menu pull-right animated slideInRight" role="menu">
						                        @include('admin.posts_categories.list_actions')
						                    </ul>
										</td>

									</tr>
									@endforeach
								@else
									<tr class="empty">
										<td>Lista vacía...</td>
									</tr>
								@endif
  							</table>
						</div> {{-- panel-body --}}

						<div class="panel-footer">
							<table>
								<tr>
									<td class="reg-info">
										Registros: {{ $categories->firstItem() }}-{{ $categories->lastItem() }} de {{ $categories->total() }}
									</td>
									<td class="navigation">
										{{ $categories->links() }}
									</td>
								</tr>
							</table>
						</div> {{-- panel-footer --}}

					</div> {{-- admin-register --}}

        		</div>
        	</div>

        </div>
	</div>

@endsection

@section('js')
	<script>
		function confirmDelete(e, id, name) {
			e.preventDefault();

			swal({
				title: "¿Estás seguro?",
				text: 'Se va a eliminar la categoría "' + name + '". No se podrán deshacer los cambios!',
				// type: "warning",
				showCancelButton: true,
				confirmButtonText: "Sí",
				cancelButtonText: "No",
				closeOnConfirm: true
			},
			function(isConfirmed) {
				if (isConfirmed) {
					$("#formDelete"+id).submit();
				}
			});
		}

        Mousetrap.bind(['command+a', 'ctrl+a'], function() {
        	var url = $("#btnAdd").attr('href');
        	$(location).attr('href', url);
            return false;
        });
	</script>
@endsection