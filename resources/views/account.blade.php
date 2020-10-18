
@extends('layouts.admin')

@section('content')



<div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Modifier les coordonnées du compte</div>
                                    <div class="card-body card-block">
                                        <form action="/modifier-compte" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                      <input type="text" hidden name="imageancienne" value="{{Auth::user()->image}}"  class="form-control-file">
                                                    <input type="text" id="username" name="nom" value="{{Auth::user()->nom}}" placeholder="Nom" class="form-control">
                                                    <input type="text" hidden id="username" name="userid" value="{{Auth::user()->id}}" placeholder="Nom" class="form-control">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="username" name="prenom" value="{{Auth::user()->prenom}}" placeholder="Prenom" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="email" id="email" name="email" value="{{Auth::user()->email}}" disabled placeholder="Email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                   <select name="commune" id="selectLg" class="form-control-lg form-control">
                                                        
                                                        @foreach ($communes as $commune)
                                                   <option value="{{$commune->id}}" selected >{{$commune->nom}}</option>
                                                        @endforeach
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                   <select name="profession" id="selectLg" class="form-control-lg form-control">
                                                        
                                                        @foreach ($professions as $profession)
                                                   <option value="{{$profession->id}}" selected >{{$profession->nom}}</option>
                                                        @endforeach
                                                        
                                                     
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <div class="image">
                                                    <a href="#">
                                                        <img src="../images/users/{{Auth::user()->image}}" alt="{{Auth::user()->nom}} {{Auth::user()->prenom}}" width="80px;" height="80px;" />
                                                    </a>
                                                </div>
                                                    </div>
                                                  
                                                   <input type="file" name="image" id="file-input"  class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Modifier</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>




 @endsection
    