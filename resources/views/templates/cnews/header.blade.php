
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Marketing</title>
<link rel="shortcut icon" type="image/ico" href="/templates/shareit/images/logo.png" />
<meta name="description" content="">
<meta name="author" content="Themesrefinery">

<link rel="stylesheet" href="{{ $publicUrl }}css/bootstrap.min.css" />
<link rel="stylesheet" href="{{ $publicUrl }}css/styles.css" />
<!-- Animation -->
<link rel="stylesheet" href="{{ $publicUrl }}css/style-animate.css" />
<!-- Font Awesome -->

<!--Slider CSS-->
<link rel="stylesheet" type="text/css" href="{{ $publicUrl }}css/slider.css">
<!--Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ $publicUrl }}css/custom.css">
    <!-- FONTAWESOME STYLES-->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<!-- GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<script src="{{ $publicUrl }}js/jquery-1.11.1.min.js" type="text/javascript"></script> 
<script src="{{ $publicUrl }}js/bootstrap.min.js" type="text/javascript"></script> 
<script src="{{ $publicUrl }}js/jssor.js" type="text/javascript"></script>
<script src="{{ $publicUrl }}js/jssor.slider.js" type="text/javascript"></script>
<script src="{{ $publicUrl }}js/slider.js" type="text/javascript"></script>



</head>

<body style="background-color: #f4ff4">
<!--Top Header-->
<header class="header">
    <nav class="navbar navbar-inverse" role="navigation" style="background-color: #3ac569; margin-bottom: 2px; padding-left: 30px">
          <div class="navbar-header">
              <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a href="{{route('cnews.news.index')}}" class="navbar-brand scroll-top logo animated bounceInLeft rollIn"><b><i class="fa fa-ravelry" style="font-size: 45px">  Crazy</i></b></a></div>        
              <div id="main-nav" class="collapse navbar-collapse" style="margin-top: 5px;">
                <ul class="nav navbar-nav" id="mainNav">
                  <li class="active"><a href="#">Home1</a></li>
                  <li><a href="about.html">About Us</a></li>
                              <li class="dropdown">
                               <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="single-post.html">Single-Post</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="full-page.html">Full Page</a></li>
                                    <li><a href="#">Page4</a></li>
                                </ul>
                            </li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </div>  
            
        </nav>
</header>
<!--Top Header End-->

<!--Slider Start-->
<div class="slider_outer">
  <div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 400px; overflow: hidden;">
            <div>
                <img u="image" src="/storage/app/files/slider/slider1.jpg" />
                
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">News Bussiness
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
                </div>
            </div>
            <div>
                <img u="image" src="/storage/app/files/slider/slider2.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">News Marketing
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
                </div>
            </div>
            <div>
                <img u="image" src="/storage/app/files/slider/slider3.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">News Photography
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
                </div>
            </div>
        </div>
                
        
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        
        
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
        </span>
        
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
        </span>
        
    </div>
</div>
<!--Slider Start-->