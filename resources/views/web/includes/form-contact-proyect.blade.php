<div class="col-md-@if(isset($size)){{$size}}@else{{"6"}}@endif contenido d-lg-flex flex-column justify-content-center">
    <h3 class="menorca-subtitle">¿Deseas que te contactemos?</h3>
    <span>Déjanos tus datos y un asesor se contactará contigo lo antes posible.</span>

    <form id="contactoproyecto" action="{{ route('web.proyect.coordinateVisit') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <input class="form-control mb-25" type="text" name="names" value="" placeholder="Nombres *" required>
            </div>
            <div class="col-md-6">
                <input class="form-control mb-25" type="text" name="surnames" value="" placeholder="Apellidos *" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input class="form-control mb-25" type="text" name="dni" value="" placeholder="DNI *" pattern="[0-9]{8}" maxlength="8" required>
            </div>
            <div class="col-md-6">
                <input class="form-control mb-25" type="text" name="phone" value="" placeholder="Celular *" pattern="[0-9]{9}" maxlength="9" required>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <input class="form-control mb-25" type="email" name="email" value="" placeholder="Email *" required>
            </div>
        </div>

        <textarea class="form-control mb-25" name="message" rows="5"placeholder="Mensaje"></textarea>

        <div class="form-check mb-2 squaredOne">
            <input type="checkbox" checked class="form-check-input" id="terminos" name="terminos" required>
            <label class="form-check-label" for="terminos">He leído y acepto los <a href="javascript:;" class="menorca-legal">Términos y condiciones</a></label>
        </div>
        <div class="form-check mb-4">
            <input type="checkbox" checked class="form-check-input" id="politicas" name="politics" required>
            <label class="form-check-label" for="politicas">He leído y acepto las <a href="javascript:;">Políticas de protección de datos</a></label>
        </div>
        <div class="row sub-res">
            <div class="col-md-6">
                <input type="submit" class="btn-menorca-light" value="Enviar mis datos">
            </div>

        </div>

    </form>
</div>
