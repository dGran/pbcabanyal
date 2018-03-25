@extends('layouts.admin')

@section('breadcrumb')
	<div class="breadcrumbpb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
		  		<a href="{{ route('admin') }}">Panel de Admin</a>
			</li>
			<li class="breadcrumb-item active">
				Banners
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

					{{-- errors --}}
					@if (count($errors) > 0)
					    <div class="alert alert-danger alert-auto-hide animated shake">
					    	<p>No se han actualizado los cambios:</p>
					        <ul>
					            @foreach ($errors->all() as $message)
					                <li>{{ $message }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					{{-- /errors --}}

					<div class="panel panel-default admin-register-list banners">

						<div class="panel-heading">

							<div class="title">
								<span class="name">Banners</span>
							</div>

						</div>

						<div class="panel-body">
							<ul>
							@foreach ($banners as $banner)
								<li class="banner">
									<small>Vista previa</small>
							        <div class="banner-penya" style="background: {{ $banner->color }}">
							            <div class="title">
							                {{ $banner->title }}
							            </div>
							            <div class="detail">
							                {{ $banner->detail }}
							            </div>
							        </div>
									<form
										id="formNew"
										role="form"
										method="POST"
										action="{{ route('admin.banners.update', $banner->id) }}">
										{{ csrf_field() }}
										<div class="row">
											<div class="col-xs-9">
												<div class="form-group">
													<label>Título</label>
													<input type="text" name="title" class="form-control" placeholder="Título" value="{{ $banner->title }}">
												</div>
											</div>
											<div class="col-xs-3">
												<div class="form-group">
													<label>Color</label>
													<select name="color" class="selectpicker form-control">
														@if ($banner->color == '#0f2b56')
															<option selected value="#0f2b56">
																Azul
															</option>
														@else
															<option value="#0f2b56">
																Azul
															</option>
														@endif
														@if ($banner->color == '#9c1837')
															<option selected value="#9c1837">
																Grana
															</option>
														@else
															<option value="#9c1837">
																Grana
															</option>
														@endif
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group">
													<label>Detalle</label>
													<input type="text" name="detail" class="form-control" placeholder="Detalle" value="{{ $banner->detail }}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group clearfix">
													<input type="submit" class="btn btn-success pull-right" value="Guardar cambios">
												</div>
											</div>
										</div>
									</form>
								</li>
							@endforeach
							</ul>

						</div> {{-- panel-body --}}

					</div> {{-- admin-register --}}

        		</div>
        	</div>

        </div>
	</div>

@endsection