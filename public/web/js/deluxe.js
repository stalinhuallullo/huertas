$(document).ready(function() {
    if ($('.b24-ctn-slider').length && $('.b24-ctn-carousel').length) {
        $('.b24-ctn-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            autoplay: false,
            infinite:false,
            fade: true,
            centerMode: true,
            draggable: true,
            asNavFor: '.b24-ctn-carousel'
        });
        $('.b24-ctn-carousel').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.b24-ctn-slider',
            dots: false,
            arrows: true,
            prevArrow: '<button class="slick-prev icon-arrow_left" aria-label="Previous" type="button"></button>',
            nextArrow: '<button class="slick-next icon-arrow_right" aria-label="Next" type="button"></button>',
            centerMode: true,
            infinite:false,
            centerMode: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                    }
                }
            ]
        });
    }

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

    $('.goto-contacto').on('click',function () {
        $('body, html').animate({scrollTop: $('#formulario').offset().top - 65},300);
    });

    var ofi_coordenada = ["-12.7337222", "-76.6281137"];
    initStreet(ofi_coordenada);
});


function initStreet(ofi_coordenada) {
    let oflat = parseFloat(ofi_coordenada[0]);
    let oflong = parseFloat(ofi_coordenada[1]);


    var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
    var mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';


    var grayscale = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1, attribution:mbAttr});

    var map = L.map('map', {
        center: [oflat, oflong],
        zoom: 13,
        layers: [grayscale]
    });

    var myIcon2 = L.icon({
        iconUrl: path + "public/web/images/APOLO-2.png",
        iconSize: [100, 100],
    });

    var contentString2 = '<div class="infowin">' +
        '<p>APOLO CONDOMINIO</p>' +
        '</div>';


    var layergroup = L.featureGroup().addTo(map);

    var marker2 = L.marker([oflat, oflong], {icon: myIcon2}).addTo(layergroup).bindPopup(contentString2);


    map.fitBounds(layergroup.getBounds());
}
