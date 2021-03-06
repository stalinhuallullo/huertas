@extends('web.layouts.index')

@section('content')
    <div class="wraper">

        <div class="banner-interna">
            <div class="top-img" style="background-image: url({{asset('public/web/images/banner/BANNER-CIUDAD.png')}});">
                <figure class="promo-images">
                    <h1 class="text-white text-shadow-50">NUESTROS SERVICIOS</h1>
                    <h4 class="text-white text-shadow-50">¡Llevamos tus proyectos inmobiliarios al éxito!</h4>
                </figure>
            </div>
        </div>

        <section class="cifras patron">

            <div class="container">
                <div class="big-cards">

                    <div class="card-item">
                        <img src="{{asset('public/web/images/LOTIZACION DE TERRENOS.jpg')}}" alt="">

                        <div class="card-info">
                            <h3>Lotización de terrenos</h3>
                            <p>
                                Gestionamos tus proyectos inmobiliarios, encargándonos de la planificación, ejecución y control de estos. Contamos con un experimentado equipo de profesionales y herramientas tecnológicas de punta, los cuales en conjunto podrán garantizarte la ejecución efectiva de tus proyectos, su incremento de valor en el mercado y su venta o alquiler efectivo.
                            </p>
                        </div>
                    </div>

                    <div class="card-item item-b">
                        <img src="{{asset('public/web/images/GERENCIA DE PROYECTOS.jpg')}}" alt="">

                        <div class="card-info">
                            <h3>Gerencia de proyectos</h3>
                            <p>
                                Ponemos a tu disposición un experimentado equipo, el cual se encargará de lotizar y valorizar tu terreno, brindándote resultados exactos para que puedas y asesorándote en la creación de tu oferta.
                            </p>
                        </div>
                    </div>

                    <div class="card-item">
                        <img src="{{asset('public/web/images/CORRETAJE INMOBILIARIO.jpg')}}" alt="">

                        <div class="card-info">
                            <h3>Corretaje inmobiliario</h3>
                            <p>
                                Asesoramos a nuestros clientes que deseen comprar o vender una propiedad con el fin de satisfacer sus necesidades, contamos con un área especializada en recoger y procesar información diaria de los inmuebles en oferta, esto permite atender requerimientos a la medida y a su vez analizamos el mercado a través de nuestro sistema de levantamiento de información diaria, permitiéndonos definir el precio comercial de su propiedad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
