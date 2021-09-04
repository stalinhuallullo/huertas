var car=0;
var Request = function(ac,params,callback,method){

  car++;

  $("#cargando").show();
  var m = "get";

  if(method!=undefined) m = method;

  $.ajax({
      url:path+ac,
      dataType:"json",
      data:params,
      type:m,
      success:function(res){
          callback(res);
          car--;
          if(car==0){
              $("#cargando").fadeOut(200);
          }

      }
  });
}






var flecha1= '';
var flecha2= '';

$(document).ready(function(){

    var options = {
		dataType: 'json',
		type: 'post',
		clearForm:true,
     beforeSend: function() {
       $('#formulario .btn-menorca-light').val('Enviando..5.');
       $('#formulario .btn-menorca-light').attr('disabled',true);

         $('#contactoproyecto360 .btn-menorca-light').val('Enviando...');
         $('#contactoproyecto360 .btn-menorca-light').attr('disabled',true);

    },
		success: function(res){
            //alert(res.res);

            $('#formulario .btn-menorca-light').val('Enviar mis datos');
            $('#formulario .btn-menorca-light').attr('disabled',false);

            $('#contactoproyecto360 .btn-menorca-light').val('Enviar mis datos');
            $('#contactoproyecto360 .btn-menorca-light').attr('disabled',false);
            //alert(res.res);

            console.log(res);



            if(res.res == "ok"){

                //$('#formulario form .sub-res').empty();
                //$('#formulario form .sub-res').append(respuesta);
                localStorage.setItem("idlead",res.idlead);
                $('#success').modal('show');

                datosFormulario(res.datos);

			}
        },
    };

    var optionsformulario = {
        dataType: 'json',
        type: 'post',
        clearForm:true,
        beforeSend: function() {
            $('#formulario .btn-menorca-light').val('Enviando...');
            $('#formulario .btn-menorca-light').attr('disabled',true);

        },
        success: function(res){
            //alert(res.res);

            $('#formulario .btn-menorca-light').val('Enviar mis datos');
            $('#formulario .btn-menorca-light').attr('disabled',false);

            console.log(res);



            if(res.res == "ok"){

                //$('#formulario form .sub-res').empty();
                //$('#formulario form .sub-res').append(respuesta);
                console.log('conversion');


                localStorage.setItem("idlead",res.idlead);
                $('#confirmo').modal('show');

                dataLayer.push({
                  event: 'formulario_enviado',
                  eventModel: {send_to: 'AW-992151703/Q5gxCO7twbEBEJeRjNkD'},
                })

                datosFormulario(res.datos);

            }
        },
    };


   //();

    $("#formulario form").ajaxForm(optionsformulario);
    $("#informes360modal form").ajaxForm(options);


    var options = {
		dataType: 'json',
		type: 'post',
		clearForm:true,
    beforeSend: function() {
       $('.form-edition form .btn-menorca-edition').val('Enviando...');
       $('.form-edition form .btn-menorca-edition').attr('disabled',true);


    },
		success: function(res){
      //var idlead = $("#formulario form input[name=proyecto]").val();
      //console.log(idlead);
      //gtag('event', 'enviar', { 'event_category': 'formulario', 'event_label': idlead});

      $('.form-edition form .btn-menorca-edition').val('Enviar');
      $('.form-edition form .btn-menorca-edition').attr('disabled',false);

      /*
       var respuesta = `<div class="col-md-12">
                            <div class="msg">
                                ¡Gracias por escribirnos!<br><span class="sub">Nos pondremos en contacto contigo a la brevedad posible</span>
                            </div>
                         </div>`;
        */

        if(res.res =="ok"){

                $('#success').modal('show');

                dataLayer.push({
                  event: 'formulario_enviado',
                  eventModel: {send_to: 'AW-992151703/Q5gxCO7twbEBEJeRjNkD'},
                })
                datosFormulario(res.datos);
            }
		}
	}
    $(".form-edition form").ajaxForm(options);




    llenardatosFormulario();

    /*$( window ).scroll(function() {
        $('.menu').addClass('scroll');

        if($(this).scrollTop() == 0){
            $('.menu').removeClass('scroll');

        }
    }) ;*/



      $('.menu__button').click(function(){
          $('.menu__box').addClass('active');
          $('.close__button').addClass('active');
           $('.menu__button').fadeOut('fast');

      });

      $('.close__button').click(function(){
          $('.menu__box').removeClass('active');
          $('.close__button').removeClass('active');
          $('.menu__button').fadeIn();

      });




     if(alias === 'caleta-san-antonio'){
        flecha1 = 'flecha-5.svg';
        flecha2 = 'flecha-6.svg';
     }
     else{
        flecha1 = 'flecha-1.svg';
        flecha2 = 'flecha-2.svg';
     }

  $('.close-link').click(function(e){
      e.preventDefault();
      $('#whatsapp-modal').modal('hide');
  });



  $(document).mouseup(function(e) {
      var container = $("#whatsapp-modal");

      // if the target of the click isn't the container nor a descendant of the container
      if (!container.is(e.target) && container.has(e.target).length === 0)
      {
          container.modal('hide');
      }
  });

    var win = $(window);

    // fire it once on document.ready
    resizeHandler();

    // Fires on every resize
    win.resize(resizeHandler);

    function resizeHandler() {
        if (win.width() <= 992) {

            if( page != 'blog'){
                $('.historia-carousel').addClass('owl-carousel');
            $('.historia-carousel').removeClass('row');

            $('.historia-carousel>div').removeClass('col-lg-4');

            $('.historia-carousel').owlCarousel({
                loop: false,
                nav: false,
                dots: true,
                 center: true,
                 margin: 10,

                 navText: ["<img src='"+path+"assets/web/img/flecha-1.svg' alt='flecha izquierda'>","<img src='"+path+"assets/web/img/flecha-2.svg' alt='flecha derecha'>"],

                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    768: {
                        items: 2,
                        center: false,
                        margin: 40
                    },
                }
            });



            $('.radio-box').addClass('radio-carousel');
            $('.radio-carousel').addClass('owl-carousel');
            $('.radio-carousel').owlCarousel({
                loop: false,
                nav: false,
                dots: true,
                center: true,
                margin: 10,
                navText: ["<img src='"+path+"assets/web/img/flecha-3.svg' alt='flecha derecha'>","<img src='"+path+"assets/web/img/flecha-4.svg' alt='flecha izquierda'>"],
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    768: {
                        items: 3,
                        center: false,
                        margin: 40
                    },
                }
            });



            $('.buttons-menorca').addClass('owl-carousel');
            $('.buttons-menorca').owlCarousel({
                loop: false,
                nav: false,
                dots: false,
                center: true,

                items: 2,
                stagePadding: 2,

            });
            }


        } else {

            finishCards();

            $('.radio-carousel').removeClass('owl-carousel');
            $('.radio-box').removeClass('radio-carousel');
            var owl3 = $('.radio-box');
            owl3.owlCarousel();
            owl3.trigger('destroy.owl.carousel');

            $('.buttons-menorca').removeClass('owl-carousel');

            var owl4 = $('.buttons-menorca');
            owl4.owlCarousel();
            owl4.trigger('destroy.owl.carousel');
        }
    }


    $('.send').click(function(){
      //Evento Whatsapp - Enviar
    //   gtag('event', 'enviar', { 'event_category': 'whatsapp', 'event_label': 'ok'});
      var mensaje = $('#mensaje').val();
      var telefono = $(this).data("tel");

       window.open('https://api.whatsapp.com/send?phone='+telefono+'&text='+encodeURIComponent(mensaje));

      $('#mensaje').val('');
      $('#whatsapp-modal').modal('hide');
   });

    //checkfranja();

    $(".close-btn").on('click',function () {
        popup('hide');
        setTimeout(function () {
        //    franja(page);
         },2000);

     });



     if ( localStorage.getItem('seen') != (new Date()).getDate()) {
          setTimeout(popupwin, 2000);

         function popupwin(){
           popup('show', page);
         }
     }else{



     }

    //countdown();
     setTimeout(function () {
        franja(page);

    },2000);


    $('.buton-social').click(function(){

        new Request("promocion/contador/",null, function (result) {
            console.log(result);
            //$('.franja i').html(count);
        },'POST');

        new Request("promocion/getContador/",null, function (result) {
            //console.log(result[0]);
            $('.franja i').html(result[0].count);
        },'GET');


    });

    new Request("promocion/getContador/",null, function (result) {
        //console.log(result[0]);
        $('.franja i').html(result[0].count);
    },'GET');


     $('.conoce-aqui').on('click',function () {
        popup('hide');
    });

});


function franja(showonpage) {


    if ( showonpage != 'promociones/lagrati'){
        $('.franja').slideDown();
    }

    //alert('mostrar franja');
}

function countdown(){
    // Set the date we're counting down to
    var countDownDate = new Date("Nov 12, 2020 23:59:59").getTime();

// Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        $('#count .dias').html('<span>'+days+'</span> <span>DÍAS</span>');
        $('#count .horas').html('<span>'+hours+'</span> <span>HORAS</span>');
        $('#count .minutos').html('<span>'+minutes+'</span> <span>MINUTOS</span>');
        $('#count .segundos').html('<span>'+seconds+'</span> <span>SEGUNDOS</span>');

        /*document.getElementById("count").innerHTML = " + hours + "HORAS"
            + minutes + "MINUTOS" + seconds + "SEGUNDOS";*/

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("count").innerHTML = "EXPIRED";
        }
    }, 1000);
}

function popup(data, showonpage) {
	console.log(showonpage);


    if ( showonpage != 'blog' && showonpage != 'legal' && showonpage != 'influencer2021'){

	if (data == "hide"){
            $(".popup").removeClass('show');
            $(".popup .popup__body").removeClass('bounceIn');
            $(".confe").remove();
        }else if( data == "show"){
		console.log("DD");
            gtag('event', 'popup', { 'event_category': 'lagrati', 'event_label': 'open'});

            $(".popup").addClass('show');
            $(".popup .popup__body").addClass('bounceIn');
            //confeti(false);
        }

        localStorage.setItem('seen', (new Date()).getDate());
    }

}


function initCards(){
    $('.cards-carousel:not(.cotiza-cards)').addClass('owl-carousel');
    $('.cards-carousel:not(.cotiza-cards)').removeClass('row');
    $('.cards-carousel:not(.cotiza-cards)>div').removeClass('col-md-6');
    $('.cards-carousel:not(.cotiza-cards)>div').removeClass('col-lg-4');

    $('.cards-carousel:not(.cotiza-cards)').owlCarousel({
        loop: false,
        nav: true,
        center: true,
        margin: 10,

        navText: ["<img src='"+path+"assets/web/img/flecha-1.svg' alt='flecha izquierda'>","<img src='"+path+"assets/web/img/flecha-2.svg' alt='flecha derecha'>"],

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 2,
                center: false,
                margin: 40
            },
        }
    });

}

function finishCards(){

    $('.cards-carousel:not(.cotiza-cards)').addClass('row');
    $('.cards-carousel:not(.cotiza-cards)>div').addClass('col-md-6');
    $('.cards-carousel:not(.cotiza-cards)>div').addClass('col-lg-4');
    $('.cards-carousel:not(.cotiza-cards)').removeClass('owl-carousel');
    var owl = $('.cards-carousel:not(.cotiza-cards)');
    owl.owlCarousel();
    owl.trigger('destroy.owl.carousel');


    $('.historia-carousel>div').addClass('col-lg-4');
    $('.historia-carousel').addClass('row');
    $('.historia-carousel').removeClass('owl-carousel');
    var owl2 = $('.historia-carousel');
    owl2.owlCarousel();
    owl2.trigger('destroy.owl.carousel');

}



llenardatosFormulario= function(){

    nombre = localStorage.getItem("nombres");
    email = localStorage.getItem("email");
    dni = localStorage.getItem("dni");
    celular = localStorage.getItem("celular");
    // console.log(nombre+email+dni+celular);

    if(nombre !== '' && email !== '' && dni !== '' && celular !== '')
    {

        $('.contacto-sec form input[name=nombres]').val(nombre);
        $('.contacto-sec form input[name=dni]').val(dni);
        $('.contacto-sec form input[name=celular]').val(celular);
        $('.contacto-sec form input[name=email]').val(email);

        $('.form-edition form input[name=nombres]').val(nombre);
        $('.form-edition form input[name=dni]').val(dni);
        $('.form-edition form input[name=celular]').val(celular);
        $('.form-edition form input[name=email]').val(email);

        $('#contactoproyecto360 input[name=nombres]').val(nombre);
        $('#contactoproyecto360 input[name=dni]').val(dni);
        $('#contactoproyecto360 input[name=celular]').val(celular);
        $('#contactoproyecto360 input[name=email]').val(email);

        $('.formulario-familia input[name=nombres]').val(nombre);
        $('.formulario-familia input[name=dni]').val(dni);
        $('.formulario-familia input[name=celular]').val(celular);
        $('.formulario-familia input[name=email]').val(email);


    }

};

var datosFormulario = function(datos){
    // console.log(datos);

    localStorage.setItem("nombres", datos.cto_nombres);
    localStorage.setItem("email",datos.cto_email);
    localStorage.setItem("dni",datos.cto_dni);
    localStorage.setItem("celular",datos.cto_celular);
    localStorage.setItem("idlead",datos.idlead);

};


function obtenerValorParametro(sParametroNombre) {
    var sPaginaURL = window.location.search.substring(1);
     var sURLVariables = sPaginaURL.split('&');
      for (var i = 0; i < sURLVariables.length; i++) {
        var sParametro = sURLVariables[i].split('=');
        if (sParametro[0] == sParametroNombre) {
          return sParametro[1];
        }
      }
     return null;
}
