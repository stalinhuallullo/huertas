<nav class="menu header-home">
    <div class="container navbar">

        <a href="{{route('web.home.index')}}" class="menu__brand">
            <img class="logotipo-color" src="{{asset('public/web/images/logo-huertas.png')}}" alt="Logotipo">
            <img class="logotipo-blanco" src="{{asset('public/web/images/logo-huertas-white.png')}}" alt="Logotipo">
        <!--<img class="d-none d-lg-block logotipo-verde" src="{{asset('public/web/images/logotipo.svg')}}" alt="Logotipo ">
            <img class="d-none d-lg-block logotipo-blue" src="{{asset('public/web/images/logotipo-blue.svg')}}" alt="Logotipo ">
            <img class="d-block d-lg-none logotipo-blanco" src="{{asset('public/web/images/logotipo-white.svg')}}" alt="Logotipo ">-->
        </a>
        <div class="menu__button">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="close__button">
            <img src="{{asset('public/web/images/close-button.svg')}}" alt="Botton cerrar">
        </div>

        <ul class="menu__box menu__box-click">
            <li class="menu__item"><a class="menu__link @if(isset($menu) && $menu == $global_page_enum::Home) active @endif" href="{{route('web.home.index')}}">Inicio</a></li>

            <li class="menu__item">
                <a class="menu__link @if(isset($menu) && $menu == $global_page_enum::Proyect) active @endif" href="{{route('web.proyect.index')}}">
                    Proyectos
                    <svg height="11px" width="11px" viewBox="0 0 451.847 451.847">
                        <path fill="#707070" d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751
                            c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0
                            c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"/>
                    </svg>
                </a>
                <ul id="des_terreno">
                    @if(isset($cache_nav_propertys))
                        @foreach($cache_nav_propertys as $nav_item)
                            <li><a class="desplegable @if(isset($sub_menu) && $sub_menu == $nav_item["slug"]) active @endif" href="{{route('web.proyect.detail', ['slug' => $nav_item["slug"]])}}">{{ $nav_item["name"] }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </li>
            <li class="menu__item"><a class="menu__link @if(isset($menu) && $menu == $global_page_enum::Deluxe) active @endif" href="{{route('web.deluxe.index')}}">Deluxe</a></li>
            <li class="menu__item"><a class="menu__link @if(isset($menu) && $menu == $global_page_enum::Service) active @endif" href="{{route('web.services.index')}}">Servicios</a></li>

            <li class="menu__item"><a class="menu__link @if(isset($menu) && $menu == $global_page_enum::Novelties) active @endif" href="{{route('web.novelties.index')}}">Novedades</a></li>
            <li class="menu__item"><a class="menu__link @if(isset($menu) && $menu == $global_page_enum::Us) active @endif" href="{{route('web.us.index')}}">Nosotros</a></li>
        </ul>
    </div>
</nav>
