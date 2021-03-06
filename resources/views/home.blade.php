@extends('layouts.app')

@section ('css')
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
@endsection

@section('content')
    <a href="{{ route('page', 2) }}">Pagina dinamica de prueba</a>

    <div class="presentation">
        <div class="container">
            <strong>Bienvenido a nuestra penya</strong>, nuestro punto de encuentro blaugrana. Si eres aficionado del Barcelona no lo dudes y <a href="">únete a nuestra familia barcelonista</a>, podrás ver todos los partidos de nuestro equipo con un gran ambiente, viajar a ver partidos de nuestro equipo, tendrás acceso a entradas para ver al equipo en directo.
        </div>
    </div>

    <div class="container">

        <div class="margin10">

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


            @if ($ads->count() > 0)
                <div class="ads">
                    @foreach ($ads as $ad)
                        <div class="alert alert-info alert-dismissible animated shake text-center" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {!! $ad->detail !!}
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="banners">
                @include('home.partials.banners')
            </div> {{-- banners --}}


            <div class="row">
                <div class="col-md-4">


                    <h4>La opinión del soçi</h4>
                    <div class="opinion">
                        <ul>
                        @foreach ($opinions as $opinion)
                            <li><a href="">{{$opinion->title}}</a></li>
                        @endforeach
                        </ul>
                        <a href="">Ver todas las opiniones</a>

                    </div>


                    <h4>Próximos eventos</h4>
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
                <!-- Timeline -->

                </div>
                <!-- /Column -->

                <div class="col-md-8">
                    @include('home.partials.posts')
                </div>

                </div>
                <!-- /Column -->


            </div>

        </div>

    </div>
    <!-- /Container -->
@endsection