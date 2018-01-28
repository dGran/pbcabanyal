@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p>Nombre:</p>
                            <p><strong>{{ Auth::user()->name }}</strong></p>
                            <hr>
                            <p>Email:</p>
                            <p><strong>{{ Auth::user()->email }}</strong></p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="img-responsive img-thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis dolorem repellendus eaque dignissimos est veritatis perspiciatis qui incidunt fugiat, iste magni animi. Minima cumque dolores, officia, debitis fugiat dignissimos nisi?
        </div>

<span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-twitter fa-stack-1x"></i>
</span>
fa-twitter on fa-square-o<br>
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
</span>
fa-flag on fa-circle<br>
<span class="fa-stack fa-lg">
  <i class="fa fa-square fa-stack-2x"></i>
  <i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
</span>
fa-terminal on fa-square<br>
<span class="fa-stack fa-lg">
  <i class="fa fa-camera fa-stack-1x"></i>
  <i class="fa fa-ban fa-stack-2x text-danger"></i>
</span>
fa-ban on fa-camera


<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>

<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>

<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>

<i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>

<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>

<a class="btn btn-default" href="path/to/settings" aria-label="Settings">
  <i class="fa fa-cog" aria-hidden="true"></i>
</a>

<a class="btn btn-danger" href="path/to/settings" aria-label="Delete">
  <i class="fa fa-trash-o" aria-hidden="true"></i>
</a>

<a class="btn btn-primary" href="#navigation-main" aria-label="Skip to main navigation">
  <i class="fa fa-bars" aria-hidden="true"></i>
</a>
<i class="fa fa-refresh fa-spin fa-3x fa-fw" aria-hidden="true"></i>
<span class="sr-only">Refreshing...</span>

<i class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i>
<span class="sr-only">Saving. Hang tight!</span>
<div class="input-group margin-bottom-sm">
  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
  <input class="form-control" type="text" placeholder="Email address">
</div>
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
  <input class="form-control" type="password" placeholder="Password">
</div>
<a href="path/to/shopping/cart" class="btn btn-primary" aria-label="View 3 items in your shopping cart">
  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
</a>
<i class="fa fa-battery-half" aria-hidden="true"></i>
<span class="sr-only">Battery level: 50%</span>
    </div>
</div>
@endsection