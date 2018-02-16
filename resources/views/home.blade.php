@extends('layouts.app')

@section ('css')
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="margin10">

            <p>Bienvenido a nuestra penya, nuestro punto de encuentro blaugrana. Si eres aficionado del Barcelona no lo dudes y <a href="">únete a nuestra familia barcelonista</a>, podrás ver todos los partidos de nuestro equipo con un gran ambiente, viajar a ver partidos de nuestro equipo, acceso a entradas, acceso a finales.</p>

        {{--     <div class="row">
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
            </div> --}}

            <div class="">
                <div class="alert alert-info alert-dismissible animated shake text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Disponible la lotería de Navidad!</strong><br>Recoge tus boletos y reparte suerte. Este año nos toca!, buena suerte!
                    <h3>52.045 - 8.567</h3>
                </div>

            </div>


            <div class="row">
                <div class="col-md-4">



                    <h4>Próximas actividades</h4>
                <!-- Timeline -->
                    <div class="timeline">

                        <!-- Line component -->
                        <div class="line text-muted"></div>

                        <!-- Separator -->
                        <div class="separator text-muted">
                            <time>Domingo 11 feb 2018</time>
                        </div>
                        <!-- /Separator -->

                        <!-- Panel -->
                        <article class="panel panel-success">

                            <!-- Icon -->
                            <div class="panel-heading icon">
                                <i class="fa fa-futbol-o" aria-hidden="true"></i>
                            </div>
                            <!-- /Icon -->

                            <!-- Heading -->
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <strong>F.C.Barcelona</strong> -  Getafe
                                </h2>
                            </div>
                            <!-- /Heading -->

                            <!-- Body -->
                            <div class="panel-body">
                                <p>LaLiga Santander - Jornada 23</p>
                                <p>Camp Nou, 16.15h</p>

                                <img class="img-responsive img-rounded" src="http://e00-marca.uecdn.es/assets/multimedia/imagenes/2018/02/10/15182908419763.jpg" width="350" />
                            </div>
                            <!-- /Body -->

                            <!-- Footer -->
                            <div class="panel-footer">
                                <small>Fütbol masculino</small>
                            </div>
                            <!-- /Footer -->

                        </article>
                        <!-- /Panel -->

                        <!-- Separator -->
                        <div class="separator text-muted">
                            <time>Miércoles 14 feb 2018</time>
                        </div>
                        <!-- /Separator -->

                        <!-- Panel -->
                        <article class="panel panel-primary">

                            <!-- Icon -->
                            <div class="panel-heading icon">
                                <i class="fa fa-bus" aria-hidden="true"></i>
                            </div>
                            <!-- /Icon -->

                            <!-- Heading -->
                            <div class="panel-heading">
                                <h2 class="panel-title">Viaje a Barcelona</h2>
                            </div>
                            <!-- /Heading -->

                            <!-- Body -->
                            {{-- <div class="panel-body"> --}}
                            <ul class="list-group">
                                <li class="list-group-item">Almuerzo</li>
                                <li class="list-group-item">Comida en granja de iniesta</li>
                                <li class="list-group-item">Visita al Museu</li>
                                <li class="list-group-item">
                                    Partido
                                    <img class="img-responsive img-rounded" src="http://e00-marca.uecdn.es/assets/multimedia/imagenes/2018/02/10/15182908419763.jpg" width="350" />
                                </li>
                                <li class="list-group-item">tables</li>
                            </ul>
                            {{-- </div> --}}
                            <!-- /Body -->

                            <!-- Footer -->
                            <div class="panel-footer">
                                <small>Footer is also supported!</small>
                            </div>
                            <!-- /Footer -->

                        </article>
                        <!-- /Panel -->


                    </div>
                    <!-- /Timeline -->

                </div>
                <!-- /Column -->

                <div class="col-md-8">

                    @foreach ($posts as $post)

                        <article class="panel panel-default">

                            <div class="panel-heading">
                                <h4>{{ $post->title }}</h4>
                            </div>
                            <div class="panel-body">
                                <p>{!! $post->description !!}</p>
                            </div>
                            <div class="panel-footer">
                                <div class="text-center">
                                    <div>
                                        <small>Comparte esta publicación</small>
                                    </div>
                                    <a href="">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                    <a href="">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                    <a href="">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                </div>

                            </div>

                        </article>

                    @endforeach

                    {{ $posts->links() }}
                </div>

                </div>
                <!-- /Column -->


            </div>

        </div>

    </div>
    <!-- /Container -->
@endsection