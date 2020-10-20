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
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- site icons -->
<link rel="icon" href="{{ asset('images/fevicon/fevicon.png') }}" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/maps-algerie.css') }}" />


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
                
                <li> <a href="{{ url('idees') }}">Idées</a>
                    <li> <a href="{{ url('signals') }}">Signalements</a>
              
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
                <li> <a href="{{ url('/contact') }}">Contact</a>
                  
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
      <div  style="padding-left: 50px; padding-top: 100px;">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FChuTlemcen-1179379938767431&tabs=timeline&width=350&height=450&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
      <div class="footer_blog">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>CoviData</h2>
            </div>
            <p>Covidata est une plateforme de statistiques sur le coronavirus en Algérie, elle regroupe plusieurs fonctionnalités qui permettent aux gens et aux autorités locales de mieux gérer la pandémie en algérie en général et à tlemcen en particulier</p>
            <ul class="social_icons">
              
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            


              
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Catégories</h2>
            </div>
            <ul class="footer-menu">
              @foreach ($categories as $categorie)
                  <li><a href="{{ url('/idee-par-categorie/'.$categorie->label.'/'.$categorie->id) }}"><i class="fa fa-angle-right"></i> {{$categorie->label}}</a></li>
              @endforeach
              
            
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Raccouci</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="{{ url('/register') }}"><i class="fa fa-angle-right"></i> Inscription</a></li>
              <li><a href="{{ url('/login') }}"><i class="fa fa-angle-right"></i> Connexion</a></li>
              <li><a href="{{ url('/logout') }}"><i class="fa fa-angle-right"></i> Déconnexion</a></li>
              
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Contactez nous</h2>
            </div>
           
             
            <div class="footer_mail-section">
              
                <div class="field">
                  
                 <a href="{{ url('/contact') }}"> <button href="{{ url('/contact') }}" class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button></a>
                </div>
               
            </div>
          </div>
        </div>
      </div>
      <div class="cprt">
        <p>CoviData - plateforme de statistiques et d'informations sur le covid en Algérie</p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
<!-- js section -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/dz/dz-all.js"></script>
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
<script src="{{ asset('revolution/js/maps-javascript.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/dz/dz-all.js"></script>

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

@yield('script');

<!-- end google map js -->
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f87423722e35b06"></script>
</body>
</html>

@endsection
