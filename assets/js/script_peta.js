"<?= base_url('assets') ?>/js/leaflet.ajax.js"

 var map = L.map('mapid').setView([-6.889836, 109.674591], 14);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
                maxZoom: 13,
                id: 'mapbox.streets',
                accessToken: 'sk.eyJ1Ijoicm9tYW56aWxvbmciLCJhIjoiY2p5MmduNm81MG1oeTNjczd3eHltY2lvOSJ9.WyOWWUKHoreD4lqBAs85cg'
            }).addTo(map);
    L.marker([51.5,-0.09]).addTo(map)


function popUp(f,l){
    var out = [];
    if (f.properties){
        // for(key in f.properties){
        //     out.push(key+": "+f.properties[key]);
        // }

        out.push("Kecamatan: "+f.properties['KECAMATAN']);
        out.push("Desa : "+f.properties['DESA']);
        out.push("Luas  : "+f.properties['LUAS_WILAY']);
        l.bindPopup(out.join("<br />"));
    }
}
var jsonTest = new L.GeoJSON.AJAX(["<?= base_url('assets') ?>/geojson/Kalongan.geojson"],{onEachFeature:popUp}).addTo(map);