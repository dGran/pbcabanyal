@extends('layouts.admin')

@section('breadcrumb')
	<div class="breadcrumbpb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
		  		<a href="{{ route('admin') }}">Panel de Admin</a>
			</li>
			<li class="breadcrumb-item active">
				Inicio
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

					<div class="panel panel-default admin-register-list">

						<div class="panel-heading">
							<div class="title clearfix">
								<span class="name">Log</span>
								<a class="action btn btn-default" id="btn-show-hide-left-menu">
									<i class="expand-icon fas fa-expand-arrows-alt hidden-xs"></i>
									<i class="expand-icon fas fa-arrows-alt visible-xs"></i>
								</a>
							</div>
						</div>

						<div class="panel-body">
							<table class="table table-hover table-responsive">
								<thead>
									<tr>
										<td class="hidden-xs"></td>
										<td width="55">Acción</td>
										<td>Tabla</td>
										<td class="hidden-xs">Descripción</td>
										<td class="hidden-xs">Usuario</td>
										<td width="150" class="hidden-xs">Fecha</td>
									</tr>
								</thead>
								<tbody>
								@if ($logs->count() > 0)
									@foreach ($logs as $log)
									<tr>
										<td width="16" class="indicator">
											<div class="indicator-img">
												<i class="fas fa-caret-right"></i>
											</div>
										</td>

										<td>
											@if ($log->action == "POST")
												<span style="color: green">
											@elseif ($log->action == "DELETE")
												<span style="color: red">
											@endif

													{{ $log->action }}
												</span>
										</td>
										<td>
											{{ $log->table }}
										</td>
										<td class="hidden-xs">
											{{ $log->description }}
										</td>
										<td class="hidden-xs">
											{{ $log->user->name }}
										</td>
										<td class="hidden-xs">
											{{  $log->created_at->diffForHumans() }}
										</td>

									</tr>
									<tr class="visible-xs">
										<td colspan="2">
											{{  $log->created_at->diffForHumans() }} por {{ $log->user->name }}
											en registro: {{ $log->description }}
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

						@if ($logs->count() > 0)
							<div class="panel-footer">
								<table>
									<tr>
										<td class="reg-info">
											Registros: {{ $logs->firstItem() }}-{{ $logs->lastItem() }} de {{ $logs->total() }}
										</td>
										<td class="navigation">
											{{ $logs->links() }}
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