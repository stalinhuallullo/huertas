@extends('web.layouts.index')

@section('styles')
    <!--<link rel="stylesheet" href="{{asset('public/web/vendor/component.css')}}">-->
@endsection

@section('content')

    @include("web.erros.in-construction")
    <!--<div class="wraper">
        <section class="blog-banner">
            <h1 class="menorca-title">Novedades</h1>
        </section>

        <section class="blog-filtros">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Buscar...</label>
                            <form class="search-box">
                                <svg width="16px" height="16px" viewBox="-1 0 136 136.21852">
                                    <path fill="#158A2F" d="M 93.148438 80.832031 C 109.5 57.742188 104.03125 25.769531 80.941406 9.421875 C 57.851562 -6.925781 25.878906 -1.460938 9.53125 21.632812 C -6.816406 44.722656 -1.351562 76.691406 21.742188 93.039062 C 38.222656 104.707031 60.011719 105.605469 77.394531 95.339844 L 115.164062 132.882812 C 119.242188 137.175781 126.027344 137.347656 130.320312 133.269531 C 134.613281 129.195312 134.785156 122.410156 130.710938 118.117188 C 130.582031 117.980469 130.457031 117.855469 130.320312 117.726562 Z M 51.308594 84.332031 C 33.0625 84.335938 18.269531 69.554688 18.257812 51.308594 C 18.253906 33.0625 33.035156 18.269531 51.285156 18.261719 C 69.507812 18.253906 84.292969 33.011719 84.328125 51.234375 C 84.359375 69.484375 69.585938 84.300781 51.332031 84.332031 C 51.324219 84.332031 51.320312 84.332031 51.308594 84.332031 Z M 51.308594 84.332031 " />
                                </svg>
                                <input type="text" name="buscar" class="form-control" placeholder="Buscar en novedades...">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Categorias</label>
                            <div class="select-box">
                                <svg width="16px" height="16px" viewBox="0 0 451.847 451.847">
                                    <path fill="#158A2F" d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751
                                        c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0
                                        c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"/>
                                </svg>
                                <select name="categorias" class="filtros__categorias form-control" id="">
                                    <option value="*">Ver todos</option>
                                    <option value=".cat-1">Deporte</option>
                                    <option value=".cat-2">Bienestar</option>
                                    <option value=".cat-3">Salud</option>
                                    <option value=".cat-4">Familia</option>
                                    <option value=".cat-5">Diversión</option>
                                    <option value=".cat-6">Mi Vivienda</option>
                                    <option value=".cat-7">Bono Verde</option>
                                    <option value=".cat-8">Calidad de vida</option>
                                    <option value=".cat-9">Medio ambiente</option>
                                    <option value=".cat-10">Techo Propio</option>
                                    <option value=".cat-11">Mivivienda Verde</option>
                                    <option value=".cat-12">Responsabilidad Social</option>
                                    <option value=".cat-13">Referidos</option>
                                    <option value=".cat-15">Escuela Menorca</option>
                                    <option value=".cat-16">Ventana Menorca</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ordenar">
                            <strong>Ordenar por: </strong>
                            <div class="orden">
                                <button data-sort="reciente" class="active">Más Reciente</button>
                                <button data-sort="antiguo" >Más Antiguo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-body">
            <div class="container">

                <div class="busqueda"><span></span><i class="fa fa-times"></i></div>

                <div class="empty-blog">
                    <strong>¡Lo sentimos!</strong>
                    <p>
                        No se encontraron resultados con tu búsqueda "<span></span>", quizás puedas intentar con otro tipo de palabra.
                    </p>
                </div>
                <div class="grid">
                    @for($i = 0; $i < 6; $i++)
                    <div class="novedad cat-2" data-tipo="1" >
                        <figure class="novedad__imagen">
                            <img class="lazyload" src="{{asset('public/web/files/blog/familia-interna2.jpg')}}" alt="">
                        </figure>
                        <div class="novedad__info">
                            <strong>Bienestar</strong>
                            <h4>¡LA OBRA NO PARA en Posada de Carabayllo!</h4>
                            <span>09  Apr  2021</span>
                            <p>¡El proyecto sigue creciendo! Continuamos implementando parques y miles de m 2 de áreas
                                verdes para que más familias peruanas cumplan el sueño del hogar propio.</p>
                            <a href="javascript:;" data-url="{{asset('public/web/files/blog/familia-interna2.jpg')}}" class="btn-show-novelties">Ver más <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section>

        <div class="popup-novelties">
            <div class="close-btn">
                <svg height="16px" width="16px" viewBox="0 0 365.696 365.696">
                    <path fill="#ffffff" d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"/>
                </svg>
            </div>
            <img class="image-view-novelties" src="" alt="">
        </div>-->

    </div>

@endsection





@section('scripts')
    <script src="{{asset('public/web/vendor/lazyload/lazyload.js')}}"></script>
    <script src="{{asset('public/web/vendor/masonry.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/web/js/blog.js')}}"></script>
@endsection
