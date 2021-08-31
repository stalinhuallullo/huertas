<nav class="sidebar">
    <div class="sidebar-header">

        <img class="logotipo-color" src="{{asset('public//web/images/logo-huertas-white.png')}}" alt="Logotipo" style="width: 130px"/>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Páginas</li>
            <li class="nav-item">
                <a href={{ route("admin.home.index") }} class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Inicio</span>
                </a>
            </li>
            <li class="nav-item">
                <a href={{ route("properties.index") }} class="nav-link">
                    <i class="link-icon" data-feather="code"></i>
                    <span class="link-title">Proyectos</span>
                </a>
            </li>
            <li class="nav-item">
                <a href={{ route("services.index") }} class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Servicios</span>
                </a>
            </li>
            <li class="nav-item">
                <a href={{ route("admin.nosotros") }} class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Nosotros</span>
                </a>
            </li>
            <li class="nav-item">
                <a href={{ route("novelties.index") }} class="nav-link">
                    <i class="link-icon" data-feather="clock"></i>
                    <span class="link-title">Novedades</span>
                </a>
            </li>
            <li class="nav-item">
                <a href={{ route("admin.contactanos") }} class="nav-link">
                    <i class="link-icon" data-feather="phone-forwarded"></i>
                    <span class="link-title">Contactanos</span>
                </a>
            </li>
            <li class="nav-item">
                <a href={{ route("admin.configuracion") }} class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">configuración</span>
                </a>
            </li>
            {{-- <li class="nav-item nav-category">Configuración</li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Email</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="####" class="nav-link">Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a href="####" class="nav-link">Read</a>
                        </li>
                        <li class="nav-item">
                            <a href="####" class="nav-link">Compose</a>
                        </li>
                    </ul>
                </div>
            </li> --}}
        </ul>
    </div>
</nav>

