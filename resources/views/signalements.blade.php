@extends('layouts.admin')

@section('content')

<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						
						<div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Liste des signalements</h3>
                               
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>Posté par : </th>
												<th>Catégorie</th>
                                                <th>Contenu</th>
                                                <th>Wilaya</th>
                                                <th>Aperçu</th>
                                            	<th>date</th>    
                                              
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($signals->count()>0)
                                                
                                            
                                            @foreach ($signals as $signal)
                                                <tr class="tr-shadow">
                                               
                                                <td>{{$signal->nomcit}} {{$signal->prenom}}</td>
                                                <td>
                                                     <span class="block-email">{{$signal->label}}</span>
                                                </td>
                                                <td class="desc"><a href="{{ url('/signalement/'.$signal->id) }}">{{ \Illuminate\Support\Str::limit($signal->contenu, 20) }}</a></td>
                                                <td>{{$signal->wilaya}}</td>
                                              
                                               
                                                <td>
                                                    <div class="image">
                                                        @if ($signal->image)
                                                               <img src="../images/signals/{{$signal->image}}" width="50px" height="50px" />
                                                        @endif
                                                         
                                                        </div>
                                                </td>
                                                <p hidden> {{Carbon\Carbon::setLocale( 'fr')}}.</p>
                                                <td>{{ Carbon\Carbon::parse($signal->created_at)->subHours(1)->diffForHumans() }}</td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            @endforeach
                                            
                                            @else

                                             <div class="alert alert-primary" role="alert">
                                                <h4 class="alert-heading"></h4>
                                                <p>  Vous n'avez contribué avec aucun signalement pour le moment !</p>
                                                <hr>
                                                
                                            </div>
                                            @endif
											
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