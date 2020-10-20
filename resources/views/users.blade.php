@extends('layouts.admin')

@section('content')



@if ($users->count()>0)

<div class="col-md-12">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30" style="text-transform:none;">
                                        <i class="zmdi zmdi-account-calendar"></i>Liste des utilisateurs du site :</h3>
                                   
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                   
                                                    <td>nom</td>
                                                    <td>prénom</td>
                                                    <td>email</td>
                                                    <td>aperçu photo de profil</td>
                                                    <td>contacter via email</td>
                                                    
                                                    <td>Attribuer/retirer un role</td>
                                                    
                                                    <td></td>
                                                </tr>
                                            </thead>

                                            @foreach ($users as $res)
                                               <tbody>
                                            
                                                <tr>
                                                    <td>
                                                        <h6>{{$res->nom}}</h6>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>{{$res->prenom}}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>{{$res->email}}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                         <div class="image">
                                                            <img src="{{ asset('images/icon/avatar-01.jpg') }}" width="50px" height="50px" alt="John Doe" />
                                                        </div>
                                                        
                                                    </td>
                                                          <td>
                                                    <a href="{{ url('/envoyer-message') }}"><span class="role admin">contacter</span></a>
                                                    </td>
                                                  
                                                    @if ($res->roles==0)
                                                        
                                                       <td>
                                                      <a href="{{ url('/make-admin/'.$res->id) }}">   <span class="role admin" ><i class="zmdi zmdi-swap"> Administrateur</i></span></a>
                                                    </td> 
                                                    @else
                                                    <td>
                                                      <a href="{{ url('/remove-admin/'.$res->id) }}"> <span class="role admin"><i class="zmdi zmdi-swap"> Utilisateur</i></span></a>
                                                       
                                                    </td>
                                                        
                                                    @endif
                                                    </tr>
                                            </tbody>
                                            @endforeach
                                            
                                            
                                        </table>
                                    </div>
                                   
                                </div>
                                <!-- END USER DATA-->
                            </div>
    
@else
                                    <div style="padding-left: 50px;">
                                          <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show" >
											<span class="badge badge-pill badge-danger">Oups !!!</span>
                                            Il n y a aucun utilisateur inscrit pour le moment !
                                            
											
										</div>
                                    </div>
                                      

@endif


 @endsection
