@extends('layouts.admin')

@section('breadcrumb')
	<div class="breadcrumbpb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
		  		<a href="{{ route('admin') }}">Panel de Admin</a>
			</li>
			<li class="breadcrumb-item active">
				Anuncios generales
			</li>
		</ol>
	</div>
	</div>
@endsection

@section('content')
    <div class="container">
        <div class="margin10">
        	<div class="row">
        		<div class="col-sm-4 left-menu">
					@include('admin.partials.menu')
        		</div>
        		<div class="col-sm-8 table-content">

					{{-- Session messages --}}
					@if(session()->has('message'))
						<div class="alert alert-success alert-auto-hide animated bounce">
							{{ session()->get('message') }}
						</div>
					@endif

					<div class="panel panel-default admin-register-list">

						<div class="panel-heading">
							<div class="title clearfix">
								<span class="name">Anuncios generales</span>
								<a class="action btn btn-default" id="btn-show-hide-left-menu">
									<i class="expand-icon fas fa-expand-arrows-alt hidden-xs"></i>
									<i class="expand-icon fas fa-arrows-alt visible-xs"></i>
								</a>
							</div>
							<div class="buttons">
				 			    <div class="input-group">
									<div class="input-group-addon"><i class="fas fa-filter"></i></div>
									<form id="formSearch" role="search" method="get" action="{{ route('admin.ads') }}">
										<input id="filter" type="text" name="detail" class="form-control" placeholder="Buscar..." value="{{ $detail }}">
									</form>
									<div class="input-group-addon">
										<a id="btnAdd" href="{{ route('admin.ads.create') }}" type="button">
											<i class="fa fa-plus"></i><span class="hidden-xs">&nbsp;&nbsp;Nuevo anuncio</span>
										</a>
									</div>
							    </div>
							    @if ($detail)
							    	<span class="filter-info">Filtro aplicado: '{{ $detail }}'</span>
							    @endif
							</div>
						</div>

						<div class="panel-body">
							<table class="table table-hover table-responsive">
								<tbody>
								@if ($ads->count() > 0)
									@foreach ($ads as $ad)
									<tr>
										<td width="16" class="indicator">
											<div class="indicator-img">
												<i class="fas fa-caret-right"></i>
											</div>
										</td>

										<td>
											@if (!$ad->isActive())
												<span class="label label-warning">Inactivo</span>
											@endif
											{{  $ad->shortDetail() }}
										</td>

										<td class="hidden-xs actions">
											<ul>
												@include('admin.global_ads.list_actions')
											</ul>
										</td>
										<td width="24" class="visible-xs actions dropdown">
						                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						                        <i class="fas fa-ellipsis-v dropdown-toggle"></i>
						                    </a>

						                    <ul class="dropdown-menu pull-right animated slideInRight" role="menu">
						                        @include('admin.global_ads.list_actions')
						                    </ul>
										</td>

									</tr>
									@endforeach
								@else
									<tr class="empty">
										<td>Lista vacía...</td>
									</tr>
								@endif
								</tbody>
  							</table>
						</div> {{-- panel-body --}}

						@if ($ads->count() > 0)
							<div class="panel-footer">
								<table>
									<tr>
										<td class="reg-info">
											Registros: {{ $ads->firstItem() }}-{{ $ads->lastItem() }} de {{ $ads->total() }}
										</td>
										<td class="navigation">
											{{ $ads->links() }}
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
				text: 'Se va a eliminar el anuncio  "' + name + '". No se podrán deshacer los cambios!',
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