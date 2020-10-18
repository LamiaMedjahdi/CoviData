@extends('layouts.admin')

@section('content')

<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						
						<div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Liste des idées</h3>
                               
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>Posté par : </th>
												<th>Catégorie</th>
                                                <th>Contenu</th>
                                                <th>Aperçu</th>
                                            	<th>date</th>    
                                              
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($idees as $idee)
                                                <tr class="tr-shadow">
                                               
                                                <td>{{$idee->nomcit}} {{$idee->prenom}}</td>
                                                <td>
                                                     <span class="block-email">{{$idee->label}}</span>
                                                </td>
                                                <td class="desc"><a href="{{ url('/idee-admin/'.$idee->id) }}">{{ \Illuminate\Support\Str::limit($idee->contenu, 20) }}</a></td>
                                                
                                              
                                               
                                                <td>
                                                    <div class="image">
                                                        @if ($idee->image)
                                                               <img src="../images/idees/{{$idee->image}}" width="50px" height="50px" />
                                                        @endif
                                                         
                                                        </div>
                                                </td>
                                                <p hidden> {{Carbon\Carbon::setLocale( 'fr')}}.</p>
                                                <td>{{ Carbon\Carbon::parse($idee->created_at)->subHours(1)->diffForHumans() }}</td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            @endforeach
											
											
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
							
							<!-- /# column -->
						</div>
						
					</div>
				
				</div>
				
            </div>
            

@endsection            