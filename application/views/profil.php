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
          <div class="slider1 flexslider">  <!-- Slider -->
            <ul class="slides">
              <li>
                <img src="<?= base_url('assets')?>/img/slider/1.jpg" alt="">
              </li>
              <li>
                <img src="<?= base_url('assets')?>/img/slider/2.jpg" alt="">
              </li>
              <li>
                <img src="img/slider/3.jpg" alt="">
              </li>
                    <li>
                <img src="img/slider/4.jpg" alt="">
              </li>
            </ul>
          </div>  <!-- Slider End -->
  </div> 
</header>
  <!-- Header End -->
  <!-- Content -->
  <div id="content">
    <div class="container">
       <div class="f-center">
              <h2>SIG PEKALONGAN</h2>
              <div class="head-info">
                Web ilmu pengetahuan dan teknologi
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

</body>
</html>
  