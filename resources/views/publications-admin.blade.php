@extends('layouts.admin')

@section('content')

<div class="main-content">
				


             <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Titre</th>
                                                
                                                <th>Maladie</th>
                                                <th class="text-right">Profession</th>
                                                <th class="text-right">Contenu</th>
                                                <th class="text-right">Wilaya</th>
                                                <th class="text-right">Aperçu</th>
                                                <th class="text-right">Source</th>
                                                <th class="text-right">Lien</th>
                                                <th class="text-right">Date</th>
                                                <th class="text-right">Modifier / supprimer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @if ($publications->count()>0)
                                                
                                            
                                            @foreach ($publications as $publication)
                                            <tr>
                                                <td>{{$publication->titre}}</td>
                                                
                                                <td>{{$publication->maladie}}</td>
                                                <td>{{$publication->profession}}</td>
                                                <td><a href="{{ url('/publication-admin/'.$publication->id) }}">{{ \Illuminate\Support\Str::limit($publication->contenu, 20) }}</a></td>
                                                <td>{{$publication->nom}}</td>
                                                <td>
                                                     @if ($publication->image)
                                                               <img src="../images/signals/{{$publication->image}}" width="50px" height="50px" />
                                                     @endif
                                                </td>
                                            <td class="text-right">{{$publication->source}}</td>
                                                <td class="text-right">{{$publication->lien}}</td>
                                                <td class="text-right">{{ Carbon\Carbon::parse($publication->created_at)->subHours(1)->diffForHumans() }}</td>
                                                <td class="text-right">
                                                    <a href="{{ url('/modifier-publication/'.$publication->id) }}"><button type="button" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o"></i></button></a>
                                           <a href="{{ url('/supprimer-publication/'.$publication->id) }}"> <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-remove"></i></button></a>
                                                </td>
                                            </tr>
                                          @endforeach
                                          @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                      
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
            

@endsection            