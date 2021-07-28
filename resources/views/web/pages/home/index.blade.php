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
            <a href="{{route('web.proyect.index')}}">
                <strong>Inversión Segura</strong>
                <span>¡Tu terreno, tu mejor inversión!</span>
            </a>

            <a href="{{route('web.novelties.index')}}">
                <strong>Aprendamos Juntos</strong>
                <span>Novedades</span>
            </a>

            <a href="{{route('web.us.index')}}">
                <strong>Conoce más</strong>
                <span>de Nosotros</span>
            </a>

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
            <div class="container">
                <!--<img class="title-referidos" src="https://menorca.pe/assets/web/img/ref-title.svg"
                     alt="Canal de Referidos">-->
                <div class="row pt-4">
                    <div class="col-12 col-lg-6">
                        <img class="image-all" src="{{asset('public/web/images/all-referidos2.svg')}}" height="300px">
                        <br>
                        <!--<h4>Ahora todos <span>los referidos</span> <br>
                            valen <span> más </span></h4>
                        <br>-->
                        <!--<a href="javascript:;" class="btn-menorca--red">Empieza a referir</a><br>

                        <a href="javascript:;" class="legales mb-4 pl-md-4 pl-0">VER LEGAL</a><br>-->
                    </div>
                    <div class="col-lg-6 d-none d-md-none d-lg-block">
                        <img width="400px" src="{{asset('public/web/images/sorprendida-morado.png')}}" alt="">
                    </div>
                </div>
            </div>
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
                    <div class="col-md-6 imagen" style="background-image: url({{asset('public/web/images/banner-1.jpg')}})">
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
