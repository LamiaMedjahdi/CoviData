@extends('layouts.admin')

@section('content')

 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-alt-text"></i>Boite de récéption</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Vous avez {{$messagesnonluscount}} message(s) non lus</p>
                                        </div>
                                        @foreach ($messagesnonlus as $message)
                                             <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <span class="time">{{$message->objet}}{{$message->id}}</span>
                                                    <h5 class="task">
                                                        <a href="{{ url('/message/'.$message->id) }}" >{{ \Illuminate\Support\Str::limit($message->contenu, 100) }}</a>
                                                    </h5>
                                                    <span class="time">{{$message->created_at}}</span>
                                                    <span class="time"> - Non lu</span>
                                                </div>
                                            </div>
                                        @endforeach
                                        @foreach ($messageslus as $messagel)
                                             <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <span class="time">{{$messagel->objet}}</span>
                                                    <h5 class="task">
                                                        <a href="{{ url('/message/'.$messagel->id) }}">{{ \Illuminate\Support\Str::limit($messagel->contenu, 100) }}</a>
                                                    </h5>
                                                    <span class="time">{{$messagel->created_at}}</span>
                                                    <span class="time"> - lu</span>
                                                </div>
                                            </div>
                                        @endforeach
                                   </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
@endsection
