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
				{{ $category->name }}
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
					{{-- errors --}}
					@if (count($errors) > 0)
					    <div class="alert alert-danger animated shake">
					    	<p>Corrige los siguientes errores:</p>
					        <ul>
					            @foreach ($errors->all() as $message)
					                <li>{{ $message }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					{{-- /errors --}}
					<form
						id="formEdit"
						role="form"
						method="POST"
						action="{{ route('admin.categories.update', $category->slug) }}">
						{{ method_field('PUT') }}
						{{ csrf_field() }}
						<div class="panel panel-default admin-register-form">

							<div class="panel-heading">
								<span class="name">
									Editar categoría
								</span>
								<a href="{{ route('admin.categories') }}" type="button" class="btn btn-default btn-sm action">
									<i class="fas fa-list"></i><span class="hidden-xs">&nbsp;&nbsp;Volver al listado</span>
								</a>
							</div> {{-- panel-heading --}}

							<div class="panel-body fields">
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group">
											<div class="form-group">
												<label for="name">Nombre<span class="required">obligatorio</span></label>
												<input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ $category->name }}">
											</div>
										</div> {{-- input group --}}
									</div> {{-- col --}}
								</div> {{-- row --}}
							</div> {{-- panel-body --}}

							<div class="panel-footer">
								<button type="reset" class="btn btn-default" data-dismiss="modal">Reset</button>
								<button type="submit" class="btn btn-success">Guardar cambios</button>
							</div> {{-- panel-footer --}}

						</div> {{-- panel --}}
					</form>
        		</div> {{-- col --}}
        	</div> {{-- row --}}
        </div> {{-- margin10 --}}
	</div> {{-- container --}}

@endsection

@section('js')
    <script>
        $(document).ready(function(){
        	// put focus on input
        	$("#name").focus();
        	$("#name").select();

	        $("#name").focus(function(){
	        	$(this).select();
	        });
        });

        Mousetrap.bind(['command+s', 'ctrl+s'], function() {
            $("#formNew").submit();
            return false;
        });
    </script>
@endsection