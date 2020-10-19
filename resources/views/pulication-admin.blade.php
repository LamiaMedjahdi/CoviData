


@extends('layouts.admin')

@section('content')

<div class="col-md-12">
								<div class="card">
									<div class="card-header">
                                    <h4> {{$postdetail->titre}}</h4>
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
													<p>{{$postdetail->contenu}}</p>
                                                </div>
                                                 
                                                   
													
												<div class="tab-pane fade" id="custom-nav-profile" role="tabpanel"
													aria-labelledby="custom-nav-profile-tab">
													<div class="card">
														<div class="card-body">
															<div class="mx-auto d-block">
                                                                @if ($postdetail->image)
                                                                    <img class="mx-auto d-block" width="200px;" height="200px;"
																	src="../images/idees/{{$postdetail->image}}" >
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
                               
                                     <a href="{{ url('/supprimer-publication/'.$postdetail->id) }}" type="button" class="btn btn-danger">Supprimer</a>
                               
                               
                              
							</div>
							<br>

							



{{-- modifier l'idée							 --}}


					
            

@endsection                                                                