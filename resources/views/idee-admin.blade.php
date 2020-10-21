


@extends('layouts.admin')

@section('content')

<div class="col-md-12">
								<div class="card">
									<div class="card-header">
                                    <h4>Par : {{$citoyenidea->nom}} {{$citoyenidea->prenom}}</h4>
									</div>
									<div class="card-body">
										<div class="custom-tab">
		
											<nav>
												<div class="nav nav-tabs" id="nav-tab" role="tablist">
													<a class="nav-item nav-link active" id="custom-nav-home-tab"
														data-toggle="tab" href="#custom-nav-home" role="tab"
														aria-controls="custom-nav-home" aria-selected="true">Contenu</a>
													<a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab"
														href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile"
														aria-selected="false">Image</a>
		
												</div>
											</nav>
											<div class="tab-content pl-3 pt-2" id="nav-tabContent">
												<div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel"
													aria-labelledby="custom-nav-home-tab">
													<p>{{$idee->contenu}}</p>
                                                </div>
                                                 
                                                       {{$likeCount}} <i class="fa fa-thumbs-up"></i>
                                                      {{$dislikeCount}}  <i class="fa fa-thumbs-down"></i>
													
												<div class="tab-pane fade" id="custom-nav-profile" role="tabpanel"
													aria-labelledby="custom-nav-profile-tab">
													<div class="card">
														<div class="card-body">
															<div class="mx-auto d-block">
                                                                @if ($idee->image)
                                                                    <img class="mx-auto d-block" width="200px;" height="200px;"
																	src="../images/idees/{{$idee->image}}" >
                                                                @endif
																
																
															</div>
															<hr>
															<div class="card-text text-sm-center">
															
															</div>
                                                        </div>
                                                        
		
													</div>
												</div>
												<div class="tab-pane fade" id="custom-nav-contact" role="tabpanel"
													aria-labelledby="custom-nav-contact-tab">
		
												</div>
											</div>
		
										</div>
									</div>
                                </div>
                                <a href="{{ url('/idees-admin') }}" type="button" class="btn btn-primary">Retourner aux idées</a>
                               @if ($idee->etat==0)
                                     <a href="{{ url('/approuver-idee/'.$idee->id) }}" type="button" class="btn btn-success">Approuver</a>
                                <a href="{{ url('/refuser-idee/'.$idee->id) }}" type="button" class="btn btn-danger">Refuser</a>
                               @endif
                              
							</div>
							<br>

							@if ($idee->cit_id==Auth::user()->id)

							<div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Modifier cette idée</div>
                                    <div class="card-body card-block">
                                        <form action="/modifier-idee" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-lightbulb-o"></i>
													</div>
													 <input type="text" hidden name="ideeid" hidden value="{{$idee->id}}"  class="form-control-file">
                                                      <input type="text" hidden name="imageancienne" value="{{$idee->image}}"  class="form-control-file">
													<input type="text" id="username" name="titre" value="{{$idee->titre}}" placeholder="Titre de l'idée" class="form-control">
													 
                                                    <input type="text"  id="username" name="cit_id" hidden value="{{Auth::user()->id}}" placeholder="Nom" class="form-control">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-align-left"></i>
													</div>
													<textarea   id="c" name="contenu" value="{{$idee->contenu}}" placeholder="Nom" class="form-control">{{$idee->contenu}} </textarea>
                                                    <input type="text"  id="username" name="cit_id" hidden value="{{Auth::user()->id}}" placeholder="Nom" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-list-alt"></i>
                                                    </div>
                                                   <select name="categorie" id="selectLg" class="form-control-lg form-control">
                                                        
                                                        @foreach ($categories as $categorie)
                                                   <option value="{{$categorie->id}}" selected >{{$categorie->label}}</option>
                                                        @endforeach
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                               
                                            </div>
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <div class="image">
                                                    <a href="#">
                                                        <img src="../images/idees/{{$idee->image}}" alt="{{$idee->image}}" width="80px;" height="80px;" />
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

							@endif



{{-- modifier l'idée							 --}}


					
            

@endsection                                                                