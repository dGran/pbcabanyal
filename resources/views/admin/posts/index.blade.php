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
								@foreach ($posts as $post)
								<tr>
									<td>{{ $post->id }}</td>
									<td>{{ $post->title }}</td>
								</tr>
								@endforeach
  							</table>
						</div>
					</div>
        		</div>
        	</div>

        </div>
	</div>

@endsection