@extends('layouts.app')

@section('breadcrumb')
	<div class="breadcrumbpb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
		  		<a href="{{ route('admin') }}">Panel de Admin</a>
			</li>
			<li class="breadcrumb-item active">
				<a href="{{ route('admin.categories') }}">Categorías</a>
			</li>
			<li class="breadcrumb-item active">
				Nueva
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
					@if(session()->has('error'))
						<div class="alert alert-danger alert-auto-hide animated shake">
							{{ session()->get('error') }}
						</div>
					@endif
					<form
						id="formNewPost"
						role="form"
						method="POST"
						action="{{ route('admin.categories.save') }}">
						{{ csrf_field() }}
						<div class="panel panel-default">

							<div class="panel-heading">
								Nueva categoría
							</div> {{-- panel-heading --}}

							<div class="panel-body fields">
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group">
											<div class="form-group">
												<label for="name">Nombre<span class="required">obligatorio</span></label>
												<input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
											</div>
										</div> {{-- input group --}}
									</div> {{-- col --}}
								</div> {{-- row --}}
							</div> {{-- panel-body --}}

							<div class="panel-footer">
								<button type="reset" class="btn btn-default" data-dismiss="modal">Reset</button>
								<button type="submit" class="btn btn-primary">Guardar cambios</button>
							</div> {{-- panel-footer --}}

						</div> {{-- panel --}}
					</form>
        		</div> {{-- col --}}
        	</div> {{-- row --}}
        </div> {{-- margin10 --}}
	</div> {{-- container --}}

@endsection