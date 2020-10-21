





@extends('layouts.admin')

@section('content')

<div class="section__content section__content--p30">
<div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Statistiques du : {{ date('d F Y', strtotime(Carbon\Carbon::now()->toDateTimeString()))}} </h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                
                                                <th>Wilaya</th>
                                                <th class="text-right">Nombre de cas</th>
                                                <th class="text-right">Nombre de décés</th>
                                                <th class="text-right">Nombre de guérisons</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                                @foreach ($todays as $today)
                                                <tr>
                                                <td>{{$today->date}}</td>
                                                
                                                <td>{{$today->wilaya}}</td>
                                                <td class="text-right">{{$today->nbrmal}}</td>
                                                <td class="text-right">{{$today->nbrgue}}</td>
                                                <td class="text-right">{{$today->nbrmort}}</td>
                                                
                                                </tr>
                                            @endforeach
                                           
                                            
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Liste des statistiques  </h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                
                                                <th>Wilaya</th>
                                                <th class="text-right">Nombre de cas</th>
                                                <th class="text-right">Nombre de décés</th>
                                                <th class="text-right">Nombre de guérisons</th>
                                                <th>Modifier/supprimer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                                @foreach ($stats as $stat)
                                                <tr>
                                                <td>{{$stat->date}}</td>
                                                
                                                <td>{{$stat->wilaya}}</td>
                                                <td class="text-right">{{$stat->nbrmal}}</td>
                                                <td class="text-right">{{$stat->nbrgue}}</td>
                                                <td class="text-right">{{$stat->nbrmort}}</td>
                                                <td>
                                                     <div class="table-data-feature">
                                                         <form action="/modifier-statistique" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="text" name="statid" hidden value="{{$stat->id}}" id="">
                                                        <button  class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                         </form>
                                                         <form action="/supprimer-statistique" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="text" name="statid" hidden value="{{$stat->id}}" id="">
                                                        <button  class="item" data-toggle="tooltip" data-placement="top" title="Supprimer">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                         </form>


                                                    </div>
                                                </td>
                                                </tr>
                                            @endforeach
                                           
                                            
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                        </div>

@endsection                              