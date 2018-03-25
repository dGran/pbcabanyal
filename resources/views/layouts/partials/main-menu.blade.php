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
        <li class="{{ \Request::is('admin') || \Request::is('admin/*') ? 'current' : '' }}">
            <a href="{{ route('admin') }}">
                Admin
            </a>
        </li>
    </ul>
</div>