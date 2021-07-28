@extends('web.layouts.index')

@section('content')

    <div class="wraper">

        <!--<section class="mapa-contacto">
            <div class="container">
                <div id="map" style="height: 500px; margin-top: 40px;">

                </div>
            </div>
        </section>-->

        <section id="formulario">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 contenido d-lg-flex flex-column justify-content-center">
                        <h3 class="menorca-subtitle">¡Coordinemos una Visita!</h3>
                        <span>Déjanos tus datos y un asesor se contactará contigo lo antes posible.</span>

                        <form id="contactoproyecto" action="/" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control" name="asunto" style="margin-bottom: 25px">
                                        <option value="" selected="">Estoy interesado en:</option>
                                        <option value="CALLE">CALLE - 70.20 m²</option>
                                        <option value="PARQUE">PARQUE - 70.20m²</option>
                                        <option value="AVENIDA">AVENIDA - 90m²</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" style="margin-bottom: 25px" type="text" name="nombres" value="" placeholder="Nombres *" required>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" style="margin-bottom: 25px" type="text" name="apellidos" value="" placeholder="Apellidos *" required>
                                </div>
                            </div>
                            <!-- <input class="form-control" style="margin-bottom: 25px" type="text" name="nombres" value=""
                                   placeholder="Nombres y Apellidos *" required> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" style="margin-bottom: 25px" type="text" name="dni" value="" placeholder="DNI *" pattern="[0-9]{8}" maxlength="8" required>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" style="margin-bottom: 25px" type="text" name="celular" value="" placeholder="Celular *" pattern="[0-9]{9}" maxlength="9" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" name="mediocontacto" style="margin-bottom: 25px">
                                        <option value="" selected>Medio de Contacto</option>
                                        <option value="Whatsapp">Whatsapp</option>
                                        <option value="Teléfono">Teléfono</option>
                                        <option value="Videollamada">Videollamada</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="horario" style="margin-bottom: 25px">
                                        <option value="" selected>Rango de Horario</option>
                                        <option value="9am - 11am">9 am - 11 am</option>
                                        <option value="11am - 1pm">11 am - 1 pm</option>
                                        <option value="1pm - 3pm">1 pm - 3 pm</option>
                                        <option value="3pm - 5pm">3 pm - 5 pm</option>
                                        <option value="5pm - 7pm">5 pm - 7 pm</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" type="email" style="margin-bottom: 25px" name="email" value="" placeholder="Email *" required>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="asunto" style="margin-bottom: 25px">
                                        <option value="" selected>Estoy interesado en:</option>
                                        <option value="CALLE">CALLE - 70.20 m²</option>
                                        <option value="PARQUE">PARQUE - 70.20m²</option>
                                        <option value="AVENIDA">AVENIDA - 90m²</option>
                                    </select>
                                </div>
                            </div>

                            <textarea class="form-control" style="margin-bottom: 25px" name="mensaje" rows="5"placeholder="Mensaje"></textarea>
                            <div class="row sub-res">
                                <div class="col-md-6">
                                    <input type="submit" class="btn-menorca-light" value="Enviar mis datos">
                                </div>

                            </div>

                        </form>
                        <iframe class="gracias" src="#" frameborder="0"></iframe>
                    </div>
                    <div class="col-md-6 imagen" style="background-image: url({{asset('public/web/images/banner-1.jpg')}})">
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAg8D8hg5efKByGem2e9eoIpN1TZ563Urc"></script>
    <script type="text/javascript" src="{{asset('public/web/js/contacto.js')}}"></script>
@endsection
