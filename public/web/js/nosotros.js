
$(document).ready(function () {

    var ofi_coordenada = ["-12.083723", "-77.014717"];
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
        iconUrl: path + "public/web/images/marker-menorca.svg",
        iconSize: [100, 100],
    });

    var contentString2 = '<div class="infowin">' +
        '<p>Oficina de Inmobiliaria Huertas</p>' +
        '</div>';


    var layergroup = L.featureGroup().addTo(map);

    var marker2 = L.marker([oflat, oflong], {icon: myIcon2}).addTo(layergroup).bindPopup(contentString2);


    map.fitBounds(layergroup.getBounds());
}
