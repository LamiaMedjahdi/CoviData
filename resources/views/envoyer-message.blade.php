@extends('layouts.admin')

@section('content')

  <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>Enovoyer un message à </h3>
                                       
                                    </div>
                                    <div class="au-inbox-wrap">
                                        <div class="au-chat au-chat--border">
                                            
                                                
                                               <div class="au-chat-textfield">
                                            @if (Auth::user()->roles==1)
                                                <form action="/send-message" method="POST" class="au-form-icon">
                                                    @csrf
                                                    <div class="row form-group">
                                                
                                                <div class="col-12">
                                                    <label for="user"> selectionnez un utilisateur </label>
                                                    <select name="userid" id="select" class="form-control">
                                                        
                                                        @foreach ($users as $user)
                                                            <option value="{{$user->id}}">{{$user->nom}} {{$user->prenom}}</option>
                                                        @endforeach
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                                    <input class="au-input au-input--full au-input--h65" name="message" type="text" placeholder="Ecrivez votre message   ">
                                               
                                                       <input class="au-input au-input--full au-input--h65" hidden name="senderid" value="{{Auth::user()->id}}" name="message" type="text" >
                                               <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Envoyer
                                                    </button>
                                                
                                                </div>
                                                      
                                                </form>
                                            @endif
                                            
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endsection
