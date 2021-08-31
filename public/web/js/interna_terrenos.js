$(document).ready(function () {

    if($('.item-beneficio').length) {
        $('.item-beneficio').click(function () {
            $('.box-beneficios').find('.active').removeClass('active');
            $(this).addClass('active');
            var pic = $(this).data('foto');
            $('.atributo-big').attr('src', path + 'public/web/files/atributo/' + pic);
        });
    }


    $('.goto-contacto').on('click',function () {
        $('body, html').animate({scrollTop: $('#formulario').offset().top - 65},300);
    });


	/* INICIAR MAPS
	* ****************************************************************** */
    initStreet(pro_coordenada, ofi_coordenada);


    /* MODAL
    *****************************/
    abrirInformacionLegal();

    /* YOUTUBE
    *****************************/
    $(".js-video-button").click(function () {
        $('#videoModal').modal('dispose');
        urlvideo = "https://www.youtube.com/embed/" + $(this).attr("data-video-id") + "?autoplay=1";

        $('#videoModal .embed-container iframe').attr('src', urlvideo);
        $('#videoModal').on('hidden.bs.modal', function () {
            $('#videoModal .embed-container iframe').attr('src', '');
        });
    });

    /* WHATSAPP
    *****************************/
    $('#mensaje').val('Hola, estoy interesado en el Proyecto ' + nombreProyecto);
    $('#mensaje').attr('rows', '3');
    $('.send').data('tel', celular);

    /* FORMULARIO
    *****************************/
    $('#formulario form input[name=proyecto]').attr('value', nombreProyecto);
    $('#formulario form input[name=proyecto_]').attr('value', pry_id);
    //$('#formulario form input[name=tipo]').attr('value', tipo);

    if($('.gallery__slick').length){
        $('.gallery__slick').slick({
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
        $('.gallery__slick').slick('slickGoTo',0);
    }

    if($('.testimony__slick').length){
        $('.testimony__slick').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            initialSlide: 2,
            accessibility: false,
            pauseOnHover:true,
            arrows: true,
            slide: 'div',
            prevArrow: '<button class="slick-controls-prev slick-arrow"><img src="'+path+'public/web/images/flecha-3.svg" alt=""></button>',
            nextArrow: '<button class="slick-controls-next slick-arrow"><img src="'+path+'public/web/images/flecha-4.svg" alt=""></button>'
        });
    }

});

function abrirInformacionLegal(){
    $('#legalmodal .contenido').append("<p>Esto es un mensaje de prueba</p>")
    $("#legalmodal .titulo span").html(" | " + "Proyecto anonimo");
    $("#legalmodal h5 img").attr("src", "http://localhost/web/inmobiliariahuertas/public/web/images/logo-huertas.png");
    $("#legalmodal").modal("show");
}

function initStreet(pro_coordenada) {
    let lat = parseFloat(pro_coordenada[0]);
    let long = parseFloat(pro_coordenada[1]);

    let inputHiddenIcon = $("#inputHiddenIcon").val();

    //var map = L.map('map').setView([lat,long], 13);

    var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';


    var grayscale = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});


    var map = L.map('map', {
        center: [lat, long],
        zoom: 10,
        layers: [grayscale]
    });


    var myIcon = L.icon({
        //iconUrl: path + "public/web/files/proyecto/marker_" + alias + ".svg",
        //iconUrl: path + "public/web/images/ICONO-HUERTAS.png",
        iconUrl: path+inputHiddenIcon,
        iconSize: [100, 100], // size of the icon
    });

    var contentString = '<div class="infowin">' +
        '<p>' + locations[0][0] + '</p>' +
        '</div>';

    var layergroup = L.featureGroup().addTo(map);

    var marker = L.marker([lat, long], {icon: myIcon}).addTo(layergroup).bindPopup(contentString);

    map.fitBounds(layergroup.getBounds());
}
