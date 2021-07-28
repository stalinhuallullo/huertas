var tipoglob = 'T';
var lugarglob;
var objasistente={};
$(document).ready(function(){


    $('img.click-promo').click(function() {
        alert('click');
        location.href = 'cierra-puertas';
    });


    localStorage.removeItem("idlead");
    localStorage.removeItem("nombresunidad");
    localStorage.removeItem("codigosunidad");

    if(window.location.hash) {

        window.scrollTo(0,0);
        //$('html, body').stop();

        var url = window.location.toString();
        var hash = url.split('#').pop();
        console.log(hash);
        $('html, body').stop().animate({ scrollTop: $('#'+hash).offset().top -130}, 1000);


    } else {
        console.log('no hay hash')
    }

    $(".js-video-button2").modalVideo({
        channel: 'youtube',
        youtube:{
            autoplay:1,
            controls:1,
            nocookie: false,
        }
    });



    $(document).on('click','.tipo-item',function () {

        $('.tipo-box').find('.active').removeClass('active');
        $(this).addClass('active');

        let donde = $('.tipo-box').find('.active');
        let link = donde.data('link');

        objasistente.tipoproyecto = link
        dataLayer.push({"event":"eleccionasistente","pasos":objasistente})
    });



    $(document).on('click',".lugar-item",function () {

        $('.lugar-box').find('.active').removeClass('active');
        $(this).addClass('active');

        lugarglob = $(this).data('lugar');
        objasistente.lugar = lugarglob;
        dataLayer.push({"event":"eleccionasistente","pasos":objasistente})
    });

    $(document).on('click','.continuar-asistente',function () {
        //alert('continuar');

        let donde = $('.tipo-box').find('.active');
        let link = donde.data('link');

        //$('#'+link).trigger('click');
        tipoglob = link;


        if(tipoglob!='E' && tipoglob!= 'CL'){

            $('.reb').fadeOut('slow');
            $('.reb').remove();
            $('.box-initial').removeClass('col-md-6');
            $('.box-initial').addClass('col-lg-12');
            $('.asistente p').html('¿Dónde quieres comprar?');


            pintarlugares();


            $('.tipo-box').hide();
            $('.lugar-box').css('display','flex');
            $('.continuar-asistente').css('display','none');
            $('.ver-asistente').css('display','inline-block');
            $('.btn-anterior').css('display','inline-flex');
        }else{

            if(tipoglob == 'E'){
                MostrarResultados('E');
            }else{
                MostrarResultados('CL');
            }
            //$('body,html').animate({scrollTop: $('#tuproximohogar').offset().top - 120},600);


        }


    });

    $(document).on('click','.btn-anterior',function () {


        $('.box-initial').removeClass('col-lg-12');

        setTimeout(function () {
            $('.box-initial').addClass('col-md-6');
            $('.box-total').append('<div class="col-md-6 reb">' +
                '                <img src="'+path+'/assets/web/img/modelo.png" alt="">' +
                '            </div>');
            $('.asistente p').html('¿Qué propiedades buscas?');
            $('.ver-asistente').css('display','none');
            $('.continuar-asistente').css('display','inline-block');
            $('.lugar-box').css('display','none');
            $('.btn-anterior').hide();
            $('.tipo-box').show();
        },100);

    });

    $(document).on('click','.ver-asistente',function () {


        MostrarResultados();



        //$('body,html').animate({scrollTop: $('#tuproximohogar').offset().top - 120},600);
    });

    $(document).on('click','.btn-volver',function () {
        $('.resultados-box').empty();
        $('.resultados-box').hide();
        $('.btn-anterior').show();
        $('.lugar-box').css('display','flex');
        $('.continuar-asistente').css('display','none');
        $('.ver-asistente').css('display','inline-block');
        $('.btn-volver').css('display','none');
    });

    $(document).on('click','.btn-exclusive',function () {
        $('.box-initial').removeClass('col-lg-12');
        setTimeout(function () {
            $('.box-initial').addClass('col-md-6');

            $('.box-total').append('<div class="col-md-6 reb">' +
                '                <img src="'+path+'/assets/web/img/modelo.png" alt="">' +
                '            </div>');
            $('.asistente p').html('¿Qué propiedades buscas?');
            $('.resultados-box').empty();
            $('.resultados-box').hide();
            $('.btn-exclusive').css('display','none');
            $('.continuar-asistente').css('display','inline-block');
            $('.tipo-box').show();
        },100);
    });


    var $grid = $('.cards-carousel2').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    var filters = {};



    $('.buttons-filter').on( 'click', '.filter-item', function() {
        var $this = $(this);
        // get group key
        var $buttonGroup = $this.parents('.buttons-menorca');
        var filterGroup = $buttonGroup.attr('data-filter-group');
        // set filter for group
        filters[ filterGroup ] = $this.attr('data-filter');
        // combine filters
        var filterValue = concatValues( filters );
        $grid.isotope({ filter: filterValue });
    });

// flatten object by concatting values
    function concatValues( obj ) {
        var value = '';
        for ( var prop in obj ) {
            value += obj[ prop ];
        }
        return value;
    }

    $('.desplegable-list .filter-item').click(function () {
        var text = $(this).html();

        $(this).parent().parent().find('button span').html(text);

    });

    /*
    $('.buttons-menorca').on( 'click', 'button', function() {
        var filterValue = $( this ).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[ filterValue ] || filterValue;
        $grid.isotope({ filter: filterValue });
    });
    var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function() {
            var number = $(this).find('.number').text();
            return parseInt( number, 10 ) > 50;
        },
        // show if name ends with -ium
        ium: function() {
            var name = $(this).find('.name').text();
            return name.match( /ium$/ );
        }
    };
*/
// change is-checked class on buttons
    $('.buttons-menorca').each( function( i, buttonGroup ) {
        var $buttonGroup = $( buttonGroup );
        $buttonGroup.on( 'click', 'button', function() {
            $buttonGroup.find('.active').removeClass('active');
            $( this ).addClass('active');
        });
    });


    if($(window).width() <= 992){
        $('.desplegable-list .dropdown-menu .filter-item:nth-child(2)').trigger('click');
    }


    if($('.banner__slick').length){
        $('.banner__slick').slick({
            dots: true,
            infinite: true,
            autoplay: true,
            initialSlide: 2,
            accessibility: false,
            //speed: 900,
            pauseOnHover:true,
            prevArrow: '<button type="button" class="slick-prev"><img src="'+path+'public/web/images/flecha-1.svg" alt="flecha izquierda"/></button>',
            nextArrow: '<button type="button" class="slick-next"><img src="'+path+'public/web/images/flecha-2.svg" alt="flecha derecha"/></button>',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        adaptiveHeight: true
                    }
                }
            ]
        });
        $('.banner__slick').slick('slickGoTo',0);
    }

    if($('.client__slick').length > 0){
        $('.client__slick').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            initialSlide: 2,
            accessibility: false,
            pauseOnHover:true,
            slidesToShow: 4,
            arrows: false,
            prevArrow: '<button type="button" class="slick-prev"><img src="'+path+'public/web/images/flecha-1.svg" alt="flecha izquierda"/></button>',
            nextArrow: '<button type="button" class="slick-next"><img src="'+path+'public/web/images/flecha-2.svg" alt="flecha derecha"/></button>',
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        adaptiveHeight: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        adaptiveHeight: true
                    }
                }
            ]
        });
        $('.client__slick').slick('slickGoTo',0);
    }





});

function MostrarResultados(tip) {

    if(tip){

        if(tip == 'E'){
            controller = `cotizador/mostraropciones`;


            $.ajax({
                type: "POST",
                url: `${path}${controller}`,
                data: {
                    tipo: tipoglob,
                    lugar: lugarglob
                },
                dataType: "json",
                success: function(data){

                    console.log(data);
                    $('.resultados-box').empty();
                    $('.asistente p').html(data.msj);
                    $.each(data.lista, function(k, v) {
                        var results = new ItemResultados(v);
                        $('.resultados-box').append(results);
                    });


                }
            });
        }

        if(tip == 'E' || tip == 'CL'){



            $('.resultados-box').css('display','flex');
            $('.reb').fadeOut('slow');
            $('.reb').remove();
            $('.tipo-box').hide();
            $('.box-initial').removeClass('col-md-6');
            $('.box-initial').addClass('col-lg-12');
            $('.continuar-asistente').hide();

            $('.btn-exclusive').show();


        }

        if(tip == 'CL'){
            var html = $(`<div>
                    <a href="${path}collection/la-quebrada" class="menorca__minimal collection">

                        <div class="minimal__top">
                            <div class="minimal__tipo">
                                Collection
                            </div>
                            <img src="files/proyecto/la-quebrada-banner.png" alt="">
                        </div>
                        <div class="minimal__info">
                            <h4>La Quebrada</h4>

                        </div>
                    </a>
                </div>`);

            $('.resultados-box').html(html);
        }

    }else{
        controller = `cotizador/mostraropciones`;


        $.ajax({
            type: "POST",
            url: `${path}${controller}`,
            data: {
                tipo: tipoglob,
                lugar: lugarglob
            },
            dataType: "json",
            success: function(data){

                console.log(data);
                $('.resultados-box').empty();
                $('.asistente p').html(data.msj);
                $.each(data.lista, function(k, v) {
                    var results = new ItemResultados(v);
                    $('.resultados-box').append(results);
                });

            }
        });

        $('.btn-volver').show();
        $('.lugar-box').hide();
        $('.btn-anterior').hide();
        $('.ver-asistente').css('display','none');
        $('.resultados-box').css('display','flex');
    }



}


var ItemResultados = function(data){

    console.log(data.lista);
    if(data.pry_tipo == 'T'){
        dir = 'terrenos';
        tipo = 'Terrenos';
        precio = data.pry_cuota_dol+" o "+data.pry_cuota_sol;
        img = `<img src="files/proyecto/${data.pry_miniatura}" alt="${data.pry_nombre}">`
        et='terreno';
    }
    else if(data.pry_tipo == 'C'){
        dir = 'casas';
        tipo = 'Casas';
        precio = data.pry_cuota_sol;
        img = `<img src="files/proyecto/${data.pry_miniatura}" alt="${data.pry_nombre}">`
        et='casa';
    }
    else if(data.pry_tipo == 'E'){
        dir = 'edition'
        tipo = 'Edition';
        precio = data.pry_cuota_sol;
        img = `<img src="files/proyecto/${data.pry_miniatura}" alt="${data.pry_nombre}">`
        et='edition';
    }

    var html = $(`<div>
                    <a href="${dir}/${data.pry_alias}" class="menorca__minimal ${et}">

                        <div class="minimal__top">
                            <div class="minimal__tipo">
                                ${tipo}
                            </div>
                            ${img}
                        </div>
                        <div class="minimal__info">
                            <h4>${data.pry_nombre}</h4>
                            <span>Cuota desde </span>
                            <p>${precio}</p>
                        </div>
                    </a>
                </div>`);

    html.click(function(){
        objasistente.proyecto = data.pry_alias
        dataLayer.push({"event":"eleccionasistente","pasos":objasistente});

    })

    return html;
};

function pintarlugares() {


    if(tipoglob == 'C' || tipoglob == 'T'){
        controller = `cotizador/listardepartamentos`;
    }else {
        controller = `cotizador/listardepartamentosex`;
    }

    $.ajax({
        type: "POST",
        url: `${path}${controller}`,
        data: {tipo:tipoglob},
        dataType: "json",
        success: function(data){

            $('.lugar-box').empty();
            $.each(data, function(key, dep) {
                var depart = new Lugar(dep);
                $('.lugar-box').append(depart);
            });
            /*lista = data;
            var i = 0;
            $('.cotizador .depas').empty();
           */

        }
    });



}

var Lugar = function (data) {

    var html = $('<div class="lugar-item" data-lugar="'+data.dpt_id+'">' +
        '<figure>' +
        '<img src="'+path+'public/web/images/locaciones/'+data.dpt_img+'" alt="">' +
        '</figure>' +
        '<span>'+data.dpt_nombre+'</span>' +
        '</div>');

    return html;
};





lugares = [];
(function($) {

    // cotizador = new Cotizador();
    // cotizador.iniciar();

    var form = $("#signup-form");
    // <a id="sub" href="#skip" class="btn-menorca-light omitir" role="menuitem"></a>


    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            tipo : {
                required: true,
            },
            casa : {
                required: true,
            },
            terreno : {
                required: true,
            },
            presupuesto : {
                required: false,
            }
        },
        onfocusout: function(element) {
            $(element).valid();
        },
        highlight : function(element, errorClass, validClass) {
            $(element.form).find('.actions').addClass('form-error');
            $(element).removeClass('valid');
            $(element).addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element.form).find('.actions').removeClass('form-error');
            $(element).removeClass('error');
            $(element).addClass('valid');
        }
    });

    // console.log($('.cotizador .depas').html());

    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        labels: {
            previous : 'Anterior',
            next : 'Siguiente',
            finish : 'Ver proyectos',
            current : ''
        },
        titleTemplate : '<span class="title">#title#</span>',
        onStepChanging: function (event, currentIndex, newIndex)
        {

            if(currentIndex == 0 || currentIndex == 1)
            {
                campos = form.serialize();
                campos = campos.split('&');
                tipo = campos[0].split('=')[1]

                var cotizador = new Cotizador();
                cotizador.iniciar(tipo);
            }



            form.validate().settings.ignore = ":disabled, :hidden";
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex)
        {

            $('.cotizador .depas .radio-item').on('click',function(){

                $(this).addClass('select');
                id=$(this).attr('id');
                // console.log(id);

                for (const key in lugares) {
                    if (lugares[key].id == id) {

                        $('.cotizador form fieldset input[name=lugar]').attr('value',lugares[key].valor);

                    }
                }

            });



        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {


            $.post(form.attr('action'), form.serialize(), function( data ) {
                // console.log(JSON.parse(data));
                //Evento Asistente - Ver resultados
                // gtag('event', 'usar', { 'event_category': 'asistente', 'event_label': 'resultados'});

                $('.resultados .cards-carousel').html('');

                lista = JSON.parse(data);

                if(lista.res == true){

                    $('.resultados .cards__info2').html(
                        `
                            <h4 class="resultado-title">${lista.msj}</h4>
                        `);

                    proyectosRecomendados();
                    carousel();
                }
                else{
                    // $('.resultados .cards-carousel').empty();

                    $('.resultados .cards__info2').html(
                        `
                            <h4 class="resultado-title">${lista.msj}</h4>
                       `);
                    proyectosRecomendados();
                    carousel();
                }

                $('#signup-form').hide();
                $('.resultados').fadeIn();
            });

        },
        // onInit : function (event, currentIndex) {
        //     event.append('demo');
        // }
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });


})(jQuery);

var proyectosRecomendados = function(){

    var i = 0;

    $.each(lista.lista, function(key, reco) {
        // if(i<3) {
        var proy = new ItemOpcion(reco);
        $('.resultados .cards-carousel').append(proy);
        //}

        //i++;
    });



}





function  carousel(){

    var owlc = $('.cotiza-cards');
    owlc.trigger('destroy.owl.carousel');

    owlc.owlCarousel({
        loop: false,
        nav: true,
        center: true,
        margin: 10,
        navText: ["<img src='"+path+"public/web/images/flecha-3.svg' alt='arrow izquierdo'>","<img src='"+path+"public/web/images/flecha-4.svg' alt='arrow derecho'>"],
        responsive: {
            0: {
                items: 1,
                center: true,
                margin: 40,
            },

            992: {
                items: 3,
                center: false,
                margin: 10,
            },
        }
    });

    //owlc.trigger('refresh.owl.carousel');


}


var ItemOpcion = function(data){


    if(data.pry_tipo == 'T'){
        dir = 'terrenos';
        tipo = 'Terrenos';
        precio = data.pry_cuota_dol+" o "+data.pry_cuota_sol;
        img = `<img src="files/proyecto/${data.pry_miniatura}" alt="${data.pry_nombre}">`
        et='terreno';
    }
    else if(data.pry_tipo == 'C'){
        dir = 'casas';
        tipo = 'Casas';
        precio = data.pry_cuota_sol;
        img = `<img src="files/proyecto/${data.pry_miniatura}" alt="${data.pry_nombre}">`
        et='casa';
    }
    else if(data.pry_tipo == 'E'){
        dir = 'edition'
        tipo = 'Edition';
        precio = data.pry_cuota_sol;
        img = `<img src="public/web/images/${data.pry_miniatura}" alt="${data.pry_nombre}">`
        et='edition';
    }

    var html = $(`<div>
                    <a href="${dir}/${data.pry_alias}" class="menorca__cards">
                        <div class="cards__tipo--${et}">
                            ${tipo}
                        </div>
                        <div class="cards__top">
                            ${img}
                        </div>
                        <div class="cards__info">
                            <h4>${data.pry_nombre}</h4>
                            <p>Cuota desde ${precio}</p>
                        </div>
                    </a>
                </div>`);
    html.find('a').click(function(){
        //Evento Asistente - Ir a Proyecto
        // gtag('event', 'usar', { 'event_category': 'asistente', 'event_label': 'proyecto'});
    })

    return html;
}


var Cotizador = function(){

    this.iniciar = function(tipo){
        //Evento Asistente - Ir a Paso 2
        // gtag('event', 'usar', { 'event_category': 'asistente', 'event_label': 'paso2'});

        if(tipo == 'T' || tipo == 'C')
            controller = `cotizador/listardepartamentos`;
        else
            controller = `cotizador/listardepartamentosex`

        $.ajax({
            type: "POST",
            url: `${path}${controller}`,
            data: {tipo:tipo},
            dataType: "json",
            success: function(data){

                lista = data;
                var i = 0;
                $('.cotizador .depas').empty();
                $.each(lista, function(key, dep) {
                    var depart = new item(dep);
                    $('.cotizador .depas').append(depart)
                    i++;
                });

                var owlc = $('.depas');
                owlc.trigger('destroy.owl.carousel');
                owlc.owlCarousel({
                    loop: false,
                    nav: true,
                    dots: false,
                    center: true,
                    margin: 10,

                    navText: ["<img src='"+path+"public/web/images/flecha-3.svg' alt='flecha izquierda'>","<img src='"+path+"public/web/images/flecha-4.svg' alt='flecha derecha'>"],

                    responsive: {

                        0: {
                            items: 1,
                            center: true,
                            margin: 40,
                            nav:false,
                            dots: true
                        },

                        992: {
                            items: 4,
                            center: false,
                            margin: 10,
                            //   dots: true
                        },
                    }
                });


            }
        });
    }

    var item = function(data){


        obj = {
            id:`lug${data.dpt_id}`,
            valor:data.dpt_id
        }

        lugares.push(obj);

        html = $( `<label id="lug${data.dpt_id}" for="${data.dpt_nombre}" class="form-label radio-item" required>
            <input type="radio" id="${data.dpt_nombre}" name="lugar" value="${data.dpt_id}">

                            <span>
                                <img src="public/web/images/locaciones/${data.dpt_img}" alt="locaciones">
                                ${data.dpt_nombre}
                            </span>

                       </label>`);

        return html;

    }//${checked}

};





