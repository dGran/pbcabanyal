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
        		<div class="col-sm-4">
					@include('admin.partials.menu')
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