
@extends('layouts.admin')

@section('content')

<div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Ajouter un nouveau tag de publication</div>
                                    <div class="card-body card-block">
                                        <form action="/ajouter-tag" method="post" enctype="multipart/form-data">
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
                                              @if(session()->has('message'))

                                            <div class="alert alert-danger">
                                                    <ul>
                                                        
                                                            <li>{{ session()->get('message') }}</li>
                                                        
                                                    </ul>
                                                </div>
                                            
                                            @endif
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-text-width"></i>
                                                    </div>
                                                    <input type="text" id="username" name="tag"  placeholder="Ajoutez un tag de publication" class="form-control">
                                                </div>
                                            </div>
                                            
  

                                           
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Ajouter</button>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Ajouter une nouvelle profession</div>
                                    <div class="card-body card-block">
                                        <form action="/ajouter-profession" method="post" enctype="multipart/form-data">
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
                                            @if(session()->has('message'))

                                            <div class="alert alert-danger">
                                                    <ul>
                                                        
                                                            <li>{{ session()->get('message') }}</li>
                                                        
                                                    </ul>
                                                </div>
                                            
                                            @endif
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-text-width"></i>
                                                    </div>
                                                    <input type="text" id="username" name="profession"  placeholder="Ajoutez une nouvelle profession" class="form-control">
                                                </div>
                                            </div>
                                            
  

                                           
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Ajouter</button>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>

                             <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Ajouter une nouvelle source d'information</div>
                                    <div class="card-body card-block">
                                        <form action="/ajouter-source" method="post" enctype="multipart/form-data">
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
                                            @if(session()->has('message'))

                                            <div class="alert alert-danger">
                                                    <ul>
                                                        
                                                            <li>{{ session()->get('message') }}</li>
                                                        
                                                    </ul>
                                                </div>
                                            
                                            @endif
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-text-width"></i>
                                                    </div>
                                                    <input type="text" id="username" name="source"  placeholder="Ajoutez une nouvelle source d'informations" class="form-control">
                                                </div>
                                            </div>
                                            
  

                                           
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Ajouter</button>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
<div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Ajouter une nouvelle publication</div>
                                    <div class="card-body card-block">
                                        <form action="/ajouter-pub" method="post" enctype="multipart/form-data">
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
                                                        <i class="fa fa-text-width"></i>
                                                    </div>
                                                    <input type="text" id="username" name="titre"  placeholder="Titre de la publication" class="form-control">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-keyboard-o"></i>
                                                    </div>
                                                    <textarea type="text" id="username" name="contenu"  placeholder="Contenu de la publication" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-link"></i>
                                                    </div>
                                                    <input type="text" id="email" name="lien"   placeholder="lien de la publication d'origine" class="form-control">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                 <label for="">Maladie concernée</label>
                                                <div class="input-group">
                                                    
                                                    <div class="input-group-addon">
                                                        
                                                        <i class="fa fa-heartbeat r"></i>
                                                        
                                                    </div>
                                                   <select name="maladie" id="selectLg" class="form-control-lg form-control">
                                                        
                                                        @foreach ($maladies as $maladie)
                                                   <option value="{{$maladie->id}}" selected >{{$maladie->nom}}</option>
                                                        @endforeach
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                 <label for="">Profession concernée</label>
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
                                                 <label for="">Source de l'information</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-hand-o-right"></i>
                                                        
                                                    </div>
                                                    
                                                   <select name="source" id="selectLg" class="form-control-lg form-control">
                                                        
                                                        @foreach ($sources as $source)
                                                   <option value="{{$source->id}}" selected >{{$source->nom}}</option>
                                                        @endforeach
                                                        
                                                     
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Lieu concerné</label>
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
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Tags</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        @foreach ($tags as $tag)
                                                             <label for="inline-checkbox1" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox1" name="tags[]" value="{{$tag->id}}" class="form-check-input">{{$tag->nom}} -
                                                        </label>
                                                        @endforeach
                                                       
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            
                                             <div class="form-group">
                                                
                                                    </div>
                                                  
                                                   <input type="file" name="image" id="file-input"  class="form-control-file">
                                                </div>
                                            </div>
  

                                           
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Ajouter</button>
                                            </div>
                                        </form>
                                        <div class="form-actions form-group">
                                                <a href="{{ url('/publications-admin') }}" class="btn btn-success btn-sm">Retourner aux publications</a>
                                            </div>
                                    </div>
                                </div>
                            </div>




 @endsection
    