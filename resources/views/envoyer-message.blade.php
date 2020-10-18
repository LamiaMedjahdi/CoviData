@extends('layouts.admin')

@section('content')

  <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>Enovoyer un message à {{$iduser}} </h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap">
                                        <div class="au-chat au-chat--border">
                                            
                                                
                                               <div class="au-chat-textfield">
                                            @if (Auth::user()->roles==1)
                                                <form action="/send-message" method="POST" class="au-form-icon">
                                                    @csrf
                                                    <input class="au-input au-input--full au-input--h65" name="message" type="text" placeholder="Ecrivez un message à  ">
                                                <input class="au-input au-input--full au-input--h65" hidden name="userid" value="iduser" name="message" type="text" >
                                                       <input class="au-input au-input--full au-input--h65" hidden name="senderid" value="{{Auth::user()->id}}" name="message" type="text" >
                                                <button class="au-input-icon" type="submit">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                </form>
                                            @endif
                                            
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endsection
