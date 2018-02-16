@extends('layouts.app')

@section ('css')
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
@endsection

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
        		<div class="col-sm-4">
					<ul class="list-group">
						<li class="list-group-item"><a href="" style="display:block">Usuarios</a></li>
						<li class="list-group-item"><a href="">Publicaciones</a></li>
						<li class="list-group-item"><a href="">Categorías</a></li>
						<li class="list-group-item"><a href="">Anuncios generales</a></li>
						<li class="list-group-item"><a href="">Galerías</a></li>
						<li class="list-group-item"><a href="">Encuestas</a></li>
					</ul>
        		</div>
        		<div class="col-sm-8">
					<div class="panel panel-default">
						<div class="panel-heading">Panel heading without title</div>
						<div class="panel-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, asperiores. Laboriosam ipsam fugiat tenetur cum, voluptates vel illum facere consectetur! Sapiente nisi, perferendis, provident rem corporis perspiciatis quisquam earum repellat!
						</div>
					</div>
        		</div>
        	</div>

        </div>
	</div>

@endsection