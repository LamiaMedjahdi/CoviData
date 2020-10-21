@extends('layouts.headerfooter')

@section('body')

<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Tag : {{ $tag->nom}} </h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Acceuil</a></li>
                <li class="active"><a href="#">Publications</a></li>
              <li class="active">{{ $tag->nom}}</li>
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







               

           

      @foreach ($poststag as $poststags)
              <div class="blog_section">
            <div class="blog_feature_img"> <img class="img-responsive" src="{{ asset('images/it_service/' . $poststags->image) }}" alt="#"> </div>
            <div class="blog_feature_cantant">
              <p class="blog_head">{{ $poststags->titre}}</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> admin </li>
                  
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> @php echo date('d F Y', strtotime($poststags->created_at)); @endphp </li>
                </ul>
              </div>
              <p>{{ $poststags->contenu }} </p>
              <div class="bottom_info">
          
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
        
             
         
         
         
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
        <div class="side_bar">
          
         
          
          
              
          
       
          
        </div>
      </div>
    </div>
  </div>
</div>
    
@endsection