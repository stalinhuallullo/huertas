<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @if(isset($property_single) && isset($cache_company))
        <title>{{ $property_single->name }} | {{ $cache_company->name }}</title>
        <meta name="description" content="{{ $property_single->description }}">

        <meta property="og:title" content="{{ $property_single->name }} | {{ $cache_company->name }}">
        <meta property="og:url" content="{{ route('web.proyect.detail', ['slug' => $property_single->slug]) }}">
        <meta property="og:description" content="{{ $property_single->description }}">
        <meta property="og:image" content="">
    @elseif(isset($cache_pageseo))
        <title>{{ $cache_pageseo->title }}</title>
        <meta name="description" content="{{ $cache_pageseo->description }}">

        <meta property="og:title" content="{{ $cache_pageseo->title }}">
        <meta property="og:url" content="{{ route('web.home.index') }}">
        <meta property="og:description" content="{{ $cache_pageseo->description }}">
        <meta property="og:image" content="{{asset($cache_company->logo_rute)}}">
    @else
        <title>...</title>
        <meta name="description" content="...">
    @endif

    @if(isset($cache_company))
        <link rel="shortcut icon" href="{{asset($cache_company->icon_rute)}}" type="image/x-icon">
        <link rel="icon" href="{{asset($cache_company->icon_rute)}}" type="image/x-icon">
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&amp;display=swap" rel="stylesheet">
    <link href="{{asset('public/web/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <link href="{{asset('public/web/css/style.css?version=1.005')}}" rel="stylesheet" />



    <script type="text/javascript">
        var baseurl = "{{ URL::to('/') }}/";
        var page = 'home';

        var alias = '';
        var tipo = 'T';
        var alias_cat = '';
        var alias_tag = '';
        var alias_int = '';
        var path = "{{ URL::to('/') }}/";

        @if(isset($property_single) && isset($cache_company))
        /* Property
        * *********/
            var logo = '';
            var project = "{{ $property_single->name}}";
            var nombreProyecto = "{{ $property_single->name}}";
            var celular = "{{ $property_single->phone}}";
            var pry_id = "{{ $property_single->id}}";
            //var pry_id = "{{ $property_single->id}}";



            // INICIAR MAPS
            var pro_coordenada = [{{ $property_single->latitude}}, {{ $property_single->longitude}}];
            var ofi_coordenada = [{{ $cache_company->office_latitud }}, {{ $cache_company->office_longitud }}];
        console.log("pro_coordenada", pro_coordenada);
            var proyectolatlon = [ "{{ $property_single->projectAddress}}", parseFloat(pro_coordenada[0]), parseFloat(pro_coordenada[1]) ];
            //var oficina = [ "{{ $cache_company->office_address }}", parseFloat(ofi_coordenada[0]), parseFloat(ofi_coordenada[1]) ];

            var locations = [proyectolatlon];
        console.log("locations", locations);
        @endif
    </script>

    <style>
        .menorca__cards--collection .cards__top .lagrati-card, .menorca__cards--edition .cards__top .lagrati-card, .menorca__cards .cards__top .lagrati-card {
            display: none;
        }
        .menorca__cards--collection .cards__top .logo-cierra, .menorca__cards--edition .cards__top .logo-cierra, .menorca__cards .cards__top .logo-cierra {
            display: none;
        }
    </style>
    <link type="text/css" rel="stylesheet" href="{{asset('public/web/vendor/slick/slick.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/web/vendor/magnific-popup/magnific-popup.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/web/vendor/slick/slick-theme.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/web/css/modal-video.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/web/vendor/owl-carousel/owl.carousel.min.css')}}">
    <link href="{{asset('public/web/css/custom.css?version=1.005')}}" rel="stylesheet" />
    <script src="{{asset('public/web/vendor/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('public/web/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    @yield('styles')
</head>

<body>
    @if(isset($cache_company))
    <div class="contact-buttons @if(isset($contactFloat) && $contactFloat) interna-b @endif" id="contact-buttons">
        @if(isset($contactFloat) && $contactFloat)
            <span>¡Reserva tu cita aquí!</span>
        @else
            <span>Escríbenos</span>
        @endif
        <div>
            @if(isset($contactFloat) && $contactFloat)
                <div class="contact-item goto-contacto" data-go="#formulario">
                    <!--<img src="{{asset('public/web/images/contacto-icon.svg')}}" alt="icono contacto">-->
                    <svg width="40px" height="40px" viewBox="0 0 50 50">
                        <path fill="#ffffff" d="M37.9,45H10.1C7.3,45,5,42.7,5,39.9V13.1C5,10.3,7.3,8,10.1,8H19c1.1,0,2,0.9,2,2s-0.9,2-2,2h-8.9
                            C9.5,12,9,12.5,9,13.1v26.8c0,0.6,0.5,1.1,1.1,1.1h27.8c0.6,0,1.1-0.5,1.1-1.1V31c0-1.1,0.9-2,2-2s2,0.9,2,2v8.9
                            C43,42.7,40.7,45,37.9,45z"/>
                        <path fill="#ffffff" d="M17,34.5c-0.4,0-0.8-0.2-1.1-0.4c-0.4-0.4-0.5-0.9-0.4-1.4l2-8c0.1-0.3,0.2-0.5,0.4-0.7L33.9,8
                            c0.4-0.5,2.3-2.7,4.9-2.8c1.1-0.1,2.7,0.2,4.2,1.8c1.6,1.6,1.8,3.2,1.8,4.2c-0.2,2.6-2.3,4.5-2.8,4.9L26.1,32.1
                            c-0.2,0.2-0.4,0.3-0.7,0.4l-8,2C17.2,34.5,17.1,34.5,17,34.5z M20.4,25.8l-1.3,5.2l5.2-1.3l15.7-15.7c0,0,0.1-0.1,0.1-0.1
                            c0.5-0.4,1.7-1.6,1.8-2.8c0-0.7-0.3-1.3-0.9-1.9c-0.6-0.6-1.3-0.9-1.9-0.9c-1.2,0.1-2.5,1.3-2.8,1.8c0,0-0.1,0.1-0.1,0.1L20.4,25.8z
                            "/>
                        <path fill="#ffffff" d="M26.5,30c-0.4,0-0.8-0.1-1.1-0.4l-5-5c-0.6-0.6-0.6-1.5,0-2.1c0.6-0.6,1.5-0.6,2.1,0l5,5c0.6,0.6,0.6,1.5,0,2.1
	                        C27.3,29.9,26.9,30,26.5,30z"/>
                        <path fill="#ffffff" d="M40,17.5c-0.4,0-0.8-0.1-1.1-0.4l-6-6c-0.6-0.6-0.6-1.5,0-2.1c0.6-0.6,1.5-0.6,2.1,0l6,6c0.6,0.6,0.6,1.5,0,2.1
	                        C40.8,17.4,40.4,17.5,40,17.5z"/>
                    </svg>
                </div>
            @endif
            <div class="contact-item open-whatsapp" data-toggle="modal" data-target="#whatsapp-modal">
                <!--<img src="{{asset('public/web/images/whatsapp-icon-right.svg')}}" alt="icono whatsapp">-->
                <svg width="40px" height="40px" viewBox="0 0 39 39" >
                    <path fill="#ffffff" d="M39 18.9983C39 29.49 30.4286 37.9953 19.8529 37.9953C16.4968 37.9953 13.3442 37.1369 10.5998 35.6337L0 39L3.45528 28.8046C1.71301 25.9432 0.709623 22.5833 0.709623 18.997C0.710894 8.5053 9.27978 0 19.8554 0C30.4298 0.00254345 39 8.50657 39 18.9983ZM19.8516 3.02925C10.9763 3.02925 3.75668 10.1941 3.75668 19.0021C3.75668 22.4968 4.89614 25.7321 6.82281 28.3646L4.81348 34.2946L10.9966 32.3298C13.5401 33.9983 16.5833 34.9699 19.8516 34.9699C28.727 34.9699 35.9491 27.8063 35.9491 18.9983C35.9517 10.1941 28.7283 3.02925 19.8516 3.02925ZM29.5218 23.3743C29.4023 23.1823 29.0894 23.0653 28.6215 22.8313C28.1547 22.5973 25.844 21.4718 25.4154 21.3192C24.983 21.1628 24.6702 21.0839 24.3574 21.5507C24.0483 22.0174 23.1479 23.0653 22.872 23.3781C22.5986 23.6897 22.3251 23.7291 21.8559 23.4989C21.3866 23.2624 19.8733 22.7741 18.0801 21.1882C16.685 19.9521 15.7427 18.4298 15.4705 17.9631C15.1946 17.4977 15.4426 17.2459 15.6753 17.0144C15.8851 16.8046 16.1446 16.4701 16.3798 16.1967C16.6151 15.9258 16.6927 15.7338 16.8491 15.4222C17.003 15.1106 16.9254 14.8398 16.8097 14.6045C16.6927 14.3705 15.7554 12.0814 15.3624 11.1492C14.972 10.2183 14.5816 10.3722 14.3069 10.3722C14.0335 10.3722 13.7206 10.334 13.4078 10.334C13.095 10.334 12.5863 10.4472 12.1577 10.9139C11.7291 11.3807 10.5159 12.5061 10.5159 14.7978C10.5159 17.092 12.1958 19.3035 12.4311 19.6138C12.6677 19.9228 15.6791 24.7796 20.4493 26.6439C25.2221 28.507 25.2221 27.8851 26.0818 27.8063C26.944 27.7274 28.8593 26.6808 29.2484 25.5947C29.6401 24.5036 29.6401 23.5689 29.5218 23.3743Z" fill="white"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="modal fade" id="whatsapp-modal" tabindex="-1" role="dialog" aria-labelledby="whatsapp-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!--<div data-dismiss="modal" aria-label="Close"></div>-->
                <div class="wrap">
                    <div class="top">
                        <div class="close-link">
                            <svg height="16px" width="16px" viewBox="0 0 365.696 365.696">
                                <path fill="#212529" d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"/>
                            </svg>
                        </div>
                        <img src="{{asset('public/web/images/ICONO-HUERTAS.png')}}" alt="">
                        <div class="info-text">
                            <strong>{{ $cache_company->name }}</strong>
                            <span>En línea</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <textarea id="mensaje" name="" cols="30" rows="1" placeholder="Escribe un mensaje aqui"></textarea>
                        <!--<input type="text" id="mensaje" placeholder="Escribe un mensaje aqui">-->
                        <div class="send" data-tel="{{ $cache_company->phone }}">
                            <img width="25px" src="{{asset('public/web/images/send.svg')}}" alt="Enviar icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

      @include('web.includes.nav-bar.sub-nav')

    <div class="popup">
        <div class="close-btn">
            <svg height="16px" width="16px" viewBox="0 0 365.696 365.696">
                <path fill="#ffffff" d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"/>
            </svg>
        </div>
        <div class="popup__body animated">
            <img class="popup-titulo" src="{{asset('public/web/images/popup/NOS-RENOVAMOS.png')}}" alt="">
            <!--<a class="conoce-aqui" href="https://menorca.pe/#tuproximohogar">¡Conócelo aquí!</a>-->
        </div>
    </div>

    @include('web.includes.nav-bar.nav')

    @yield('content')

    @include('web.includes.footer')


    <script type="text/javascript" src="{{asset('public/web/vendor/jquery.form.js')}}"></script>
    <script src="{{asset('public/web/vendor/popper/popper.min.js')}}"></script>
    <script src="{{asset('public/web/vendor/isotope/isotope.pkgd.js')}}"></script>
    <script src="{{asset('public/web/vendor/isotope-packery/packery-mode.pkgd.js')}}"></script>


    <script type="text/javascript" src="{{asset('public/web/vendor/jquery.form.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/web/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/web/vendor/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/web/vendor/jquery-modal-video.min.js')}}"></script>
    <script src="{{asset('public/web/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/web/vendor/moment-with-locales.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('public/web/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/web/vendor/jquery-steps/jquery.steps.min.js')}}"></script>


    <script type="text/javascript" src="{{asset('public/web/js/script.js')}}"></script>

    @yield('scripts')

</body>
</html>
