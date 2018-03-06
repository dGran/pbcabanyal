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
							<div class="title">
								Categorías
							</div>
							<div class="buttons">
				 			    <div class="input-group">
									<div class="input-group-addon"><i class="fas fa-filter"></i></div>
									<form id="formSearch" role="search" method="get" action="{{ route('admin.categories') }}">
										<input id="filter" type="text" name="name" class="form-control" placeholder="Buscar..." value="{{ $name }}">
									</form>
									<div class="input-group-addon">
										<a id="btnAdd" href="{{ route('admin.categories.create') }}" type="button">
											<i class="fa fa-plus"></i><span class="hidden-xs">&nbsp;&nbsp;Nueva categoría</span>
										</a>
									</div>
							    </div>
							    @if ($name)
							    	<span class="filter-info">Filtro aplicado: '{{ $name }}'</span>
							    @endif
							</div>
						</div>

						<div class="panel-body">
							<table class="table table-hover table-responsive">
								@if ($categories->count() > 0)
									@foreach ($categories as $category)
									<tr>
										<td width="16" class="indicator">
											<div class="indicator-img">
												<i class="fas fa-caret-right"></i>
											</div>
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

						@if ($categories->count() > 0)
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
						@endif

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
				confirmButtonColor: "#e45c5c",
				closeOnConfirm: true
			},
			function(isConfirmed) {
				if (isConfirmed) {
					$("#formDelete"+id).submit();
				}
			});
		}
        $(document).ready(function(){

	        Mousetrap.bind(['command+a', 'ctrl+a'], function() {
	        	var url = $("#btnAdd").attr('href');
	        	$(location).attr('href', url);
	            return false;
	        });

	        Mousetrap.bind(['command+f', 'ctrl+f'], function() {
	        	$('#filter').focus();
	            return false;
	        });

	        $("#filter").focus(function(){
	        	$(this).select();
	        });

        });
	</script>
@endsection