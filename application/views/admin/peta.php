<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<!--
  ucorpora by freshdesignweb.com
  Twitter: https://twitter.com/freshdesignweb
  https://www.freshdesignweb.com/ucorpora/
-->
<head>
  <!-- Basic Meta Tags -->
  <meta charset="utf-8">
  <title>GIS PEkalongan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if (gte IE 9)|!(IE)]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <![endif]-->
  <!-- Styles -->
  <link href="<?= base_url('assets')?>/css/styles.css" rel="stylesheet">
  <link href="<?= base_url('assets')?>/css/bootstrap-override.css" rel="stylesheet">

  <!-- Font Avesome Styles -->
  <link href="<?= base_url('assets')?>/css/font-awesome/font-awesome.css" rel="stylesheet">
  <!--[if IE 7]>
    <link href="css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet">
  <![endif]-->

  <!-- FlexSlider Style -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/css/flexslider.css" type="text/css" media="screen">

  <!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->   


  <link rel="stylesheet" type="text/css" href="<?= base_url('assets')?>/leaflet/leaflet.css">

  <script src="<?= base_url('assets')?>/leaflet/leaflet.js"></script>

  <style type="text/css">
      #mapid{
        height: 480px;
      }
  </style>

</head>       
<body>
  <!-- Header -->
  <header id="header">
    <div class="container">
  <!-- Logo -->
      <div class="bg bg-info">
        <div class="span3">
          <div class="logo">
            <img src="<?= base_url('assets')?>/img/logo.png" style="width: 60%;">
          </div>
        </div>
        <div class="span7">            
          <h1>SISTEM INFORMASI GEOGRAFI PEKALONGAN</h1>
        </div>
      </div>
      <div class="row t-container">

        

        <div class="span12">
          <div class="row space60"></div>
             <nav id="nav" role="navigation">
                <a href="#nav" title="Show navigation">Show navigation</a>
              <a href="#" title="Hide navigation">Hide navigation</a>
              <ul class="clearfix">
              <li class="active"><a href="<?= base_url('Home');?>" title="">Beranda</a></li>
                <li><a href="<?= base_url('profil');  ?>" title="">Profil</a></li>                
                <li><a href="<?= base_url('peta');  ?>" title="">Peta</a></li>
             </ul>
          </nav>
         </div> 
      </div> 
       <div class="row space40"></div>
      </div> 
</header>
  <!-- Header End -->
  <!-- Content -->
  <div id="content">
    <div class="container">
       <div class="row">
            <div class="span8">
              <div id="mapid">
              </div>
            </div>
            <div class="span3">
              <label><input type="checkbox" id="kcm" class="form-control">Layer Kecamatan</label>
              <label><input type="checkbox" id="desa" class="form-control">Layer Desa</label>
            </div>    
        </div>
       <div class="f-hr"></div>
      <div class="row space40"></div>
      <div class="row">
        <div class="span12">
          
      <div class="space40"></div>  
              
      <!-- Our Clients -->
      
      
      <div class="space50"></div> 
       
    </div>
  </div>
  <!-- Content End -->
  
  <!-- Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="span5">
        <h3>Contact Form</h3>
        <div>         
          <form class="form-main" name="ajax-form" id="ajax-form" action="#" method="post">
            <div id="ajaxsuccess">E-mail was successfully sent.</div> 
            <div class="error" id="err-name">Please enter name</div>
            <input name="name" id="name" type="text" value="Name" onfocus="if(this.value == 'Name') this.value='';" onblur="if(this.value == '') this.value='Name';">
            
            <div class="error" id="err-email">Please enter e-mail</div>
            <div class="error" id="err-emailvld">E-mail is not a valid format</div>
            <input  name="email" id="email" type="text" value="E-mail" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';">

            <div class="error" id="err-message">Please enter message</div>
            <textarea  name="message" id="message" onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='Message';">Message</textarea><br>
            <div>
              <div class="error" id="err-form">There was a problem validating the form please check!</div>
              <div class="error" id="err-timedout">The connection to the server timed out!</div>
              <div class="error" id="err-state"></div>
            </div>
            <button id="send" class="btn f-right">Send Message <i class="icon-ok"></i></button>
          </form>
        </div>
        </div>
        <div class="span3 offset3">
          <h3>Alamat</h3>
          Pekalongan<br>
          Poncol<br>
          <br>
          <i class="icon-phone"></i>+63896786435<br>
          <i class="icon-envelope"></i><a href="mailto:support@example.com">miftahrohman007@gmail.com</a><br>
          <i class="icon-home"></i><a href="#">www.kampret.com</a>
          
          <div class="row space40"></div>  

          <a href="#" class="social-network sn2 behance"></a>
          <a href="#" class="social-network sn2 facebook"></a>
          <a href="#" class="social-network sn2 pinterest"></a>
          <a href="#" class="social-network sn2 flickr"></a>
          <a href="#" class="social-network sn2 dribbble"></a>
          <a href="#" class="social-network sn2 lastfm"></a>
          <a href="#" class="social-network sn2 forrst"></a>
          <a href="#" class="social-network sn2 xing"></a>      
        </div>
      </div>
      
      <div class="row space50"></div>
      <div class="row">
        <div class="span6">
          <div class="logo-footer">
            Design by <a href="https://www.freshdesignweb.com">fres</a>
          </div>                       
        </div>
        <div class="span6 right">
          &copy; 2019. 
        </div>
      </div>

    </div>
  </footer>
  <!-- Footer End -->

  <!-- JavaScripts -->
  <script type="text/javascript" src="<?= base_url('assets')?>/js/jquery-1.8.3.min.js"></script> 
  <script type="text/javascript" src="<?= base_url('assets')?>/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="<?= base_url('assets')?>/js/functions.js"></script>
  <script type="text/javascript" defer src="<?= base_url('assets')?>/js/jquery.flexslider.js"></script>
  <script src="<?= base_url('assets') ?>/js/leaflet.ajax.js"></script>    


  <script type="text/javascript">

  //menampilkan peta pekalongan
    var map = L.map('mapid').setView([-6.889836, 109.674591], 14);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
                maxZoom: 20,
                id: 'mapbox.streets',
                accessToken: 'Your Access Token'
            }).addTo(map);
    L.marker([51.5,-0.09]).addTo(map)

//menampilkan peta desa
document.getElementById("desa").addEventListener("change", function(){
    if (document.getElementById(this.id).checked == true){
    geojsonLayer.addTo(map);
  } else {
    geojsonLayer.remove(map);
  }
});

function getColor(d) {
    return d == 'Bumirejo' ? '#7278ee' :
           d == 'Tegalrejo' ? '#5dcb44' :
           d == 'Pringlangu' ? '#3edf99' :
           d == 'Medono' ? '#4fcd66' :
           d == 'Bumirejo' ? '#ccdc7b' :
           d == 'Kebulen' ? '#83e755' :
           d == 'Sepuro' ? '#68e790' :
           d == 'Podosugih' ? '#d62194' :
           d == 'Kergon' ? '#1575c9' :
           d == 'Bendan' ? '#47d51f' :
           d == 'Tirto' ? '#d95e5c' :
           d == 'Pasirsari' ? '#29d0df' :
           d == 'Kramatsari' ? '#1ed82b' :
           d == 'Kratonkidul' ? '#e58b4e' :
           d == 'Landungsari' ? '#d45595' :
           d == 'Sokorejo' ? '#a362cb' :
           d == 'Baros' ? '#e18174' :
           d == 'Karangmalang' ? '#6b5fda' :
           d == 'Noyontaan' ? '#d5bc5f' :
           d == 'Keputran' ? '#d6df2b' :
           d == 'Kauman' ? '#e725ea' :
           d == 'Sampangan' ? '#6f4eda' :
           d == 'sugihwaras' ? '#6468da' :
           d == 'Poncol' ? '#afea24' :
           d == 'Klego' ? '#d16c85' :
           d == 'Dekoro' ? '#9c6bd0' :
           d == 'Gamer' ? '#abd573' :
           d == 'Banyuurip Ageng' ? '#330cce' :
           d == 'Banyuurip Alit' ? '#ebbe36' :
           d == 'Buaran' ? '#85cbee' :
           d == 'Kradenan' ? '#89e6d7' :
           d == 'Jenggot' ? '#d03c22' :
           d == 'Kertoharjo' ? '#eab64c' :
           d == 'Kuripan Kidul' ? '#5410d1' :
           d == 'Duwet' ? '#d94c14' :
           d == 'Soko' ? '#3cd5a7' :
           d == 'Yosorejo' ? '#85cde1' :
           d == 'Kuripan Lor' ? '#dc5f6d' :
           d == 'Pabean' ? '#eddc22' :
           d == 'Kraton Lor' ? '#e58b4e' :
           d == 'Dukuh' ? '#485ed9' :
           d == 'Bandengan' ? '#ff7800' :
           d == 'Kandangpanjang' ? '#d03c22' :
           d == 'Panjang Wetan' ? '#f069e1' :
           d == 'Krapyak Kidul' ? '#88a5f0' :
           d == 'Krapyak Lor' ? '#42cbc4' :
    '#9ce95c';
}
function popUp(f,l){ 
    var out = [];
    if (f.properties){
        // for(key in f.properties){
        //     out.push(key+": "+f.properties[key]);
        // }

        out.push("Kecamatan: "+f.properties['KECAMATAN']);
        out.push("Desa : "+f.properties['DESA']);
        out.push("Luas  : "+f.properties['LUAS_WILAY']+ " m2");
        l.bindPopup(out.join("<br />"));
    }
}
var geojsonLayer = new L.GeoJSON.AJAX(["<?= base_url('assets') ?>/geojson/Kalongan.geojson"],{onEachFeature:popUp, style: function(feature) {
  des = feature.properties.DESA;
  return{
    fillColor: getColor(des),
      fillOpacity: 0.5,
      color: "white",
      dashArray: '3',
      weight: 1,
      opacity: 0.4
  }
}})


//menampilkan peta kecamatan
document.getElementById("kcm").addEventListener("change", function(){
    if (document.getElementById(this.id).checked == true){
    jsonTest.addTo(map);
  } else {
    jsonTest.remove(map);
  }
});

function Color(d) {
    return d == 'Pekalongan Utara' ? 'maroon' :
           d == 'Pekalongan Barat' ? 'skyblue' :
           d == 'Pekalongan Timur' ? '#ff7800' :
    '#59FD02';
}
function kcmt(f,l){ 
    var out = [];
    if (f.properties){
        // for(key in f.properties){
        //     out.push(key+": "+f.properties[key]);
        // }
        out.push("Kecamatan: "+f.properties['Kecamatan']);
        l.bindPopup(out.join("<br />"));
    }
}
var jsonTest = new L.GeoJSON.AJAX(["<?= base_url('assets') ?>/geojson/Pekalongan_cmt.geojson"],{onEachFeature:kcmt, style: function(feature) {
  kec = feature.properties.Kecamatan;
  return{
    fillColor: Color(kec),
      fillOpacity: 0.5,
      color: "white",
      dashArray: '3',
      weight: 1,
      opacity: 0.7
  }
}})

  </script>


</body>
</html>
  