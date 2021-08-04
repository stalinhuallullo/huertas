@extends('web.layouts.index')

@section('content')


    <div class="wraper">
        <section class="banner">
            <div class="banner__slick">
                @foreach($banners as $banner)
                    <div class="banner__item banner__promo">
                        <img src="{{asset($banner->cover_rute)}}" alt="" width="100%">
                    </div>
                @endforeach
            </div>
        </section>

        <section class="full-buttons">
            <a href="javascript:void(0);">
                <strong>Inversión Segura</strong>
                <span>¡Tu terreno, tu mejor inversión!</span>
            </a>

            <!--<a href="javascript:void(0);">
                <strong>Aprendamos Juntos</strong>
                <span>Novedades</span>
            </a>

            <a href="javascript:void(0);">
                <strong>Conoce más</strong>
                <span>de Nosotros</span>
            </a>-->

        </section>

        <section class="conoce" id="tuproximohogar">
            <h3 class="menorca-title">¡Conoce tu próximo hogar!</h3>

            <div class="container">
                <div class="row cards-carousel2 mt-5">
                    @foreach($propertys as $property)
                        @include("web.includes.item-proyect", ["property" => $property])
                    @endforeach
                </div>
            </div>
        </section>

        <section class="referidos-home">
            <img class="image-all" src="{{asset('public/web/images/APOLO-.png')}}" style="width: 100%">
        </section>

        <!--<section class="referidos-home">
            <div class="banner__slick">
                <div class="banner__item banner__promo">
                    <img src="{{asset('public/web/images/bell/BANNER-DE-CAMPAÑA.png')}}" alt="" width="100%">
                </div>
            </div>
        </section>-->


        <section id="formulario">
            <div class="container">
                <div class="row">
                    @include("web.includes.form-contact-proyect")
                    <div class="col-md-6 imagen" style="background-image: url({{asset('public/web/images/banner-2.jpg')}})">
                    </div>
                </div>
            </div>
        </section>


        <section class="novedades">

            <div class="container">
                @php
                    $listClient = [
                                        "YAPE.png",
                                        "ARTE-DIGITAL.png",
                                        "BBVA.png",
                                        "CAMARA-DE-COMERCIO.png",
                                        "HUERTAS-COMPANY.png",
                                        "IZIPAY.png",
                                        "QUINCENARIO.png",
                                    ];

                @endphp

                <div class="content-slider-client">
                    <div class="client__slick">
                        @foreach($listClient as $item)
                            <div class="client__item">
                                <img src="{{asset('public/web/images/client/'.$item)}}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

@section("scripts")
    <script type="text/javascript" src="{{asset('public/web/js/home.js')}}"></script>
@endsection
