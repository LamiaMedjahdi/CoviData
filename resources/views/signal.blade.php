@extends('layouts.headerfooter')

@section('body')

<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Signalements</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Acceuil</a></li>
                <li class="active"><a href="{{ url('/signals') }}">Signalements</a></li>
                <li class="active">Signalement par : {{ $citoyen->nom}}</li>
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
                
      
              <div class="blog_section">
            <div class="blog_feature_img"> <img class="img-responsive" src="../images/signals/{{$signal->image}}" alt="#"> </div>
            <div class="blog_feature_cantant">
                <p class="blog_head">Catégorie : {{ $categorie->label}}</p>
              
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> <a href="{{ url('/signal/'.$citoyen->id) }}"> {{$citoyen->nom}}</a> </li>
                  
                  
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> @php echo date('d F Y', strtotime($signal->created_at)); @endphp </li>
                </ul>
              </div>
              <p>{{ $signal->contenu }} </p>
              <div class="bottom_info">
          
               
              </div>
            </div>
          </div>
        
             
   
         
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>Rechercher</h4>
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                <input class="form-control" placeholder="Search" type="text">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> </div>
            </div>
          </div>
          {{-- <div class="side_bar_blog">
            <h4>Autheur</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div> --}}
          
          
              
       
          
        </div>
      </div>
    </div>
  </div>
</div>
    
@endsection