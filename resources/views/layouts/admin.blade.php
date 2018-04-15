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
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="wrap">
        <nav class="title-menu admin">
            @include('layouts.partials.admin-title-menu')
        </nav>

        <div class="main-menu">
            @include('layouts.partials.main-menu')
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
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mousetrap/1.6.1/mousetrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="{{ asset('js/admin.js') }}"></script>

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

        Mousetrap.bind(['command+z', 'ctrl+z'], function() {
            window.history.go(-1);
            return false;
        });
    </script>
</body>
</html>
