<?php

/* home.html */
class __TwigTemplate_27e79fed28374da719549e4f117d6a9e8e4951bbabfcaed7871baba1ec65fb1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>Diskon</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  <style>
     
    .navbar {
      margin-bottom: 0px;
      border-radius: 0;
    }
    
    .nav {
      margin-bottom: 0px;
      border-radius: 0;
    }
    
     
   
    
    footer {
      background-color: #B0C4DE;

      padding: 25px;
    }




     

    .container .row .col-sm-6.col-md-4 .thumbnail .caption {
      height: 200px;
     }
    
    .container .row .col-sm-6.col-md-4 .thumbnail .jpg{


      height: 300px;
    }

    .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
   
  </style>

</head>
<body>

    <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">Diskon</a>
          </div>
          
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> My Katalog</a></li>
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
          </ul>
          <form class=\"navbar-form navbar-left\" action=\"/action_page.php\">
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Cari Produk atau Kategori\">
            <div class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"submit\">
                <i class=\"glyphicon glyphicon-search\"></i>
              </button>
            </div>
          </div>
         </form>


       </div>

    </nav>

  
<ul class=\"nav nav-tabs\">
  
  
  <li class=\"active\"><a href=\"#\">Home</a></li>
  <li class=\"dropdown\">
    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Kategori
    <span class=\"caret\"></span></a>
    <ul class=\"dropdown-menu\">
      <li><a href=\"#\">Supermarket</a></li>
      <li><a href=\"#\">Dep. Store</a></li>
      <li><a href=\"#\">Elektronik</a></li> 
      <li><a href=\"#\">Rumah</a></li> 
      <li><a href=\"#\">Busana</a></li> 
      <li><a href=\"#\">Merk Terkenal</a></li> 
      <li><a href=\"#\">Kecantikan</a></li> 
      <li><a href=\"#\">Optik</a></li> 
      <li><a href=\"#\">Anak</a></li> 
      <li><a href=\"#\">Olahraga</a></li> 
      <li><a href=\"#\">Restoran</a></li> 
      <li><a href=\"#\">Wisata</a></li> 
      <li><a href=\"#\">Bank</a></li> 
      <li><a href=\"#\">Motor</a></li> 
    </ul>
  </li>
  <li><a href=\"#\">Menu 3</a></li>
</ul>










<div class=\"container\">
  <br>
  <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
     
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">

      <div class=\"item active\">
        <img src=\"./src/newarivals.jpg\" alt=\"newarivals\" width=\"460\" height=\"345\">
        <div class=\"carousel-caption\">
          <h3></h3>
          <p></p>
        </div>
      </div>

      <div class=\"item\">
        <img src=\"./src/joyfulseason.jpg\" alt=\"joyfulseason\" width=\"460\" height=\"345\">
        <div class=\"carousel-caption\">
          <h3></h3>
          <p></p>
        </div>
      </div>
    
      

      
  
    </div>

    <!-- Left and right controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
</div>


<div class=\"container\">    
  <div class=\"row\">
    <div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img  class=\"jpg\" src=\"./src/slowjuicer.jpg\" alt=\"slowjuicer.jpg\">
      <div class=\"caption\">
      <h4>HUROM SLOW JUICER FERRARI + 2 BOTOL JUS</h4>
      <p>Rp 5.998.000 <span class=\"label label-warning\">30%</span></p> 
        <h3>Rp 4.198.600</h3>
        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Buka Katalog</a> </p>
      </div>
    </div>
  </div>

    <div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img class=\"jpg\" src=\"./src/wajan.jpg\" alt=\"./src/wajan.jpg\">
      <div class=\"caption\">
      <h4>THOR WAJAN PANGGANG 3IN1</h4>
        <p>Rp 289.000 <span class=\"label label-warning\">41%</span> </p> 
        <h3>Rp 170.000</h3>
      
        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Buka Katalog</a> </p>
      </div>
    </div>
  </div>

  <div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img  class=\"jpg\" src=\"./src/sepedastatis.jpg\" alt=\"./src/sepedastatis.jpg\">
      <div class=\"caption\">
        <h4>BERWYN SEPEDA STATIS NS-654</h4>
        <p></p>
        <h3>Rp 2.229.000</h3>

        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Buka Katalog</a> </p>
      </div>
    </div>
  </div>

    <div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img class=\"jpg\" src=\"./src/kandanghewan.jpg\" alt=\"./src/kandanghewan.jpg\">
      <div class=\"caption\">
        <h4>FERPLAST KANDANG HEWAN PORTABEL ATLAS CAR 100</h4>
        <p></p>
        <h3>Rp 1.798.000</h3>
        </br>
        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Buka Katalog</a> </p>
      </div>
    </div>
  </div>

  <div class=\"col-sm-6 col-md-4\" >
    <div class=\"thumbnail\">
      <img class=\"jpg\" src=\"./src/setalatmakan.jpg\" alt=\"./src/setalatmakan.jpg\">
      <div class=\"caption\">
        <h4>KRISHOME SET ALAT MAKAN DENGAN WADAH 24 PCS - MERAH</h4>
        <p>Rp 329.000 <span class=\"label label-warning\">20%</span></p>
        <h3>Rp 263.200</h3>
        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Buka Katalog</a> </p>
      </div>
    </div>
  </div>

  <div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img class=\"jpg\" src=\"./src/glassset.jpg\" alt=\"./src/glassset.jpg\">
      <div class=\"caption\">
      <h4>GLASSLOCK SET PITCHER DAN 4 GELAS</h4>
        <p>Rp 300.000 <span class=\"label label-warning\">50%</span> </p>
        <h3>RP 150.000</h3>
    
        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Buka Katalog</a></p>
      </div>
    </div>
  </div>

<div class=\"col-sm-12\">
      <div class=\"well\">
          <ul class=\"pager\">
  <li class=\"previous\"><a href=\"#\">Previous</a></li>
  
  <li class=\"next\"><a href=\"#\">Next</a></li>
</ul> 
          </div>
        </div>







    
</div>
<div class=\"jumbotron\">
  <div class=\"container\">
    <form class=\"form-inline text-center \" >Receive the newest 
              catalogues in your city by email:
            <input type=\"email\" class=\"form-control\" size=\"50\" placeholder=\"Email Address\">
            <button type=\"button\" class=\"btn btn-danger\">Sign Up</button>
         </form>
  </div>
</div>







<footer class=\"container-fluid text-center\">
  


</footer>




</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html", "/var/www/html/Diskon/templates/home.html");
    }
}
