<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="wrap">
        <div class="top-menu">
            <div class="container">
                síguenos!...
                <a href="">
                    <i class="fa fa-facebook-square animated jello" aria-hidden="true"></i>
                </a>
                <a href="">
                    <i class="fa fa-twitter-square animated jello" aria-hidden="true"></i>
                </a>
                <i class="fa fa-phone" aria-hidden="true"></i>
                600 000 000 - <a href="mailto:pbcabanyal1106@gmail.com">pbcabanyal1106@gmail.com</a>

{{--                 <a href="">
                    <span class="fa-stack animated jello">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                <a href="">
                    <span class="fa-stack animated jello">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                </a> --}}
            </div>

        </div>

        <nav class="title-menu">
            <div class="container clearfix">
                <div class="menu-btn pull-left visible-xs">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <a href="{{ route('home') }}">
                    <figure class="logo hidden-xs">
                        <img src="{{ asset('img/logo.png') }}">
                    </figure>
                    <div class="brand animated pulse">
                        <div class="hidden-xs">Penya Barcelonista Cabanyal Ciutat Jardí - Valencia</div>
                        <div class="visible-xs">P. B. Cabanyal</div>
                    </div>
                </a>
                <div class="user-btn pull-right visible-xs">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </div>

            </div>
            {{-- /container --}}
        </nav>

        {{-- /top-menu --}}
{{--
        @guest
            Invitado
        @else
            Registrado
        @endguest --}}

        <div class="main-menu">
            <div class="container">
                <ul>
                    <li class="{{ Route::currentRouteName() == 'home' ? 'current' : '' }}">
                        <a href="{{ route('home') }}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'penya' ? 'current' : '' }}">
                        <a href="{{ route('penya') }}">
                            Nuestra peña
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Instalaciones
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Galería
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Viajes
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Prensa
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Juegos
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Hazte socio!
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        @yield('breadcrumb')

        @yield('content')

    </div>
    {{-- wrap --}}

    <div id="footer">
        <div class="container">
            © Copyright PB Cabanyal - Pagina Oficial de la Penya Barcelonista Cabanyal Ciutat Jardí
        </div>
    </div>

    <!-- BackToTop Button -->
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.10/summernote.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.10/lang/summernote-es-ES.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    @yield('js')

    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop() > 100){
                    $('#scroll').fadeIn();
                }else{
                    $('#scroll').fadeOut();
                }
            });
            $('#scroll').click(function(){
                $("html, body").animate({ scrollTop: 0 }, 600);
                return false;
            });
        });
    </script>
</body>
</html>
