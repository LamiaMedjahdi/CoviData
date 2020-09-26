@extends('layouts.app')

@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>It.Next - IT Service Responsive Html Theme</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="{{ asset('images/fevicon/fevicon.png') }}" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
<!-- Site css -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
<!-- colors css -->
<link rel="stylesheet" href="{{ asset('css/colors1.css') }}" />
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
<!-- wow Animation css -->
<link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}" />
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="{{ asset('images/loaders/loader_1.png') }}" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="{{ url('/acceuil') }}"><img src="{{ asset('images/logos/it_logo.png') }}" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="active" href="{{ url('/acceuil') }}">Acceuil</a>
                  
                </li>
                <li><a href="{{ asset('it_about.html') }}">CoviData ?</a></li>
                <li> <a href="{{ url('idees') }}">Idées</a>
                    <li> <a href="{{ asset('it_service.html') }}">Signalements</a>
                  <ul>
                    <li><a href="{{ asset('it_service_list.html') }}">Services list</a></li>
                    <li><a href="{{ asset('it_service_detail.html') }}">Services Detail</a></li>
                  </ul>
                </li>
                <li> <a href="{{ url('/publications') }}">Publications</a>
                  
                </li>
                {{-- <li> <a href="#">Pages</a>
                  <ul>
                    <li><a href="{{ asset('it_career.html') }}">Career</a></li>
                    <li><a href="{{ asset('it_price.html') }}">Pricing</a></li>
                    <li><a href="{{ asset('it_faq.html') }}">Faq</a></li>
                    <li><a href="{{ asset('it_privacy_policy.html') }}">Privacy Policy</a></li>
                    <li><a href="{{ asset('it_error.html') }}">Error 404</a></li>
                  </ul>
                </li> --}}
                <li> <a href="{{ asset('it_shop.html') }}">Boutique</a>
                  <ul>
                    <li><a href="{{ asset('it_shop.html') }}">Shop List</a></li>
                    <li><a href="{{ asset('it_shop_detail.html') }}">Shop Detail</a></li>
                    <li><a href="{{ asset('it_cart.html') }}">Shopping Cart</a></li>
                    <li><a href="{{ asset('it_checkout.html') }}">Checkout</a></li>
                  </ul>
                </li>
                <li> <a href="{{ asset('it_contact.html') }}">Contact</a>
                  <ul>
                    <li><a href="{{ asset('it_contact.html') }}">Contact Page 1</a></li>
                    <li><a href="{{ asset('it_contact_2.html') }}">Contact Page 2</a></li>
                  </ul>
                </li>
              </ul>
            </div>
           
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->
<!-- section -->
@yield('body');
<!-- End Model search bar -->
<!-- footer -->
<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="map_section">
        <div id="map"></div>
      </div>
      <div class="footer_blog">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>It Next Theme</h2>
            </div>
            <p>Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.</p>
            <ul class="social_icons">
              <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Additional links</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="{{ asset('it_about.html') }}"><i class="fa fa-angle-right"></i> About us</a></li>
              <li><a href="{{ asset('it_term_condition.html') }}"><i class="fa fa-angle-right"></i> Terms and conditions</a></li>
              <li><a href="{{ asset('it_privacy_policy.html') }}"><i class="fa fa-angle-right"></i> Privacy policy</a></li>
              <li><a href="{{ asset('it_news.html') }}"><i class="fa fa-angle-right"></i> News</a></li>
              <li><a href="{{ asset('it_contact.html') }}"><i class="fa fa-angle-right"></i> Contact us</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Services</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="{{ asset('it_data_recovery.html') }}"><i class="fa fa-angle-right"></i> Data recovery</a></li>
              <li><a href="{{ asset('it_computer_repair.html') }}"><i class="fa fa-angle-right"></i> Computer repair</a></li>
              <li><a href="{{ asset('it_mobile_service.html') }}"><i class="fa fa-angle-right"></i> Mobile service</a></li>
              <li><a href="{{ asset('it_network_solution.html') }}"><i class="fa fa-angle-right"></i> Network solutions</a></li>
              <li><a href="{{ asset('it_techn_support.html') }}"><i class="fa fa-angle-right"></i> Technical support</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Contact us</h2>
            </div>
            <p>123 Second Street Fifth Avenue,<br>
              Manhattan, New York<br>
              <span style="font-size:18px;"><a href="{{ asset('images/icon/avatar-02.jpg') }}tel:+9876543210">+987 654 3210</a></span></p>
            <div class="footer_mail-section">
              <form>
                <fieldset>
                <div class="field">
                  <input placeholder="Email" type="text">
                  <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="cprt">
        <p>ItNext © Copyrights 2019 Design by html.design</p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
<!-- js section -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- menu js -->
<script src="{{ asset('js/menumaker.js') }}"></script>
<!-- wow animation -->
<script src="{{ asset('js/wow.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('js/custom.js') }}"></script>
<!-- revolution js files -->
<script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<!-- map js -->
<script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
         styles: [
                  {
                    elementType: 'geometry',
                    stylers: [{color: '#fefefe'}]
                  },
                  {
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                  },
                  {
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#f5f5f5'}]
                  },
                  {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#bdbdbd'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#eeeeee'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#757575'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.arterial',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#3d3523'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#000'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#c8d7d4'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#b1a481'}]
                  }
                ]
         });
         
           var image = 'images/it_service/location_icon_map_cont.png';
           var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
<!-- google map js -->
<script src="{{ asset('images/fevicon/fevicon.png') }}https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>


<!-- end google map js -->
</body>
</html>

@endsection
