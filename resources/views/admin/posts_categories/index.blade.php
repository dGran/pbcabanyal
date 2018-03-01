@extends('layouts.app')

@section('breadcrumb')
	<div class="breadcrumbpb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
		  		<a href="{{ route('admin') }}">Panel de Admin</a>
			</li>
			<li class="breadcrumb-item active">
				Categorías
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

					<div class="panel panel-default admin-register">
						<div class="panel-heading">
							<span class="name">
								Categorías
							</span>
							<a href="{{ route('admin.categories.create') }}" type="button" class="btn btn-success btn-sm action">
								<i class="fa fa-plus" aria-hidden="true"></i>
							</a>
						</div>
						<div class="panel-body">
							<table class="table table-responsive">
								@if ($categories->count() > 0)
									@foreach ($categories as $category)
									<tr>
										<td width="32" align="right">
											{{ $category->id }}
										</td>
										<td>
											{{ $category->name }}
										</td>
										<td width="48">
											@if ($category->posts->count() > 0)
												<small>
													<i class="far fa-comment"></i> {{ $category->posts->count() }}
												</small>
											@endif
										</td>
										<td width="24">
											@if ($category->posts->count() > 0)
                    							<button class="btn btn-danger btn-sm" disabled>
                    								<i class="fas fa-trash"></i>
                    							</button>
											@else
												<form action="{{ route('admin.categories.delete', $category->id) }}" method="post">
													{{ csrf_field() }}
													{{ method_field('delete') }}
	                    							<button class="btn btn-danger btn-sm" type="submit">
	                    								<i class="fas fa-trash"></i>
	                    							</button>
	                							</form>
	                						@endif

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
										<td>Lista vacía...</td>
									</tr>
								@endif
  							</table>
						</div> {{-- panel-body --}}
						@if ($categories->links())
							<div class="panel-footer">
								{{ $categories->links() }}
							</div>
						@endif
					</div> {{-- admin-register --}}
        		</div>
        	</div>

        </div>
	</div>

@endsection