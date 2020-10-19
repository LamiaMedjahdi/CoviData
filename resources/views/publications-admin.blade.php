


@extends('layouts.admin')

@section('content')
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                             @foreach ($publications as $publication)
                                 <div class="col-md-4">
                                <div class="card">
                                    @if ($publication->image)
                                          <img class="card-img-top" src="../images/publications/{{$publication->image}}" alt="Card image cap" width="640px;" height="960px"> 
                                    @endif
                                 
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">{{$publication->titre}}</h4>
                                        <p class="card-text">{{$publication->contenu}}
                                        </p>
                                        <hr>
                                         <p class="card-text">Wilaya : {{$publication->nom}}
                                        </p>
                                          <hr>
                                         <p class="card-text">Profession : {{$publication->profession}}
                                        </p>
                                         
                                         <hr>
                                         <p class="card-text">Maladie : {{$publication->maladie}}
                                        </p>
                                         <hr>
                                         <p class="card-text">Source : {{$publication->source}}
                                        </p>
                                         <hr>
                                         <p > <div class="form-actions form-group">
                                         
                                             <form action="/modifier-publication" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="text" name="pubid" hidden value="{{$publication->id}}" id="">
                                                <button  type="submit" class="btn btn-success btn-sm">Modifier</button>
                                                </form>
                                               <form action="/supprimer-pub" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="text" name="pubid" hidden value="{{$publication->id}}" id="">
                                                <br>
                                                <button  type="submit" class="btn btn-danger btn-sm">supprimer</button>
                                               </form>
                                            </div>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                            
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
            

@endsection              
                                                  