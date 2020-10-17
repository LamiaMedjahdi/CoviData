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
                            <img src="{{ asset('images/icon/logo.png') }}" alt="CoolAdmin" />
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
                                <i class="fas fa-tachometer-alt"></i>Tableau de ord</a>
                            
                        </li>
                        <li>
                            <a href="{{ asset('chart.html') }}">
                                <i class="fas fa-chart-bar"></i>Graphiques</a>
                        </li>
                        <li>
                            <a href="{{ asset('table.html') }}">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="{{ asset('form.html') }}">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="{{ asset('calendar.html') }}">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="{{ asset('map.html') }}">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ asset('login.html') }}">Login</a>
                                </li>
                                <li>
                                    <a href="{{ asset('register.html') }}">Register</a>
                                </li>
                                <li>
                                    <a href="{{ asset('forget-pass.html') }}">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ asset('button.html') }}">Button</a>
                                </li>
                                <li>
                                    <a href="{{ asset('badge.html') }}">Badges</a>
                                </li>
                                <li>
                                    <a href="{{ asset('tab.html') }}">Tabs</a>
                                </li>
                                <li>
                                    <a href="{{ asset('card.html') }}">Cards</a>
                                </li>
                                <li>
                                    <a href="{{ asset('alert.html') }}">Alerts</a>
                                </li>
                                <li>
                                    <a href="{{ asset('progress-bar.html') }}">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="{{ asset('modal.html') }}">Modals</a>
                                </li>
                                <li>
                                    <a href="{{ asset('switch.html') }}">Switchs</a>
                                </li>
                                <li>
                                    <a href="{{ asset('grid.html') }}">Grids</a>
                                </li>
                                <li>
                                    <a href="{{ asset('fontawesome.html') }}">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="{{ asset('typo.html') }}">Typography</a>
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
						<li>
							<a href="{{ asset('chart.html') }}">
								<i class="fas fa-chart-bar"></i>Graphique</a>
						</li>
						<li>
							<a href="{{ asset('map.html') }}">
								<i class="fas fa-map-marker-alt"></i>Carte</a>
						</li>
						<li>
							<a class="js-arrow" href="{{ asset('tab.html') }}">
								<i class="fas fa-info-circle"></i>Publications</a>
							
                        </li>
                        <li>
							<a class="js-arrow" href="{{ asset('signalements.html') }}">
								<i class="fas fa-exclamation-triangle"></i>Signalements</a>
							
                        </li>
                        <li>
							<a class="js-arrow" href="{{ asset('idees.html') }}">
								<i class="fas fa-lightbulb-o"></i>Idées</a>
							
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="fas fa-clock-o"></i>En attente</a>
							<ul class="list-unstyled navbar__sub-list js-sub-list">
								
								<li>
									<a href="{{ asset('signalements-waiting.html') }}">Signalement</a>
								</li>
								<li>
									<a href="{{ asset('forget-pass.html') }}">Idées</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="{{ asset('table.html') }}">
								<i class="fas fa-table"></i>Tables</a>
						</li>
						<li>
							<a href="{{ asset('form.html') }}">
								<i class="far fa-check-square"></i>Forms</a>
						</li>
						<li>
							<a href="{{ asset('calendar.html') }}">
								<i class="fas fa-calendar-alt"></i>Calendar</a>
						</li>
					
						<li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="fas fa-copy"></i>Pages</a>
							<ul class="list-unstyled navbar__sub-list js-sub-list">
								<li>
									<a href="{{ asset('login.html') }}">Login</a>
								</li>
								<li>
									<a href="{{ asset('register.html') }}">Register</a>
								</li>
								<li>
									<a href="{{ asset('forget-pass.html') }}">Forget Password</a>
								</li>
							</ul>
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
                            <div class="header-button">
                               
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ asset('images/icon/avatar-01.jpg') }}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{Auth::user()->nom}} {{Auth::user()->prenom}} </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ asset('images/icon/avatar-01.jpg') }}" alt="John Doe" />
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
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
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
