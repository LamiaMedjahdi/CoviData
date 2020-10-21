@extends('layouts.headerfooter')

@section('body')



<!-- end header -->
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Contributions</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Acceuil</a></li>
                <li class="active">Contributions de : </li>
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
{{-- <div class="section padding_layout_1 service_list">
  <div class="container">
       <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Idées  </h2>
            <p class="large">Liste de toutes les idées approuvées exposées par : </p>
          </div>
        </div>
      </div>
    </div> --}}
    
{{--   --}}
      

<div class="section padding_layout_1 blog_grid">
  <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Idées  </h2>
            <p class="large">Liste de toutes les idées approuvées exposées par :  {{$nom}}</p>
          </div>
        </div>
    <div class="row">
      @foreach ($idees as $idee)
           <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="full">
         
          <div class="blog_section">
            <div class="blog_feature_cantant theme_color_bg white_fonts">
              <p class="blog_head">{{$idee->titre}}</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> {{$nom}}</li>
                  
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ date('d F Y', strtotime($idee->created_at))}}</li>
                </ul>
              </div>
              
              <p>{{ \Illuminate\Support\Str::limit($idee->contenu, 50) }} </p>
              <div class="bottom_info">
                <div class="pull-left"><a class="read_more" href="{{ url('/idee/'.$idee->id) }}">Lire la suite <i class="fa fa-angle-right"></i></a></div>
                <div class="pull-right">
                  <div class="shr">Share: </div>
                  <div class="social_icon">
                   
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
     
      
     
      
     
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="full">
        
        
        </div>
      </div>
    
    </div>
  </div>
</div>

<hr>

     <div class="section padding_layout_1 blog_grid">
  <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Signalements  </h2>
            <p class="large">Liste de tous les signalements faits par : {{$nom}} </p>
          </div>
        </div>
    <div class="row">
      @foreach ($signals as $signal)
           <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="full">
         
          <div class="blog_section">
            <div class="blog_feature_cantant theme_color_bg white_fonts">
              
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> {{$nom}}</li>

                  <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ date('d F Y', strtotime($signal->created_at))}}</li>
                </ul>
              </div>
              <p>{{ \Illuminate\Support\Str::limit($signal->contenu, 300) }} </p>
              <div class="bottom_info">
                <div class="pull-left"><a class="read_more" href="{{ url('/signal/'.$signal->id) }}">Lire la suite <i class="fa fa-angle-right"></i></a></div>
                <div class="pull-right">
                  <div class="shr">Share: </div>
                  <div class="social_icon">
                   
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
     
      
     
      
     
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="full">


      
     
     
     
     
     
    </div>
  </div>
</div>


@endsection

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f87423722e35b06"></script>
