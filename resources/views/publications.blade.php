@extends('layouts.headerfooter')

@section('body')
@if(session()->has('message'))

<script>
  alert("<?php echo session()->get('message'); ?>")
</script>
  
@endif
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Publications </h1>
              <ol class="breadcrumb">
                <li><a href="{{ url('/acceuil') }}">Acceuil</a></li>
                <li class="active">Publications</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 blog_list">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
        <div class="full">
         @auth

         @foreach ($postcondition as $postc)
              <div class="blog_section">
            <div class="blog_feature_img"> <img class="img-responsive" src="{{ asset('images/it_service/' . $postc->image) }}" alt="#"> </div>
            <div class="blog_feature_cantant">
              <p class="blog_head">{{ $postc->titre}}</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Marketing</li>
                  <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>@php echo date('d F Y', strtotime($postc->created_at)); @endphp</li>
                </ul>
              </div>
              <p>{{ \Illuminate\Support\Str::limit($postc->contenu, 150) }}. </p>
              <div class="bottom_info">
                <div class="pull-left"><a class="btn sqaure_bt" href="{{ url('/publication/'.$postc->id) }}">Lire l'article<i class="fa fa-angle-right"></i></a></div>
                <?php
                  $userid=Auth::user()->id;
                ?>
                  <div class="pull-left" style="padding-left: 20px;"><a class="btn sqaure_bt" href="{{ url('/favoris/'.$postc->id.'/'.$userid) }}">ajouter aux favoris<i class="fa fa-angle-right"></i></a></div>
                <div class="pull-right">
                  <div class="shr">Partager: </div>
                  <div class="social_icon">
                  <div class="addthis_inline_share_toolbox"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         @endforeach
             
         @endauth
    
       
         {{-- @foreach ($ids1 as $id)
            <p>
             {{ $ids }}

         </p>  
         @endforeach --}}

         {{-- @foreach ($ids2 as $id2)
            <p>
             {{ $id2->pro_id }}

         </p>  
         @endforeach --}}

         

           @guest

         @foreach ($allposts as $post)
              <div class="blog_section">
            <div class="blog_feature_img"> <img class="img-responsive" src="{{ asset('images/it_service/' . $post->image) }}" alt="#"> </div>
            <div class="blog_feature_cantant">
              <p class="blog_head">{{ $post->titre}}</p>
              <div class="post_info">
                <ul>
                  
                  
                  <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> @php echo date('d F Y', strtotime($post->created_at)); @endphp </li>
                </ul>
              </div>
              <p>{{ \Illuminate\Support\Str::limit($post->contenu, 150) }} </p>
              <div class="bottom_info">
                <div class="pull-left"><a class="btn sqaure_bt" href="{{ url('/publication/'.$post->id) }}">Lire l'article<i class="fa fa-angle-right"></i></a></div>
               
              </div>
            </div>
          </div>
         @endforeach
             
         @endguest 
         
          <div class="center">
            <ul class="pagination style_1">
              <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="it_blog_grid.html">2</a></li>
              <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>Rechercher une publication</h4>
            <div class="side_bar_search">
             <form action="/informations-search" method="POST">
                @csrf
              <div class="input-group stylish-input-group">
                <input name="recherche" class="form-control" placeholder="Search" type="text">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> </div>
              </form>
            </div>
          </div>
          {{-- <div class="side_bar_blog">
            <h4>Autheur</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div> --}}
          
         
          <div class="side_bar_blog">
            <h4>TAG</h4>
            <div class="tags">
              <ul>
                @foreach ($tags as $tag)
                   <li><a href="{{ url('/pubstag/'.$tag->id) }}">{{$tag->nom}}</a></li> 
                @endforeach
                
               
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
    
@endsection