locations = [
    ["Av Los Educadores S/N", "-14.0491437", "-75.7341392"],
    ["Av. Javier Prado Este 488 (Torre Orquídeas) San Isidro", "-12.0919094", "-77.0305233"],
    ["Av. Marchand mz 21 lote 21. A media cuadra del Mercado Principal de Mala. ", "-12.69175", "-76.635918"],
    [" Av. Francisco Bolognesi 159 a 1/2 cdra de la plaza de armas de Pisco.", "-13.7095032", "-76.206692"],
    ["Av. Sanchez Cerro cruce con Av. Marcavelica.", "-5.18311", "-80.65446"],
    ["Av. Victor Malasquez km 8.6", "-12.15619", "-76.86869"],
    ["Av. Balta 1126, Chiclayo (Cruce con Leoncio Prado)", "-6.76915", "-79.83822"],
    ["Módulo: C.C El Quinde", "-14.074446", "-75.739526"],
    ["Urb. Los Cedros Mz E lote 3 Yanahuara", "-16.404633", "-71.553296"],
    ["Av. San Juan S/N altura del paradero San Antonio", "-11.85893", "-77.04651"]
];



$(document).ready(function(){

    /*locations.filter(function(key, ofi) {
        var item = new oficinaItem(ofi);
        $('.sucursales .oficinas').append(item);
    });*/

    /*new Request("oficina/listarcliente/",{est:1}, function (result) {


        $.each(result, function(key, ofi) {
        //    console.log(ofi);

            var coordenadas = ofi.ofc_coordenadas.split('/');

            ofc = [
                ofi.ofc_direccion,
                coordenadas[0],
                coordenadas[1]
            ]

            locations.push(ofc);

            var item = new oficinaItem(ofi);

            $('.sucursales .oficinas').append(item);

        });

        initMap();
    });*/
    initMap();


})


// var locations = [
//     ['Oficina de ventas : Urb. Los Cedros Mz E lote 3 - Yanahuara', -16.393940, -71.549208,1]
// ];

//var icon = ['public/img/marker-menorca.png','public/img/marker-map.png'];



// Initialize and add the map
function initMap() {

    var icon = [{
        url: path+"public/web/images/marker-menorca.svg", // url
        scaledSize: new google.maps.Size(70, 70), // scaled size
        origin: new google.maps.Point(0,0), // origin
        anchor: new google.maps.Point(0, 50) // anchor
    }];
   // console.log(locations[0][1]+locations[0][2]);

    // The location of Uluru , ,,
    var uluru = {lat: parseFloat(locations[0][1]), lng: parseFloat(locations[0][2])};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 7,
            center: uluru,
            //disableDefaultUI: true,
            styles: [
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#bdbdbd"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#eeeeee"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e5e5e5"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dadada"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e5e5e5"
                        }
                    ]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#eeeeee"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f8f8f9"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#e8e9ec"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#d9d9d9"
                        }
                    ]
                }
            ]
        });
    // The marker, positioned at Uluru
    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            icon: icon[0],
            map: map

        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                var content = '<div class="infowin">'+
                    '<p>'+locations[i][0]+'</p>'+


                    '</div>';
                infowindow.setContent(content);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }

}


var oficinaItem = function(data){


    var tel2 = '';
    if(data.ofc_telefono2 != null){
        tel2 = `<a href="tel:${data.ofc_telefono2}">${data.ofc_telefono2}</a>`
    }

    if(data.ofc_principal == '1'){
        clase="principal";
    }else if(data.ofc_principal == '2'){
        clase = "edition";
    }
    else{
        clase='';
    }
    if(data.ubg_provincia == 'Cañete ')
    {

       lugar = 'Mala';

    }
    else{
        lugar = data.ubg_provincia;
    }


    var html = $(`<div class="col-lg-4 ">
                    <div class="item__sucursal ${clase}">
                        <div class="sucursal-top ">
                            ${data.ofc_nombre}
                        </div>
                        <div class="sucursal-info">
                            <div>
                                <img class="i-color" src="public/web/images/contacto_location.svg" alt="Location Icon">
                                <img class="i-white" src="public/web/images/contacto_location-w.svg" alt="Location Icon">
                                <p>${data.ofc_direccion}</p>
                            </div>
                            <div>
                                <img class="i-color" src="public/web/images/contacto_phone.svg" alt="Phone Icon">
                                <img class="i-white" src="public/web/images/contacto_phone-w.svg" alt="Phone Icon">
                                <p class="phone-contacto"><a href="tel:${data.ofc_telefono1}">${data.ofc_telefono1}</a>
                                    ${tel2}
                                </p>

                            </div>
                            <div>
                                <img class="i-color" src="public/web/images/contacto_clock.svg" alt="Clock Icon">
                                <img class="i-white" src="public/web/images/contacto_clock-w.svg" alt="Clock Iom">
                                <p>${data.ofc_horario}</p>
                            </div>
                        </div>

                    </div>
                </div>`);

    return html;
}
