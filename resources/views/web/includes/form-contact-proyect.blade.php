<div class="col-md-6 contenido d-lg-flex flex-column justify-content-center">
    <h3 class="menorca-subtitle">¡Coordinemos una Visita!</h3>
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
            <div class="col-md-6">
                <select class="form-control mb-25" name="contactMedium">
                    <option value="" selected>Medio de Contacto</option>
                    <option value="Whatsapp">Whatsapp</option>
                    <option value="Teléfono">Teléfono</option>
                    <option value="Videollamada">Videollamada</option>
                </select>
            </div>
            <div class="col-md-6">
                <select class="form-control mb-25" name="schedule">
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
                <input class="form-control mb-25" type="email" name="email" value="" placeholder="Email *" required>
            </div>
            <div class="col-md-6">
                <select class="form-control mb-25" name="matter">
                    <option value="" selected>Estoy interesado en:</option>
                    <option value="CALLE">CALLE - 70.20 m²</option>
                    <option value="PARQUE">PARQUE - 70.20m²</option>
                    <option value="AVENIDA">AVENIDA - 90m²</option>
                </select>
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
