@extends('web.layouts.index')

@section('content')
    <div class="wraper">

        <section class="banner-terrenos">
            <div class="lista"></div>
        </section>

        <section class="body-terrenos">
            <h3 class="menorca-title">¡Conoce tu próximo hogar!</h3>

            <div class="container">
                <div class="row cards-carousel2 mt-5">
                    @foreach($propertys as $property)
                        @include("web.includes.item-proyect", ["property" => $property])
                    @endforeach
                </div>
            </div>
        </section>

        <section>
            <div class="col-md-12">
                {{ $propertys->links("web.core.pagination.default") }}
            </div>
        </section>



        <!--<section class="entregados">
            <h3 class="menorca-title">Proyectos Entregados</h3>
            <div class="container">
                <div class="row">
                    @for($i = 0; $i < 6; $i++)
                    <div class="col-lg-4 col-md-6">
                        <a href="terrenos/los-molinos-de-carabayllo" class="menorca-newcard" style="background-image: url({{asset('public/web/files/proyecto/min_losmolinoscarabayllo72.jpg')}});">
                            <span class="menorca-newcard__tipo--terreno">Terrenos</span>
                            <div class="menorca-newcard__info--terreno" style="padding-bottom: 15px;">
                                <div class="inside pb-4">
                                    <div class="inside-top">
                                        <div class="place"><img src="{{asset('public/web/images/location.svg')}}" alt="">Carabayllo</div>
                                        <h4>Los Molinos de Carabayllo</h4>
                                    </div>
                                </div>
                                <div class="inside-bottom justify-content-center">
                                    <p>Conoce más del proyecto</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endfor

                </div>
            </div>
        </section>-->


    </div>
@endsection
