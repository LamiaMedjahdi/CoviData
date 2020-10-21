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
                <li class="active">Signalement par : {{ $citoyensign->nom}}</li>
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
            <div class="blog_feature_img"> <img class="img-responsive" width="400" height="350" src="../images/signals/{{$signal->image}}" alt="#"> </div>
            <div class="blog_feature_cantant">
                <p class="blog_head">Catégorie : {{ $categorie->label}}</p>
              
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> <a href="{{ url('/signal/'.$citoyensign->id) }}"> {{$citoyensign->nom}}</a> </li>
                  
                  
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> @php echo date('d F Y', strtotime($signal->created_at)); @endphp </li>
                </ul>
              </div>
              <p>{{ $signal->contenu }} </p>
              <div class="bottom_info">

                      <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
                
          <a href="{{ url('/contributions/'.$citoyensign->nom.'/'.$citoyensign->id) }}"> Voir toutes les contributions de : {{$citoyensign->nom}}</a>
               
              </div>
            </div>
          </div>
        
             
   
         
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>Localisation du signalement</h4>
            <div class="side_bar_search">
             <iframe width="400" height="300" src="http://maps.google.com/maps?q={{$signal->localisation}}  &output=embed"></iframe>
            </div>
          </div>
           <div class="side_bar_blog">
            <h4>Rechercher parmi les signalements </h4>
            <div class="side_bar_search">
              <form action="/Signal-search" method="POST">
                @csrf
              <div class="input-group stylish-input-group">
                <input name="recherche" class="form-control" placeholder="Search" type="text">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> </div>
              </form>
            </div>
          
          
          
              
       
          
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f87423722e35b06"></script>

    
@endsection