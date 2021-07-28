@extends('web.layouts.index')

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
@endsection

@section('content')

    <div class="wraper">

        <section class="video">
            <div id="map"></div>
            <!--<a href="#videoModal" data-toggle="modal" class="js-video-button"><img
                    height="150px" src="{{asset('public/web/images/play-icon.svg')}}" alt="Play icon"></a>-->
        </section>

        <section class="nosotros-sec">
            <h3 class="menorca-title">Nosotros</h3>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <p class="text-nosotros">
                            Somos una empresa 100% peruana, caracterizados por nuestro profesionalismo y compromiso a la hora de encontrar las mejores oportunidades del sector inmobiliario. Para que encuentres el inmueble que buscas o vendas, tu propiedad al mejor valor.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="respaldo">
            <div class="container">
                <div class="respaldo-box row">
                    <div class=" col-md-8">
                        <div class="text-center mb-4">
                            <h2 class="menorca-title-light" style="margin: 0 auto;">Ellos confían en nosotros</h2>
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
                </div>

            </div>
            <div class="line"></div>
        </section>


        <section class="cifras patron">

            <div class="container">
                <h3 class="menorca-title">Conócenos</h3>
                <br>

                <div class="big-cards">
                    <div class="card-item">
                        <img src="{{asset('public/web/images/mision.png')}}" alt="">

                        <div class="card-info">
                            <h3>Misión</h3>
                            <p>
                                Encontrar las mejores oportunidades del sector inmobiliario para ofertarlas. De manera oportuna mediante los diversos sistemas tecnológicos, de construcción que existen en el mercado. Garantizando una comunicación efectiva.
                            </p>
                        </div>
                    </div>

                    <div class="card-item item-b">
                        <img src="{{asset('public/web/images/vision.png')}}" alt="">

                        <div class="card-info">
                            <h3>Visión</h3>
                            <p>
                                Nuestra meta es posicionarnos como la inmobiliaria líder que garantice los proyectos en la oferta y demanda dentro del país, generando grandes oportunidades de desarrollo y empleo.
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

                <div class="modal-content" style="background-color: #000">
                    <div class="modal-body">
                        <div class="embed-container" style="height: 500px;background-color: #000"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script type="text/javascript" src="{{asset('public/web/js/nosotros.js')}}"></script>
@endsection
