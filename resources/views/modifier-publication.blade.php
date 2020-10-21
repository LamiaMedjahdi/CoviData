
@extends('layouts.admin')

@section('content')



<div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Modifier la publication</div>
                                    <div class="card-body card-block">
                                        <form action="/modif-pub" method="post" enctype="multipart/form-data">
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
													<input type="text" id="username" name="pubid" hidden value="{{$postdetail->id}}"  class="form-control">
												<input type="text" id="username" name="titre" value="{{$postdetail->titre}}"  placeholder="Titre de la publication" class="form-control">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-keyboard-o"></i>
                                                    </div>
                                                    <textarea type="text" id="username" name="contenu" value="" placeholder="Contenu de la publication" class="form-control">{{$postdetail->contenu}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-link "></i>
                                                    </div>
                                                    <input type="text" id="email" name="lien" value="{{$postdetail->lien}}"   placeholder="lien de la publication d'origine" class="form-control">
                                                </div>
                                            </div>
                                             <div class="form-group">
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
                                                        <i class="fa fa-hand-o-right "></i>
                                                    </div>
                                                   <select name="source" id="selectLg" class="form-control-lg form-control">
                                                        
                                                        @foreach ($sources as $source)
                                                   <option value="{{$source->id}}" selected >{{$source->nom}}</option>
                                                        @endforeach
                                                        
                                                     
                                                    </select>
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
                                            
											 <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <div class="image">
                                                    <a href="#">
														<input type="type" name="ancienneimage" value="{{$postdetail->image}}" hidden id="file-input"  class="form-control-file">
                                                        <img src="../images/publications/{{$postdetail->image}}" alt="{{$postdetail->image}}" width="80px;" height="80px;" />
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
                                        <div class="form-actions form-group">
                                                <a href="{{ url('/publications-admin') }}" class="btn btn-success btn-sm">Retourner aux publications</a>
                                            </div>
                                    </div>
                                </div>
                            </div>




 @endsection
    