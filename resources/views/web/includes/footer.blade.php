<footer class="home">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row b-bottom">
                    <div class="col-lg-4">
                        <div class="title__footer">Menú</div>
                        <ul class="footer__links" id="accordion">
                            <li class="ter_icon"><a href="{{route('web.proyect.index')}}">Proyectos</a></li>
                            <li class="cas_icon"><a href="{{route('web.services.index')}}">Servicios</a></li>
                            <li class="cas_icon"><a href="{{route('web.novelties.index')}}">Novedades</a></li>
                            <li class="cas_icon"><a href="{{route('web.us.index')}}">Nosotros</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="title__footer">
                            Política
                        </div>
                        <ul class="footer__links">
                            <li><a href="javascript:void(0);">Políticas de Privacidad</a></li>
                            <li><a href="javascript:void(0);">Términos y condiciones</a></li>
                        </ul>
                    </div>
                    <!--<div class="col-lg-3">
                        <div class="title__footer">
                            &nbsp;Inmobiliaria Huertas
                        </div>
                        <ul class="footer__links">
                            <li><a href="{{route('web.contact.index')}}">Contacto</a></li>
                        </ul>
                    </div>-->
                    <div class="col-lg-4">
                        <div class="title__footer">Llámanos</div>
                        <ul class="footer__links">
                            @if(isset($cache_company))
                                <li><a href="tel: {{ $cache_company->phone }}">{{ $cache_company->phone }}</a></li>
                            @endif
                        </ul>
                        <div class="title__footer">Síguenos</div>
                        <div class="footer__sociales">
                            @if(isset($cache_company))
                                <a class="sociales__link" href="{{ $cache_company->facebook }}" target="_blank">
                                    <svg height="16px" width="16px" viewBox="0 0 155.139 155.139">
                                        <path fill="#ffffff" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184
                                        c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452
                                        v20.341H37.29v27.585h23.814v70.761H89.584z"/>
                                    </svg>
                                </a>
                                <a class="sociales__link" href="{{ $cache_company->instagram }}" target="_blank">
                                    <svg height="16px" width="16px" viewBox="0 0 169.063 169.063" >
                                        <path fill="#ffffff" d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                        c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                        c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                        c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
                                        <path fill="#ffffff" d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                        C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                        c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
                                        <path fill="#ffffff" d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                        c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                        C135.661,29.421,132.821,28.251,129.921,28.251z"/>
                                    </svg>
                                </a>
                                <a class="sociales__link" href="{{ $cache_company->tiktok }}" target="_blank">
                                    <svg height="16px" width="16px" viewBox="0 0 512 512" >
                                        <path fill="#ffffff" d="m480.32 128.39c-29.22 0-56.18-9.68-77.83-26.01-24.83-18.72-42.67-46.18-48.97-77.83-1.56-7.82-2.4-15.89-2.48-24.16h-83.47v228.08l-.1 124.93c0 33.4-21.75 61.72-51.9 71.68-8.75 2.89-18.2 4.26-28.04 3.72-12.56-.69-24.33-4.48-34.56-10.6-21.77-13.02-36.53-36.64-36.93-63.66-.63-42.23 33.51-76.66 75.71-76.66 8.33 0 16.33 1.36 23.82 3.83v-62.34-22.41c-7.9-1.17-15.94-1.78-24.07-1.78-46.19 0-89.39 19.2-120.27 53.79-23.34 26.14-37.34 59.49-39.5 94.46-2.83 45.94 13.98 89.61 46.58 121.83 4.79 4.73 9.82 9.12 15.08 13.17 27.95 21.51 62.12 33.17 98.11 33.17 8.13 0 16.17-.6 24.07-1.77 33.62-4.98 64.64-20.37 89.12-44.57 30.08-29.73 46.7-69.2 46.88-111.21l-.43-186.56c14.35 11.07 30.04 20.23 46.88 27.34 26.19 11.05 53.96 16.65 82.54 16.64v-60.61-22.49c.02.02-.22.02-.24.02z"/>
                                    </svg>
                                </a>
                            @endif
                        </div>

                        <!--<ul class="footer__links">
                            <li><a href="javascript:void(0);" target="_blank"><img src="{{asset('public/web/images/libro.png')}}" width="30px" alt=""> Libro de reclamaciones</a></li>
                        </ul>-->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 pt-3 text-center copy" style="color: #fff">
                        © @if(isset($cache_company)) {{ $cache_company->name }} @endif @php echo date("Y") @endphp | Todos los derechos reservados
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
