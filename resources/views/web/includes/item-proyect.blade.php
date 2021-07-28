<div class="grid-item col-lg-4 col-md-6 item-0">
    <a href="{{route('web.proyect.detail', ['slug' => $property->slug])}}" class="menorca-newcard nuevo-1" style="background-image: url('{{asset($property->cover_rute)}}');">
        <!--<span class="menorca-newcard__tipo--casa">Casas</span>-->
        <div class="menorca-newcard__info--casa">
            <div class="inside">
                <div class="inside-top">
                    <div class="place"><img src="{{asset('public/web/images/location.svg')}}" alt="">{{ $property->province }}</div>
                    <h4>{{ $property->name }}</h4>
                </div>
            </div>
            <div class="inside-bottom">
                <!--<p>Cuota desde</p>
                S/ 321-->
            </div>
        </div>
    </a>
</div>
