@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<figure style="padding: 1em 0">
					<img class="img-responsive center-block" src="{{ asset("img/errors/error404.png") }}" alt="">
				</figure>
				<div style="text-align: center; padding-top: 1em">
					<p>La página que buscas no ha sido encontrada</p>
					Regresar a la <a href="{{ route("home") }}">página principal</a>
				</div>
			</div>
		</div>
	</div>
@endsection