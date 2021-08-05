@extends('web.layouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('public/web/css/blocks_style.css')}}" />
@endsection

@section('content')

    <div class="wraper">
        <section class="b17 b17-terreno">
            <div class="b17-container">
                <div class="b17-left">
                    <div class="b17-left-wrap">
                        <!--<div class="b17-figura-left"><img src="http://localhost/web/inmobiliariahuertas/public/web/images/hljlogo-01.png" alt="" width="155" height="85"></div>-->
                        <div class="b17-texto">
                            <h4>APOLO CONDOMINIO</h4>
                        </div>
                        <div class="b17-direccion">
                            <div class="b17-figura-direccion"><img src="{{asset('public/web/images/ubicacion.png')}}" width="22" height="25"></div>
                            <p class="b17-ubicacion">Asia - Chocaya</p>
                        </div>
                    </div>
                </div>
                <div class="b17-right">
                    <div class="b17-inner" style="background-image: url({{asset('public/web/images/prueba-2.png')}})"></div>
                </div>
            </div>
            <div class="b17-wrap-caracteristicas">
                <div class="wancho proyecto-2">
                    <div class="b17-list-wrap">
                        <div class="b17-item-wrap">
                            <div class="b17-figura-item"><img src="{{asset('public/web/images/lanzamiento-1.png')}}" height="25"></div>
                            <div class="b17-texto-item">
                                <p>Desde</p>
                                <span>120 m²</span>
                            </div>
                        </div>
                        <div class="b17-item-wrap">
                            <div class="b17-figura-item"><img src="{{asset('public/web/images/lanzamiento-1.png')}}" height="25"></div>
                            <div class="b17-texto-item">
                                <p>Hasta</p>
                                <span>180 m²</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="b24 terreno" id="sec-galeria">
            <div class="b24-left">
                <div class="b24-slider-carousel">
                    <div class="b24-slider">
                        <ul class="b24-ctn-slider">
                            <li class="b24-slider-item">
                                <a class="b24-big-img" style="background-image: url({{asset('public/web/images/prueba/1.jpg')}})">
                                    <div class="wancho">
                                        <h3 class="b24-title"></h3>
                                    </div>
                                </a>
                            </li>
                            <li class="b24-slider-item">
                                <a class="b24-big-img" style="background-image: url({{asset('public/web/images/prueba/2.jpg')}})">
                                    <div class="wancho">
                                        <h3 class="b24-title"></h3>
                                    </div>
                                </a>
                            </li>
                            <li class="b24-slider-item">
                                <a class="b24-big-img" style="background-image: url({{asset('public/web/images/prueba/3.jpg')}})">
                                    <div class="wancho">
                                        <h3 class="b24-title"></h3>
                                    </div>
                                </a>
                            </li>
                            <li class="b24-slider-item">
                                <a class="b24-big-img" style="background-image: url({{asset('public/web/images/prueba/4.jpg')}})">
                                    <div class="wancho">
                                        <h3 class="b24-title"></h3>
                                    </div>
                                </a>
                            </li>
                            <li class="b24-slider-item">
                                <a class="b24-big-img" style="background-image: url({{asset('public/web/images/prueba/5.jpg')}})">
                                    <div class="wancho">
                                        <h3 class="b24-title"></h3>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="wancho">
                        <div class="b24-carousel">
                            <ul class="b24-ctn-carousel">
                                <li class="b24-carousel-item">
                                    <div class="b24-figura-small"><img src="{{asset('public/web/images/prueba/1.jpg')}}" width="214" height="99"></div>
                                </li>
                                <li class="b24-carousel-item">
                                    <div class="b24-figura-small"><img src="{{asset('public/web/images/prueba/2.jpg')}}" width="214" height="99"></div>
                                </li>
                                <li class="b24-carousel-item">
                                    <div class="b24-figura-small"><img src="{{asset('public/web/images/prueba/3.jpg')}}" width="214" height="99"></div>
                                </li>
                                <li class="b24-carousel-item">
                                    <div class="b24-figura-small"><img src="{{asset('public/web/images/prueba/4.jpg')}}" width="214" height="99"></div>
                                </li>
                                <li class="b24-carousel-item">
                                    <div class="b24-figura-small"><img src="{{asset('public/web/images/prueba/5.jpg')}}" width="214" height="99"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="b27 terreno" id="sec-areas-comunes">
            <div class="wancho">
                <div class="b27-list-left">
                    <div class="b27-item">
                        <div class="b27-figura-item"><img src="{{asset('public/web/images/areas-1.png')}}" alt="Zona de parrilla"></div>
                        <div class="b27-title-item">CLUB HOUSE</div>
                    </div>
                    <div class="b27-item">
                        <div class="b27-figura-item"><img src="{{asset('public/web/images/areas-1.png')}}" alt="Ciclovías"></div>
                        <div class="b27-title-item">ZONA DE PARRILLAS</div>
                    </div>
                    <div class="b27-item">
                        <div class="b27-figura-item"><img src="{{asset('public/web/images/ciclovia.png')}}" alt="19 Parques"></div>
                        <div class="b27-title-item">CICLOVÍAS</div>
                    </div>
                    <div class="b27-item">
                        <div class="b27-figura-item"><img src="{{asset('public/web/images/iconos-nuevo.png')}}" alt="Luz eléctrica"></div>
                        <div class="b27-title-item">PARQUES</div>
                    </div>
                    <div class="b27-item">
                        <div class="b27-figura-item"><img src="{{asset('public/web/images/areas-1.png')}}" alt="Membresía"></div>
                        <div class="b27-title-item">SERVICIOS BÁSICOS</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="b28" id="sec-sobre-proyectos">
            <div class="wancho">
                <div class="b28-texto">
                    <h3 class="b28-title">APOLO CONDOMINIO</h3>
                    <div class="b28-description">
                        <p>El mejor lugar para gozar del mejor clima todo el año, favorecida con temperaturas cálidas, siempre tendrás una excusa para disfrutar de una parrilla con la familia, o de todo lo que puedes hacer al aire libre. Reserva tu cita hoy y vive la experiencia junto a Huertas Inmobiliaria.</p>
                    </div>
                </div>
            </div>
            <div class="b7-right" style="background-image: url({{asset('public/web/images/deluxe-banner/hlj.jpg')}})">
                <a href="javascript:void(0);" data-type="video-youtube" class="b7-image-button b7-play open-boxlight" id="b7-open-video">
                    <div class="b30-wrap-zoom video">
                        <div class="b31-zoom"><span class="b30-play"></span></div>
                    </div>
                </a>
            </div>
        </section>

        <!--<section class="b21 terreno" id="sec-ubication">
            <div class="wancho b21-main">
                <h3 class="b21-title">Ubicación del proyecto</h3>
                <div class="b21-right">
                    <div class="b21-cnt-tab">
                        <img src="{{asset('public/web/images/deluxe-banner/desktop-hlj2.jpg')}}" alt="" style="width: 100%">
                    </div>
                </div>
            </div>
        </section>-->


        <section class="b22 b22-terreno"  id="sec-planos">
            <div class="b22-wrap">
                <div class="wancho">
                    <div class="b22-left">
                        <div class="b22-slider-carousel">
                            <div class="b22-slider">
                                <ul class="b22-ctn-slider">
                                    <li class="b22-slider-item">
                                        <a href="{{asset('public/web/images/prueba/4.jpg')}}" target="_blank" class="b22-big-img b22-gallery">
                                            <img src="{{asset('public/web/images/prueba/4.jpg')}}" style="width: 100%">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="b22-right" id="formulario">
                        @include("web.includes.form-contact-proyect", ["size" => 12])
                    </div>
                </div>
            </div>

        </section>


    </div>

@endsection

@section("scripts")
    <script type="text/javascript" src="{{asset('public/web/js/deluxe.js?version=1.0.0')}}"></script>
@endsection
