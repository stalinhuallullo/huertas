@extends('web.layouts.index')

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    @if(isset($property_color->url) && $property_color->url != "")
        <link href="{{asset($property_color->url)}}" rel="stylesheet" />
    @endif
@endsection

@section('content')

    <div class="wraper">
        <div class="banner-interna">
            <div class="top-img" style="background-image: url({{asset($property_single->coverPage_rute)}});">
                <figure class="promo-images">
                    <!--<div>
                        <img class="image-top-1" src="{{asset('public/web/images/icon_abril-logo.svg')}}" alt="Logo Promo interna">
                        <img class="image-top-2" src="{{asset('public/web/images/icon_abril-terrenos.svg')}}" alt="">
                    </div>-->
                    <!--<a href="#" class="legal-interna">VER LEGAL</a>-->

                    <img class="image-top-2" src="{{asset('public/web/images/logo-huertas-white.png')}}" alt="" style="opacity: 0;">
                        <br>
                        <br>
                    <h1 class="text-white text-shadow-50">{{ $property_single->name }}</h1>
                    <!--<br>
                    <div class="alcontado text-center">
                        <h4 class="text-white-50">Precio al contado desde</h4>
                        <h2 class="text-warning"><strong>$ 13,063 ó S/ 47,025</strong></h2>
                    </div>-->
                </figure>

                <!--<div class="logo">
                    <a href="#" onclick="abrirLegal()"  data-toggle="modal" data-target="#legalmodal" class="menorca-link text-light" >ver legal</a>
                </div>-->
            </div>

            <div class="container pt-5 pb-5">
                <h1 class="menorca-title--yellow">Respira paz rodeado de áreas verdes</h1>
                <p class="text-informacion">{{ $property_single->description  }}</p>
                <a href="#videoModal" data-toggle="modal" data-target="#videoModal" data-video-id='{{ $property_single->youtube }}' class="js-video-button btn-menorca-light mb-4 mb-md-0">
                    Ver video
                    <img style="padding-left: 10px" height="16px" src="{{asset('public/web/images/play-icon-small.svg')}}" alt="">
                </a>
            </div>

        </div>


        <section class="beneficios">
            <div class="container">
                <div class="@if(count($property_gallery) <= 0) benefit-box-center @endif">
                    <div class="col-md-12 col-lg-6">
                        <div class="row text-center">
                            <h2 class="menorca-title-light" style="text-align: center; margin: 0 auto;">Beneficios</h2>
                        </div>
                        @php $index = 0; @endphp
                        <div class="row box-beneficios">
                            @foreach($property_benefits as $item)
                                @php $index++; @endphp
                                <div class="col-6 col-md-4">
                                    <div class="item-beneficio  @php echo ($index == 1) ? 'active' : ''; @endphp">
                                        <img src="{{asset($item->cover_rute)}}" alt="" height="60px">
                                        <h5>{{ $item->name }}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @if(count($property_gallery) > 0)
            <figure>
                <!--<img class="atributo-big" src="{{asset('public/web/files/atributo/atr_mas-de-23000-m2-de-areas-verdes3.jpg')}}" alt="">-->
                <div class="gallery__slick">
                    @foreach($property_gallery as $item)
                        <div class="gallery__item banner__promo">
                            <img src="{{asset($item->cover_rute)}}" alt="" width="100%">
                        </div>
                    @endforeach
                </div>
            </figure>
            @endif

        </section>

        <section class="descuentos" style="background-image: url({{asset('public/web/files/proyecto/bann_por-altopiura13.jpg')}}); min-height: 350px">

        </section>

        <section class="respaldo">
            <div class="container">
                <div class="respaldo-box row">
                    <div class="col-lg-6 col-md-12">
                        <div class="text-center mb-4">
                            <h2 class="menorca-title-light" style="margin: 0 auto;">CONFÍA EN HUERTAS</h2>
                            <p style="color: #fff;">Diseñamos urbanizaciones ordenadas y planificadas
                                con la visión de mejorar la calidad de vida
                                de las familias peruanas.</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="item-respaldo">
                                    <img src="{{asset('public/web/images/EXPERIENCIA.png')}}">
                                    <div>
                                        <strong>+ 20</strong>
                                        <p>Años de experiencia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="item-respaldo">
                                    <img src="{{asset('public/web/images/PROYECTOS.png')}}">
                                    <div>
                                        <strong>+ 20</strong>
                                        <p>Proyectos desarrollados</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="item-respaldo">
                                    <img src="{{asset('public/web/images/FAMILIA.png')}}">
                                    <div>
                                        <strong>+ 21 mil</strong>
                                        <p>Familias beneficiadas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="item-respaldo">
                                    <img src="{{asset('public/web/images/AREAS-VERDES.png')}}">
                                    <div>
                                        <strong>+ 2 millones</strong>
                                        <p>De m² de áreas verdes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 confia-box mt-md-5 mt-lg-0">
                        <h2 class="menorca-title-light" style="margin: 0 auto;">CLIENTES SATISFECHOS</h2>
                        <div class="">
                            @php
                                $listTestimony = [
                                                    "foto-1.png",
                                                    "foto-2.png",
                                                    "foto-3.png",
                                                ];
                            @endphp

                            <div class="testimony__slick">
                                @foreach($listTestimony as $item)
                                    <div class="testimony__item">
                                        <img src="{{asset('public/web/images/testimony/'.$item)}}" alt="">
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </section>


        <section id="formulario">
            <div class="container">
                <div class="row">

                    @include("web.includes.form-contact-proyect")
                    <div class="col-lg-6 imagen">
                        <div id="map" class="map-h100"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ubicacion">
            <div class="container">

                <div class="tarjeta-box">
                    <div class="tarjeta-item cl2 cl-t-1">
                        <h3 class="menorca-subtitle">Ubícanos</h3>
                    </div>
                    <div class="tarjeta-item cl4 cl-t-3">
                        <div class="text ofi">
                            <p class="tit">Oficina de ventas</p>
                            <p class="det">{{ $property_single->officeAddress }}</p>
                        </div>
                    </div>
                    <div class="tarjeta-item cl2 cl-t-2">
                        <div class="text proy">
                            <p class="tit">Proyecto</p>
                            <p class="det">{{ $property_single->projectAddress }}</p>
                        </div>
                    </div>
                    <div class="tarjeta-item cl2 cl-t-2">
                        <div class="text telf">
                            <p class="tit">Teléfono</p>
                            <p class="phone-link">
                                <a class="det" href="tel:+51{{ $property_single->phone }}">
                                    <svg viewBox="0 0 405.333 405.333" width="12px" height="12px">
                                        <path fill="#158A2F" d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752
                                        c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64
                                        C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32
                                        c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"/>
                                    </svg>
                                    <span>{{ $property_single->phone }}</span>
                                </a>
                            </p>
                        </div>
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

        <div class="modal fade" id="confirmo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¡Gracias por escribirnos!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span> Nos pondremos en contacto contigo a la brevedad posible</span>
                        <button data-dismiss="modal" class="btn-menorca-light" aria-label="Close">Aceptar</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script type="text/javascript" src="{{asset('public/web/vendor/spotlight/js/spotlight.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/web/js/interna_terrenos.js')}}"></script>
@endsection

