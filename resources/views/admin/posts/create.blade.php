@extends('layouts.app')

@section('breadcrumb')
	<div class="breadcrumbpb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
		  		<a href="{{ route('admin') }}">Panel de Admin</a>
			</li>
			<li class="breadcrumb-item active">
				<a href="{{ route('admin.posts') }}">Publicaciones</a>
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
					{{-- Session messages --}}
{{-- 					@if(session()->has('message'))
						<div class="alert alert-success alert-auto-hide animated bounce">
							{{ session()->get('message') }}
						</div>
					@endif --}}
					@if(session()->has('error'))
						<div class="alert alert-danger alert-auto-hide animated shake">
							{{ session()->get('error') }}
						</div>
					@endif
					<form
						id="formNewPost"
						role="form"
						method="POST"
						action="{{ route('admin.posts.save') }}">
						{{ csrf_field() }}
						<div class="panel panel-default">

							<div class="panel-heading">
								Nueva publicación
							</div> {{-- panel-heading --}}

							<div class="panel-body fields">
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group">
											<div class="form-group">
												<label for="category">Categoría<span class="required">obligatorio</span></label>
												<select name="category" id="category" class="selectpicker form-control">
													@foreach ($categories as $category)
														<option value="{{ $category->id }}">
															{{ $category->name }}
														</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<label for="title">Título<span class="required">obligatorio</span></label>
												<input type="text" class="form-control" id="title" name="title" placeholder="Título">
											</div>
											<div class="form-group">
												<label for="detail">Detalle<span class="required">obligatorio</span></label>
												<textarea name="detail" id="detail" class="form-control" cols="30" rows="10"></textarea>
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

@section('js')
    <script>
        $(document).ready(function(){
        	$('#detail').summernote({
        		height: '150px',
        		// placeholder: 'Escribe el contenido de la publicación',
        		dialogsFade: true,
        		fontNames: ['Arial', 'Arial Black'],
        		lang: 'es-ES',
				toolbar: [
				// [groupName, [list of button]]
					['style', ['bold', 'italic', 'underline', 'clear']],
					['font', ['strikethrough']],
					['fontsize', ['fontsize']],
					['color', ['color']],
					['para', ['ul', 'ol', 'paragraph']],
					['height', ['height']],
					['insert', ['link', 'picture']]
				],

        	});
        });
    </script>
@endsection