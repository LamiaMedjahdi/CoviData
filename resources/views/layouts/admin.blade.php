<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tableau de bord</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="{{ asset('index.html') }}">
                            <img width="50px;" height="50px;" src="{{ asset('images/icon/logo.png') }}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ url('/index') }}">
                                <i class="fas fa-tachometer-alt"></i>Tableau de bord</a>
                            
                        </li>
                      
                       
                            </ul>
                        </li>
                     
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{ url('/acceuil') }}">
                    <img src="{{ asset('images/icon/logo.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
						<li class="has-sub">
							<a class="js-arrow" href="{{ url('/index') }}">
								<i class="fas fa-tachometer-alt"></i>Tableau de bord</a>
							
                        </li>
                      
					
					@if (Auth::check() and Auth::user()->roles == 1)
                        <li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="fas fa-clock-o"></i>Statistiques</a>
							<ul class="list-unstyled navbar__sub-list js-sub-list">
								
								<li>
									<a href="{{ url('/statistiques') }}">Liste des statistiques</a>
								</li>
								<li>
									<a href="{{ url('/ajouter-statistiques') }}">Ajouter une statistique</a>
                                </li>
                               
							</ul>
                        </li>
                        @endif
                        @if (Auth::check() and Auth::user()->roles == 1)
						<li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="fas fa-clock-o"></i>Publications</a>
							<ul class="list-unstyled navbar__sub-list js-sub-list">
								
								<li>
									<a href="{{ url('/publications-admin') }}">Liste des publications</a>
								</li>
								<li>
									<a href="{{ url('/ajouter-publication') }}">Ajouter une publication</a>
                                </li>
                               
							</ul>
                        </li>
                        @endif
                        <li>
							<a class="js-arrow" href="{{ url('/signalements') }}">
								<i class="fas fa-exclamation-triangle"></i>Signalements</a>
							
                        </li>
                        <li>
							<a class="js-arrow" href="{{ url('/idees-admin') }}">
								<i class="fas fa-lightbulb-o"></i>Idées</a>
							
                        </li>
                        @if (Auth::check() and Auth::user()->roles == 1)
                         <li>
							<a class="js-arrow" href="{{ url('/users') }}">
								<i class="fas fa-users"></i>Utilisateurs</a>
							
                        </li>
                        @endif
                         
                        @if (Auth::check() and Auth::user()->roles == 1)
                        
                        <li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="fas fa-clock-o"></i>En attente</a>
							<ul class="list-unstyled navbar__sub-list js-sub-list">
								
								<li>
									<a href="{{ url('/signalements-en-attente') }}">Signalement</a>
								</li>
								<li>
									<a href="{{ url('/idees-en-attente') }}">Idées</a>
                                </li>
                               
							</ul>
                        </li>
                        @endif
						
                         <li>
							<a class="js-arrow" href="{{ url('/messages') }}">
                                <i class="fas fa-envelope"></i>Messages</a>
                                
							
                        </li>
                        <li>
							<a class="js-arrow" href="{{ url('/mon-compte') }}">
								<i class="fas fa-cog"></i>Paramètres du compte</a>
							
                        </li>
					
					
						
					</ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            @if (Auth::check() and Auth::user()->roles == 1)
                            <form class="form-header" action="/users-search" method="POST">
                                @csrf
                                <input class="au-input au-input--xl" type="text" name="recherche" placeholder="Rechercher des utilisateurs" />
                                 <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="commune">
                                                <option value="0" disabled selected>Commune</option>
                                                @foreach ($communes as $commune)
                                            <option value="{{$commune->id}}">{{$commune->nom}}</option>
                                                
                                                @endforeach
                                                
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                  <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="profession">
                                                <option value="0" disabled selected>Profession</option>
                                                @foreach ($professions as $profession)
                                            <option value="{{$profession->id}}">{{$profession->nom}}</option>
                                                
                                                @endforeach
                                                
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            @endif

                             <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        @if (Auth::check() and Auth::user()->roles == 1)
                             <span class="quantity">{{$notifications}}</span>
                                        @else
                            <span class="quantity">{{$messagesnonluscount}}</span>
                                        @endif
                                        <div class="notifi-dropdown js-dropdown">
                                           
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <a href="{{ url('/messages') }}">
                                                <p>Vous avez {{$messagesnonluscount}} message(s) non lus</p>
                                               </a>
                                             </div>
                                            </div>
                                            @if (Auth::check() and Auth::user()->roles == 1)
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-alert-triangle"></i>
                                                </div>
                                                
                                                <div class="content">
                                                    <a href="{{ url('/signalements-en-attente') }}">
                                                <p>Vous avez {{$signals}} signalements non vérifiés</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <a href="{{ url('/idees-en-attente') }}">
                                                <p>Vous avez {{$idees}} idées non approuvées</p>
                                                    </a>
                                                </div>
                                                
                                            </div>@endif
                                           
                                        </div>
                                    </div>
                            <div class="header-button">
                               
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/users/{{Auth::user()->image}}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{Auth::user()->nom}} {{Auth::user()->prenom}} </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../images/users/{{Auth::user()->image}}" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{Auth::user()->nom}}</a>
                                                    </h5>
                                                    <span class="email">{{Auth::user()->email}}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ url('/mon-compte') }}">
                                                        <i class="zmdi zmdi-account"></i>Compte</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="/logout">
                                                    <i class="zmdi zmdi-power"></i>Déconnexion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
<!-- end document-->
