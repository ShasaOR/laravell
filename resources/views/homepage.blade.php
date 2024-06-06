<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>SHOEES</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{asset('Dropbeat/css/bootstrap.min.css')}}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{asset('Dropbeat/css/style.css')}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{asset('Dropbeat/css/responsive.css')}}">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{asset('Dropbeat/css/jquery.mCustomScrollbar.min.css')}}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="{{asset('Dropbeat/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('Dropbeat/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
    <!-- header section start -->
    <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href="index.html"><img src="{{asset('Dropbeat/images/logo.png')}}"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="trainings.html">TRAININGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="classes.html">CLASSES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shows.html">SHOWS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shortcodes.html">SHORTCODES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">CONTACT</a>
            </li>
          </ul>                                           --}}
          <form class="form-inline my-2 my-lg-0">
            <div class="search_icon"><a href="#"><img src="images/search-icon.png"></a></div>
          </form>
        </div>
      </nav>
    </div>
    <!-- header section end -->
    <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div class="container-fluid">
        <div id="my_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <div class="banner_taital">
                    <h1 class="dance_text">SHOEES</h1>
                    <p class="consectetur_text">Welcome to Shores, your ultimate destination for the best branded shoes! Discover the latest and exclusive collections at special prices. Enjoy a seamless, secure, and convenient shopping experience only at Shores. Visit our website now and take advantage of exciting offers!</p>
                    <div class="about_bt"><a href="/login">Login</a></div>
                    <div class="contact_bt"><a href="/register">Register</a></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="image_1"><img src="{{asset('Dropbeat/images/img-1.png')}}"></div>
                </div>
              </div>
            </div>
       
            <!-- ini slide yang ke 2 -->
            <!-- <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="banner_taital">
                    <h1 class="dance_text">Dance beat</h1>
                    <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</p>
                    <div class="about_bt"><a href="about.html">Login</a></div>
                    <div class="contact_bt"><a href="contact.html">Register</a></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="image_1"><img src="images/img-1.png"></div>
                </div>
              </div>
            </div> -->
       
            <!-- ini slide yang ke 3 -->
            <!-- <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="banner_taital">
                    <h1 class="dance_text">Dance beat</h1>
                    <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</p>
                    <div class="about_bt"><a href="about.html">About Us</a></div>
                    <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="image_1"><img src="images/img-1.png"></div>
                </div>
              </div>
            </div> -->
          </div>
          <!-- <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-left"><img src="images/left-icon.png"></i>
          </a> -->
          <!-- <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-right"><img src="images/right-icon.png"></i>
          </a> -->
        </div>
      </div>
    </div>
    <div class="ram">
      <div class="border_bg"></div>
    </div>
    <!-- banner section end -->
    <!-- Students section start -->
    <div class="Students_section layout_padding">
      <div class="container-fluid">
        <h1 class="welcome_text">Welcome !</h1>
        <p class="singh_text">Sign up now to become a cool person!</p>
        <div class="click_bt"><a href="#">Click To Sigup</a></div>
        <div class="classes_section">
          <h1 class="classes_text">All brands of shoes</h1>
          <div class="dance_main">
            <div class="row">
              <div class="col-sm-3">
                <div class="box active">NIKE</div>
                <div class="box">ADIDAS</div>
              </div>
              <div class="col-sm-3">
                <div class="box">PUMA</div>
                <div class="box">CONVERSE</div>
              </div>
              <div class="col-sm-3">
                <div class="box">VANS</div>
                <div class="box">NEW BALANCE</div>
              </div>
              <div class="col-sm-3 padding_0">
                <div class="image_2"></div>
              </div>
            </div>
          </div>
          <div class="readmore_bt"><a href="#">Read More</a></div>
        </div>
      </div>
    </div>
    <!-- Students section end -->
    <!-- dancer section start -->
    {{-- <div class="dancer_section layout_padding">
      <div class="container">
        <h1 class="ballet_text">Ballet Dancer</h1>
        <p class="amet_text">amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
        <p class="amet_text_1">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
        <div class="click_bt"><a href="#">Click To Sigup</a></div>
      </div>
    </div>
    <!-- dancer section end -->
    <!-- opening hours section start -->
    <div class="opening_section layout_padding">
      <div class="container">
        <h1 class="ballet_text">opening Hours</h1>
        <p class="amet_text">amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
        <div class="opening_section_2 layout_padding">
          <div class="time_line">
            <p class="hiphop_text">Hip Hop Dance :</p>
            <hr class="border_0">
            <p class="hiphop_text">07:00am - 21:00am</p>
          </div>
          <div class="time_line">
            <p class="hiphop_text">Ballet :</p>
            <hr class="border_0">
            <p class="hiphop_text">09:00pm - 21:00pm</p>
          </div>
          <div class="time_line">
            <p class="hiphop_text">Break Dance :</p>
            <hr class="border_0">
            <p class="hiphop_text">18:00am - 24:00pm</p>
          </div>
          <div class="time_line">
            <p class="hiphop_text">Salsa :</p>
            <hr class="border_0">
            <p class="hiphop_text">18:00pm - 22:00am</p>
          </div>
          <div class="time_line">
            <p class="hiphop_text">Tab Dancing :</p>
            <hr class="border_0">
            <p class="hiphop_text">19:00am - 23:00am</p>
          </div>
        </div>
      </div>
    </div>
    <!-- opening hours section end -->
    <!-- shortcode section start -->
    <div class="shortcode_section layout_padding">
      <div class="container">
        <h1 class="ballet_text">SHORTCODE</h1>
        <p class="amet_text">amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
        <div class="shortcode_section_2">
          <div class="shortcode_left">
            <h1 class="heading_text">Heading 1</h1>
            <p class="tempor_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur adipiscing </p>
          </div>
          <div class="shortcode_right"><img src="images/img-3.png"></div>
        </div>
        <div class="shortcode_section_2">
          <div class="shortcode_right"><img src="images/img-4.png"></div>
          <div class="shortcode_left border_left_0">
            <h1 class="heading_text_1">Heading 2</h1>
            <p class="tempor_text_1">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur adipiscing </p>
          </div>
        </div>
        <div class="shortcode_section_2">
          <div class="shortcode_left">
            <h1 class="heading_text">Heading 3</h1>
            <p class="tempor_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur adipiscing </p>
          </div>
          <div class="shortcode_right"><img src="images/img-5.png"></div>
        </div>
      </div>
    </div>
    <!-- shortcode section end -->
    <!-- testimonial section start -->
    <div class="testimonial_section layout_padding">
      <div class="container">
        <h1 class="ballet_text">Testimonial</h1>
        <p class="amet_text">amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
        <div id="main_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="testimonial_section_2 layout_padding">
                <h1 class="emrold_text">Emrold Deni</h1>
                <p class="dummy_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur adipiscing </p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="testimonial_section_2 layout_padding">
                <h1 class="emrold_text">Emrold Deni</h1>
                <p class="dummy_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur adipiscing </p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="testimonial_section_2 layout_padding">
                <h1 class="emrold_text">Emrold Deni</h1>
                <p class="dummy_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur adipiscing </p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-left"><img src="images/left-icon.png"></i>
          </a>
          <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-right"><img src="images/right-icon.png"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- testimonial section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
      <div class="container-fluid">
        <h1 class="ballet_text">Testimonial</h1>
        <p class="amet_text">amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
        <div class="contact_section2">
          <div class="row">
            <div class="col-md-6 padding_left_0">
              <div class="mail_section">
                <input type="" class="mail_text" placeholder="Name" name="Name">
                <input type="" class="mail_text" placeholder="Phone Number" name="Phone Number">
                <input type="" class="mail_text" placeholder="Email" name="Email">
                <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                <div class="send_bt"><a href="#">send</a></div>
              </div>
            </div>
            <div class="col-md-6 padding_0">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <h1 class="adderss_text">Adderss</h1>
            <div class="map_icon"><img src="images/map-icon.png"><span class="paddlin_left_0">London 145 United Kingdom</span></div>
            <div class="map_icon_1"><img src="images/call-icon.png"><span class="paddlin_left_0">+7586656566<br>+9876543210</span></div>
            <div class="map_icon"><img src="images/mail-icon.png"><span class="paddlin_left_0">volim@gmail.com</span></div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <h1 class="adderss_text">Opeing time</h1>
            <div class="hiphop_text_1">Hip Hop Dance :<span style="text-align: right; float: right;"> 07:00am - 1700</span></div>
            <div class="hiphop_text_1">Ballet :        <span style="text-align: right; float: right;"> 09:00am - 1200</span></div>
            <div class="hiphop_text_1">Break Dance :   <span style="text-align: right; float: right;"> 18:00am - 24:00</span></div>
            <div class="hiphop_text_1">Salsa :         <span style="text-align: right; float: right;"> 18:00am - 1100</span></div>
            <div class="hiphop_text_1">Tab Dancing :   <span style="text-align: right; float: right;"> 19:00am - 8 00</span></div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <h1 class="adderss_text">Newsletter</h1>
            <input type="text" class="Enter_text" placeholder="Enter your Emil" name="Enter your Emil">
            <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            <div class="social_icon">
              <ul>
                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="container">
        <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
      </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{asset('Dropbeat/js/jquery.min.js')}}"></script>
    <script src="{{asset('Dropbeat/js/popper.min.js')}}"></script>
    <script src="{{asset('Dropbeat/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Dropbeat/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('Dropbeat/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('Dropbeat/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('Dropbeat/js/custom.js')}}"></script>
    <!-- javascript --> 
    <script src="{{asset('Dropbeat/js/owl.carousel.js')}}"></script>
    <script src="{{asset('Dropbeat/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>    
</body>
</html>