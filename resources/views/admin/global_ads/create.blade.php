@extends('layouts.admin')

@section('breadcrumb')
	<div class="breadcrumbpb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
		  		<a href="{{ route('admin') }}">Panel de Admin</a>
			</li>
			<li class="breadcrumb-item active">
				<a href="{{ route('admin.categories') }}">Anuncios generales</a>
			</li>
			<li class="breadcrumb-item active">
				Nuevo
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
						id="formNew"
						role="form"
						method="POST"
						action="{{ route('admin.ads.save') }}">
						{{ csrf_field() }}
						<div class="panel panel-default admin-register-form">

							<div class="panel-heading">
								<span class="name">
									Nuev anuncio
								</span>
								<a class="action btn btn-default" id="btn-show-hide-left-menu">
									<i class="expand-icon fas fa-expand-arrows-alt hidden-xs"></i>
									<i class="expand-icon fas fa-arrows-alt visible-xs"></i>
								</a>
							</div> {{-- panel-heading --}}

							<div class="panel-body fields">
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group">
											<div class="form-group">
												<label for="name">Detalle<span class="required">obligatorio</span></label>
												<textarea name="detail" id="detail" class="form-control" cols="30" rows="10"></textarea>
											</div>
										</div> {{-- input group --}}
									</div> {{-- col --}}
								</div> {{-- row --}}
							</div> {{-- panel-body --}}

							<div class="panel-footer">
								<a href="{{ route('admin.ads') }}" type="button" class="btn btn-default pull-left">
									<i class="fas fa-list"></i><span class="hidden-xs">&nbsp;&nbsp;Volver al listado</span>
								</a>
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
        	$("#detail").focus();
        	$("#detail").select();

        	$('#detail').summernote({
        		height: '150px',
        		// placeholder: 'Escribe el contenido de la publicación',
        		dialogsFade: true,
        		fontNames: ['Arial', 'Arial Black'],
        		lang: 'es-ES',
				height: 200,
	 		    toolbar: [
		 		    ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
		 		    ['fontsize', ['color', 'fontsize']],
		 		    ['para', ['ul', 'ol', 'paragraph']],
		 		    ['table', ['table']],
		 		    ['insert', ['hr', 'link', 'picture', 'video']],
		 		    ['view', ['fullscreen']],
	 		  	]
        	});

        });

        Mousetrap.bind(['command+s', 'ctrl+s'], function() {
            $("#formNew").submit();
            return false;
        });
    </script>
@endsection