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
       $('#formulario .btn-menorca-light').val('Enviando...');
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

    var options = {
		dataType: 'json',
		type: 'post',
		clearForm:true,
     beforeSend: function() {
       $('.contacto-sec form .btn-menorca-light').val('Enviando...');
        $('.contacto-sec form .btn-menorca-light').attr('disabled',true);

        $('#contactoproyecto360 .btn-menorca-light').val('Enviando...');
        $('#contactoproyecto360 .btn-menorca-light').attr('disabled',true);

    },
		success: function(res){
            $('.contacto-sec form .btn-menorca-light').val('Enviar mis datos');
            $('.contacto-sec form .btn-menorca-light').attr('disabled',false);

            $('#contactoproyecto360 .btn-menorca-light').val('Enviar mis datos');
            $('#contactoproyecto360 .btn-menorca-light').attr('disabled',false);


                /*var respuesta = `<div class="col-md-12">
                                <div class="msg">
                                    ¡Gracias por escribirnos!<br><span class="sub">Nos pondremos en contacto contigo a la brevedad posible</span>
                                </div>
                             </div>`;*/


            if(res.res =="ok"){
                $('#success').modal('show');
		localStorage.setItem("idlead",res.idlead);
                datosFormulario(res.datos);

            }
		}
	}
    $(".contacto-sec form, #contactoproyecto360").ajaxForm(options);


    llenardatosFormulario();

    $( window ).scroll(function() {
        $('.menu').addClass('scroll');

        if($(this).scrollTop() == 0){
            $('.menu').removeClass('scroll');

        }


    }) ;



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


     if( page != 'blog'){
         if($('.beneficios__slick').length){
             $('.beneficios__slick').slick({
                 dots: false,
                 infinite: true,
                 prevArrow: '<button type="button" class="slick-prev"><img src="'+path+'public/web/images/'+flecha1+'" alt="flecha izquierda" /></button>',
                 nextArrow: '<button type="button" class="slick-next"><img src="'+path+'public/web/images/'+flecha2+'" alt="flecha derecha"/></button>',
             });
         }


         if($('.tipos-slick').length) {
             $('.tipos-slick').slick({
                 dots: true,
                 infinite: true,
                 slidesToShow: 4,
                 slidesToScroll: 1,
                 prevArrow: false,//'<button type="button" class="slick-prev"><img src="' + path + 'public/web/images/flecha-1.svg" alt="flecha izquierda"></button>',
                 nextArrow: false,//'<button type="button" class="slick-next"><img src="' + path + 'public/web/images/flecha-2.svg" alt="flecha izquierda"></button>',

                 responsive: [
                     {
                         breakpoint: 1024,
                         settings: {
                             slidesToShow: 3,
                             slidesToScroll: 3,
                             infinite: true,

                         }
                     },
                     {
                         breakpoint: 992,
                         settings: {
                             slidesToShow: 2,
                             slidesToScroll: 2
                         }
                     },
                     {
                         breakpoint: 480,
                         settings: {
                             slidesToShow: 1,
                             slidesToScroll: 1
                         }
                     }
                 ]
             });
         }

         if($('.big-carousel').length) {
              $('.big-carousel').owlCarousel({
                loop: true,
                nav: true,
                center: true,
                margin: 10,
                items: 1,
                navText: ["<img src='"+path+"public/web/images/flecha-1.svg'>","<img src='"+path+"public/web/images/flecha-2.svg' alt='flecha izquierda'>"],
              });

         }
     }





  /*$('.whatsapp-button').click(function(e){
      //Evento Whatsapp - Abrir
    //   gtag('event', 'abrir', { 'event_category': 'whatsapp', 'event_label': 'ok'});
      e.preventDefault();

  });*/

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
         setTimeout( () => popup('show', page),2000);
     }

    //countdown();
     /*setTimeout(function () {
        franja(page);

    },2000);*/


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



     $('.conoce-aqui').on('click',function () {
        popup('hide');
    });

});

function popup(data, showonpage) {
	console.log(showonpage);


    if ( showonpage != 'blog' && showonpage != 'legal' && showonpage != 'influencer2021'){

	if (data == "hide"){
            $(".popup").removeClass('show');
            $(".popup .popup__body").removeClass('bounceIn');
            $(".confe").remove();
        }else if( data == "show"){
		console.log("DD");
            //gtag('event', 'popup', { 'event_category': 'lagrati', 'event_label': 'open'});
            $(".popup").addClass('show');
            $(".popup .popup__body").addClass('bounceIn');
            //confeti(false);
        }

        localStorage.setItem('seen', (new Date()).getDate());
    }

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
