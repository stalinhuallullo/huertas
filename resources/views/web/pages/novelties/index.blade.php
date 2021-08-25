@extends('web.layouts.index')

@section('styles')
    <!--<link rel="stylesheet" href="{{asset('public/web/vendor/component.css')}}">-->
@endsection

@section('content')

    @php
      //@include("web.erros.in-construction")
    @endphp
    <div class="wraper">
        <section class="blog-banner">
            <h1 class="menorca-title">Novedades</h1>
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
                    @foreach($novelties as $novelty)

                    <div class="novedad cat-2" data-tipo="1" >
                        <figure class="novedad__imagen">
                            <img class="lazyload" src="{{asset($novelty->cover_rute)}}" alt="">
                        </figure>
                        <div class="novedad__info">
                            <strong>{{ $novelty->category_name  }}</strong>
                            <h4>{{ $novelty->title  }}</h4>
                            <span>{{ date('d-m-Y', strtotime($novelty->dateCreate))  }}</span>
                            <p>{{ $novelty->resume  }}</p>
                            <a href="javascript:;" data-url="{{asset($novelty->cover_rute)}}" class="btn-show-novelties">Ver más <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <section>
                    <div class="col-md-12 mt-5">
                        {{ $novelties->links("web.core.pagination.default") }}
                    </div>
                </section>
            </div>
        </section>

        <div class="popup-novelties">
            <div class="close-btn">
                <svg height="16px" width="16px" viewBox="0 0 365.696 365.696">
                    <path fill="#ffffff" d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"/>
                </svg>
            </div>
            <img class="image-view-novelties" src="" alt="">
        </div>

    </div>

@endsection





@section('scripts')
    <script src="{{asset('public/web/vendor/lazyload/lazyload.js')}}"></script>
    <script src="{{asset('public/web/vendor/masonry.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/web/js/blog.js')}}"></script>
@endsection
