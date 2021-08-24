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
                            <!--<h4>APOLO CONDOMINIO</h4>-->
                            <img src="{{asset('public/web/images/LOGO-APOLO.png')}}" style="width: 100%">
                        </div>
                        <div class="b17-direccion">
                            <div class="b17-figura-direccion"><img src="{{asset('public/web/images/ubicacion.png')}}" width="22" height="25"></div>
                            <p class="b17-ubicacion">Asia - Chocaya</p>
                        </div>
                    </div>
                </div>
                <div class="b17-right">
                    <div class="b17-inner" style="background-image: url({{asset('public/web/images/prueba/APOLO.jpg')}})"></div>
                </div>
            </div>
            <div class="b17-wrap-caracteristicas">
                <div class="wancho proyecto-2">
                    <div class="b17-list-wrap">
                        <div class="b17-item-wrap">
                            <div class="b17-texto-item">
                                <p>Desde</p>
                                <span>120 m²</span>
                            </div>
                        </div>
                        <div class="b17-item-wrap">
                            <div class="b17-texto-item">
                                <p>Hasta</p>
                                <span>180 m²</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @php
            $listDeluxe = [
                                "APOLO-DELEX-01.png",
                                "APOLO-DELEX-02.png",
                                "APOLO-DELEX-03.png",
                                "APOLO-DELEX-04.png",
                                "APOLO-DELEX-05.png",
                            ];

        @endphp

        <section class="b24 terreno" id="sec-galeria">
            <div class="b24-left">
                <div class="b24-slider-carousel">
                    <div class="b24-slider">
                        <ul class="b24-ctn-slider">
                            @foreach($listDeluxe as $item2)
                            <li class="b24-slider-item">
                                <a class="b24-big-img" style="background-image: url({{asset('public/web/images/prueba/'.$item2)}})">
                                    <div class="wancho">
                                        <h3 class="b24-title"></h3>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="wancho">
                        <div class="b24-carousel">
                            <ul class="b24-ctn-carousel">
                                @foreach($listDeluxe as $item)
                                    <li class="b24-carousel-item">
                                        <div class="b24-figura-small"><img src="{{asset('public/web/images/prueba/'.$item)}}" width="214" height="99"></div>
                                    </li>
                                @endforeach
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
                        <div class="b27-figura-item"><img src="{{asset('public/web/images/proyect-icon/CLUB-HOUSE-.png')}}"></div>
                        <div class="b27-title-item">CLUB HOUSE</div>
                    </div>
                    <div class="b27-item">
                        <div class="b27-figura-item"><img src="{{asset('public/web/images/proyect-icon/AREA-.png')}}"></div>
                        <div class="b27-title-item">AREA</div>
                    </div>
                    <div class="b27-item">
                        <div class="b27-figura-item"><img src="{{asset('public/web/images/proyect-icon/SEGURIDAD-DELUXE.png')}}"></div>
                        <div class="b27-title-item">SEGURIDAD</div>
                    </div>
                    <div class="b27-item">
                        <div class="b27-figura-item"><img src="{{asset('public/web/images/proyect-icon/PARQUES-Y-JARDINES.png')}}"></div>
                        <div class="b27-title-item">PARQUES Y JARDINES</div>
                    </div>
                    <div class="b27-item">
                        <div class="b27-figura-item"><img src="{{asset('public/web/images/proyect-icon/TITULO-DE-PROPIEDAD-.png')}}"></div>
                        <div class="b27-title-item">TITULO DE PROPIEDAD</div>
                    </div>
                    <div class="b27-item">
                        <div class="b27-figura-item"><img src="{{asset('public/web/images/proyect-icon/ZONA-DE-EJERCICIOS.png')}}"></div>
                        <div class="b27-title-item">ZONA DE EJERCICIOS</div>
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
                    <a href="#videoModal" data-toggle="modal" data-target="#videoModal" data-video-id='bQpYV3WZ47I' class="b7-image-button b7-play open-boxlight js-video-button" >
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


        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <button type="button" class="close cursor-pointer mb-3" data-dismiss="modal" aria-label="Close">
                    <svg width="24px" height="24px" viewBox="0 0 365.696 365.696">
                        <path fill="#ffffff" d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"/>
                    </svg>
                </button>

                <div class="modal-content">
                    <div class="modal-body">
                        <div class="embed-container">
                            <iframe width="100%" height="500" src="" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection

@section("scripts")
    <script type="text/javascript" src="{{asset('public/web/js/deluxe.js?version=1.0.1')}}"></script>
@endsection
