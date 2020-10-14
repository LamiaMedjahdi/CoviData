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
              <h1 class="page-title">Signalements - Catégorie : {{$categorie}}</h1>
                  <ol class="breadcrumb">
                <li><a href="{{ url('/acceuil') }}">Acceuil</a></li>
                <li class="active" ><a href="{{ url('/signals') }}">Signalements</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">


            
           
            <div class="btn-group" role="group" aria-label="Basic example">
                @foreach ($categories as $cat)
                    <a  href="{{ url('/signal-par-categorie/'.$cat->label.'/'.$cat->id) }}" style="color:white;" type="button" class="btn btn-secondary">{{ $cat->label }}</a>
                    @endforeach
 
 
            </div>
          
            
            <br><br><br>

           
            @foreach ($signals as $signal)
            
                <div class="row">
                  
          <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog" style="padding:0 15px;">
            <div class="full text_align_left">
              
              <p>Contenu du signalement :<br> {{$signal->contenu}}..</p>
             <br> <p><a  href="{{ url('/signal/'.$signal->id) }}">Lire la suite...</a></p>
              
              
             
            </div>
            
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img">
            
              <div class="blog_feature_img"> <img class="img-responsive" src="{{ URL::to('/images/signals/' . $signal->image) }}" alt="#"> </div>
            
          
          </div>
          
          
         
         
          <br><br>

          
        </div>
         <br><br><br>
            @endforeach
            
              
       
        
        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





@endsection



