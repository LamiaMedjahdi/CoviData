@extends('layouts.admin')

@section('content')
<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>550</h2>
                                                <span>Personnes inscrites sur la plateforme</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-collection-item-9-plus"></i>
                                            </div>
                                            <div class="text">
                                                <h2>25</h2>
                                                <span>Nouvelles publications - 24h</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-alert-triangle"></i>
                                            </div>
                                            <div class="text">
                                                <h2>3</h2>
                                                <span>Signalements</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-comments"></i>
                                            </div>
                                            <div class="text">
                                                <h2>25</h2>
                                                <span>idées partagées aujourd'hui</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Rapport covid-19 Avril 2020</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>Cas</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>décés</span>
                                                </div>
                                            </div>
                                            <div class="chart-info__right">
                                                <div class="chart-statis">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                                    <span class="label">cas</span>
                                                </div>
                                                <div class="chart-statis mr-0">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                    <span class="label">décés</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">Graphique par %</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>Nouveaux cas</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>Nouveaux décés</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Classement par Wilayas</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>Code Wilaya</th>
                                                <th>Wilaya</th>
                                                <th class="text-right">Total des cas</th>
                                                <th class="text-right">Total des décés</th>
                                                <th class="text-right">Total de guérisons</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>27-04-2020 05:57</td>
                                                <td>2</td>
                                                <td>Constantine</td>
                                                <td class="text-right">32</td>
                                                <td class="text-right">10</td>
                                                <td class="text-right">6</td>
                                            </tr>
                                            <tr>
                                                <td>27-04-2020 05:57</td>
                                                <td>13</td>
                                                <td>Tlemcen</td>
                                                <td class="text-right">88</td>
                                                <td class="text-right">10</td>
                                                <td class="text-right">13</td>
                                            </tr>
                                            <tr>
                                                <td>27-04-2020 05:57</td>
                                                <td>22</td>
                                                <td>Sidi Belabes</td>
                                                <td class="text-right">30</td>
                                                <td class="text-right">12</td>
                                                <td class="text-right">6</td>
                                            </tr>
                                            <tr>
                                                <td>27-04-2020 05:57</td>
                                                <td>16</td>
                                                <td>Alger</td>
                                                <td class="text-right">655</td>
                                                <td class="text-right">35</td>
                                                <td class="text-right">65</td>
                                            </tr>
                                            <tr>
                                                <td>27-04-2020 05:57</td>
                                                <td>09</td>
                                                <td>Blida</td>
                                                <td class="text-right">955</td>
                                                <td class="text-right">120</td>
                                                <td class="text-right">200</td>
                                            </tr>
                                            <tr>
                                                <td>27-04-2020 05:57</td>
                                                <td>06</td>
                                                <td>Bedjaia</td>
                                                <td class="text-right">300</td>
                                                <td class="text-right">150</td>
                                                <td class="text-right">50</td>
                                            </tr>
                                            <tr>
                                                <td>27-04-2020 05:57</td>
                                                <td>15</td>
                                                <td>Tizi Ouzou</td>
                                                <td class="text-right">500</td>
                                                <td class="text-right">25</td>
                                                <td class="text-right">120</td>
                                            </tr>
                                            <tr>
                                                <td>27-04-2020 05:57</td>
                                                <td>31</td>
                                                <td>Oran</td>
                                                <td class="text-right">130</td>
                                                <td class="text-right">25</td>
                                                <td class="text-right">50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Par nombre de cas</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>Blida</td>
                                                        <td class="text-right">955</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alger</td>
                                                        <td class="text-right">655</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bejaia</td>
                                                        <td class="text-right">300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tizi Ouzou</td>
                                                        <td class="text-right">500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Oran</td>
                                                        <td class="text-right">130</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tlemcen</td>
                                                        <td class="text-right">88</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sidi Belabes</td>
                                                        <td class="text-right">30</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Constantine</td>
                                                        <td class="text-right">32</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>Nouvelles publications</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-check-all"></i>
                                        </button>
                                        
                                    </div>
                                    
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Approuvez / refusez les dernieres publications</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Mohammed El Amine a publié une nouvelle publication dans la rubrique covid-19</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">3 nouveaux signalements dans "commerçants" </a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">2 nouveaux signalements dans "hygiène"</a>
                                                    </h5>
                                                    <span class="time">02:00 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Mises à jour sur les chiffres du covid-19</a>
                                                    </h5>
                                                    <span class="time">03:30 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Nouvelle notification de Ministère de la santé</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Ibrahim Khalil a partagé la plateforme</a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">Charger plus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>Covid-19 Idées</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-eye"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message__noti">
                                                <p>Vous avez
                                                    <span>255</span>

                                                    idées proposées
                                                </p>
                                            </div>
                                            <div class="au-message-list">
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="{{ asset('images/icon/avatar-02.jpg') }}" alt="John Smith">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Ghizlene</h5>
                                                                <p>Mettre en place des robots stérilisateurs</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>120 votes</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="{{ asset('images/icon/avatar-03.jpg') }}" alt="Nicholas Martinez">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Karim Dib</h5>
                                                                <p>Démarrer le payement en ligne pour limiter les déplacements</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>50 votes</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="{{ asset('images/icon/avatar-04.jpg') }}" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Salim Belarbi</h5>
                                                                <p>Collecte de fonds organisées en ligne</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>220 votes</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="{{ asset('images/icon/avatar-05.jpg') }}" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Ahmed Abderrahim</h5>
                                                                <p>Stérélisateur dans les endroits de regroupement</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>20 votes</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="{{ asset('images/icon/avatar-04.jpg') }}" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="{{ asset('images/icon/avatar-05.jpg') }}" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-message__footer">
                                                <button class="au-btn au-btn-load js-load-btn">Charger plus</button>
                                            </div>
                                        </div>
                                        <div class="au-chat">
                                            <div class="au-chat__title">
                                                <div class="au-chat-info">
                                                    <div class="avatar-wrap online">
                                                        <div class="avatar avatar--small">
                                                            <img src="{{ asset('images/icon/avatar-02.jpg') }}" alt="John Smith">
                                                        </div>
                                                    </div>
                                                    <span class="nick">
                                                        <a href="#">John Smith</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="au-chat__content">
                                                <div class="recei-mess-wrap">
                                                    <span class="mess-time">12 Min ago</span>
                                                    <div class="recei-mess__inner">
                                                        <div class="avatar avatar--tiny">
                                                            <img src="{{ asset('images/icon/avatar-02.jpg') }}" alt="John Smith">
                                                        </div>
                                                        <div class="recei-mess-list">
                                                            <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                            <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="send-mess-wrap">
                                                    <span class="mess-time">30 Sec ago</span>
                                                    <div class="send-mess__inner">
                                                        <div class="send-mess-list">
                                                            <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-chat-textfield">
                                                <form class="au-form-icon">
                                                    <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                                    <button class="au-input-icon">
                                                        <i class="zmdi zmdi-camera"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
