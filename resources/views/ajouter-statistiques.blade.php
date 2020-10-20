
@extends('layouts.admin')

@section('content')

<div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Ajouter de nouvelles statistiques</div>
                                    <div class="card-body card-block">
                                        <form action="/ajouter-stat" method="post" enctype="multipart/form-data">
                                            @csrf
                                         
                                             @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-plus-square "></i>
                                                    </div>
                                                    <input type="number" id="username" name="nbrcas"  placeholder="Ajoutez une nouvelle entrée de cas du covid" class="form-control">
                                                </div>
                                                <br>
                                                 <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-ambulance "></i>
                                                    </div>
                                                    <input type="number" id="username" name="nbrmorts"  placeholder="Ajoutez une nouvelle entrée du nombre de personnes décédés du covid" class="form-control">
                                                </div>
                                                <br>
                                                 <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-heart "></i>
                                                    </div>
                                                    <input type="number" id="username" name="nbrgueris"  placeholder="Ajoutez une nouvelle entrée du nombre de personnes guéris du covid" class="form-control">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                   <select name="wilaya" id="selectLg" class="form-control-lg form-control">
                                                        
                                                        @foreach ($wilayas as $wilaya)
                                                   <option value="{{$wilaya->id}}" selected >{{$wilaya->nom}}</option>
                                                        @endforeach
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            
  

                                           
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Ajouter</button>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>





 @endsection
    