
@extends('layouts.admin')

@section('content')



<div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Modifier la publication</div>
                                    <div class="card-body card-block">
                                        <form action="/modifstat" method="post" enctype="multipart/form-data">
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
                                                        <i class="fa fa-plus-square"></i>
													</div>
                                                <input type="text" id="username" name="statid" hidden value="{{$statdetail->id}}"  class="form-control">
												<input type="text" id="username" name="malade" value="{{$statdetail->nbrmal}}"  placeholder="Nombre de cas " class="form-control">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-heart"></i>
													</div>
													
												<input type="text" id="username" name="gueris" value="{{$statdetail->nbrgue}}"  placeholder="Nombre de guérisons " class="form-control">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-ambulance"></i>
													</div>
													
												<input type="text" id="username" name="mort" value="{{$statdetail->nbrmort}}"  placeholder="Nombre de morts" class="form-control">
                                                </div>
                                            </div>
                                             {{-- <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-map-marker"></i>
													</div>
													
												<input type="text" id="username" disabled  value="{{$nom}}"  placeholder="Nombre de morts" class="form-control">
                                                </div>
                                            </div> --}}
                                            
                                        
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                   <select name="wilaya" id="selectLg" class="form-control-lg form-control">

                                                    
                                                        @foreach ($wilayas as $wilaya)
                                                    <option value="{{$wilaya->id}}"  >{{$wilaya->nom}}</option>
                                                        @endforeach
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            
											 <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Modifier</button>
                                            </div>
                                        </form>
                                        <div class="form-actions form-group">
                                                <a href="{{ url('/statistiques') }}" class="btn btn-success btn-sm">Retourner aux statistiques</a>
                                            </div>
                                    </div>
                                </div>
                            </div>




 @endsection
    