@extends('layouts.app')

@section('breadcrumb')
	<div class="breadcrumbpb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
		  		<a href="{{ route('admin') }}">Panel de Admin</a>
			</li>
			<li class="breadcrumb-item active">
				Publicaciones
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

					<div class="panel panel-default">
						<div class="panel-heading">
							Publicaciones
						</div>
						<div class="panel-body">
							<a href="{{ route('admin.posts.create') }}" type="button" class="btn btn-primary">
								Nueva publicación
							</a>
							<table class="table table-responsive">
								@if ($posts->count() > 0)
									@foreach ($posts as $post)
									<tr>
										<td>{{ $post->id }}</td>
										<td>{{ $post->title }}</td>
										<td width="24">
											<a href="" title="Publicar en facebook">
												<i class="fab fa-facebook"></i>
											</a>
										</td>
										<td width="24">
											<a href="" title="Publicar en twitter">
												<i class="fab fa-twitter"></i>
											</a>
										</td>
										<td width="24">
											<a href="" title="Editar publicación">
												<i class="fas fa-edit"></i>
											</a>
										</td>
										<td width="24">
											<a href="" title="Eliminar publicación">
												<i class="fas fa-trash"></i>
											</a>
										</td>
									</tr>
									@endforeach
								@else
									<tr>
										<td>No existen publicaciones</td>
									</tr>
								@endif
  							</table>
						</div>
					</div>
        		</div>
        	</div>

        </div>
	</div>

@endsection