


@extends('layouts.admin')

@section('content')

<div class="col-md-12">
								<div class="card">
									<div class="card-header">
                                    <h4>Par : {{$citoyensign->nom}} {{$citoyensign->prenom}}</h4>
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
													<p>{{$signal->contenu}}</p>
												</div>
												<div class="tab-pane fade" id="custom-nav-profile" role="tabpanel"
													aria-labelledby="custom-nav-profile-tab">
													<div class="card">
														<div class="card-body">
															<div class="mx-auto d-block">
                                                                @if ($signal->image)
                                                                    <img class="rounded-circle mx-auto d-block"
																	src="../images/signals/{{$signal->image}}" >
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
                                <a href="{{ url('/signalements') }}" type="button" class="btn btn-primary">Retourner aux signalements</a>
                               @if ($signal->etat==0)
                                     <a href="{{ url('/approuver-signal/'.$signal->id) }}" type="button" class="btn btn-success">Approuver</a>
                                <a href="{{ url('/refuser-signal/'.$signal->id) }}" type="button" class="btn btn-danger">Refuser</a>
                               @endif
                              
							</div>
							<br>
{{-- formulaire de modification du signalement  --}}
							@if ($signal->cit_id==Auth::user()->id)

							<div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Modifier ce signalement</div>
                                    <div class="card-body card-block">
                                        <form action="/modifier-signal" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <div class="input-group">
                                                   
													 <input type="text" hidden name="signalid" hidden value="{{$signal->id}}"  class="form-control-file">
                                                      <input type="text" hidden name="imageancienne" value="{{$signal->image}}"  class="form-control-file">
												
													 
                                                    <input type="text"  id="username" name="cit_id" hidden value="{{Auth::user()->id}}" placeholder="Nom" class="form-control">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-align-left"></i>
													</div>
													
													<textarea   id="c" name="contenu"  placeholder="Nom" class="form-control">{{$signal->contenu}} </textarea>
                                                    
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
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <div class="image">
                                                    <a href="#">
                                                        <img src="../images/signals/{{$signal->image}}" alt="{{$signal->image}}" width="80px;" height="80px;" />
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
            

@endsection              
                                                  