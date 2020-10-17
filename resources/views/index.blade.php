@extends('layouts.admin')

@section('content')

<div class="section__content section__content--p30">
    <p hidden> {{Carbon\Carbon::setLocale( 'fr')}}.</p>
   
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
                                                <h2>{{$subscribers}}</h2>
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
                                                <h2>{{$publications}}</h2>
                                                <span>Nouvelles {{ $maladestotal}} - 24h</span>
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
                                            <h2>{{ $signals }}</h2>
                                                <span>Signalements non vérifiés</span>
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
                                                <h2>{{$idees}}</h2>
                                                <span>idées partagées aujourd'hui / non approuvées</span>
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
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Statistiques du : {{ date('d F Y', strtotime(Carbon\Carbon::now()->toDateTimeString()))}} </h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>Code Wilaya</th>
                                                <th>Wilaya</th>
                                                <th class="text-right">Nombre de cas</th>
                                                <th class="text-right">Nombre de décés</th>
                                                <th class="text-right">Nombre de guérisons</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                                @foreach ($parwilayas as $stat)
                                                <tr>
                                                <td>{{$stat->date}}</td>
                                                <td>{{$stat->wilaya_id}}</td>
                                                <td>{{$stat->nom}}</td>
                                                <td class="text-right">{{$stat->nbrmal}}</td>
                                                <td class="text-right">{{$stat->nbrgue}}</td>
                                                <td class="text-right">{{$stat->nbrmort}}</td>
                                                </tr>
                                            @endforeach
                                           
                                            
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>Covid-19 Idées les plus likées</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-eye"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message__noti">
                                                <p>Vous avez
                                                    <span>{{$idees1}}</span>

                                                    idées proposées approuvées
                                                </p>
                                            </div>
                                            <div class="au-message-list">
                                                @foreach ($idees2 as $idee2)
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="{{ asset('images/icon/avatar-03.jpg') }}" alt="Nicholas Martinez">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">{{$idee2->titre}} -  {{$idee2->label}}</h5>
                                                                <p>{{ \Illuminate\Support\Str::limit($idee2->contenu, 50) }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>{{ Carbon\Carbon::parse($idee2->created_at)->subHours(1)->diffForHumans() }}</span><hr/>
                                                            {{-- <i class="fa fa-thumbs-up" > {{$idee2->like}}</i>
                                                            <i class="fa fa-thumbs-down" >  {{$idee2->dislike}}</i> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                               
                                               
                                               
                                            </div>
                                           
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>Covid-19 signalements </h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-eye"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message__noti">
                                                <p>Vous avez
                                                    <span>{{$signals1}}</span>

                                                    Signalement(s) 
                                                </p>
                                            </div>
                                            <div class="au-message-list">
                                                @foreach ($signals2 as $signal2)
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="{{ asset('images/icon/avatar-03.jpg') }}" alt="Nicholas Martinez">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Catégorie :  {{$signal2->label}}</h5>
                                                                <p>{{$signal2->contenu}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>{{ Carbon\Carbon::parse($signal2->created_at)->subHours(1)->diffForHumans() }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            
                                            
                                              
                                            </div>
                                       
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
@endsection
