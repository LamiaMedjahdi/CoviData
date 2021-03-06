@extends('layouts.headerfooter')

@section('body')

<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">{{ $postdetail->titre}} </h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Acceuil</a></li>
                <li class="active"><a href="{{ url('/publications') }}">Publications</a></li>
                <li class="active">{{ $postdetail->titre}}</li>
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
                @if ($postdetail->image)
                     <div class="blog_feature_img"> <img class="img-responsive" width="500px;" height="350px;" src="{{ URL::to('/images/publications/' . $postdetail->image) }}" alt="#"> </div>
                @endif
           
            <div class="blog_feature_cantant">
              <p class="blog_head">{{ $postdetail->titre}}</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> admin </li>
                  
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> @php echo date('d F Y', strtotime($postdetail->created_at)); @endphp </li>
                </ul>
                
              </div>
              <p>{{ $postdetail->contenu }} </p>
              <div class="bottom_info">
               
          
          
                 
                   @if (Auth::check())
                
 <div class="pull-left" style="padding-left: 20px;"><a class="btn sqaure_bt" href="{{ url('/favoris/'.$postdetail->id.'/'.Auth::user()->id) }}">ajouter aux favoris<i class="fa fa-angle-right"></i></a></div>
                @else
                  <div class="pull-left" style="padding-left: 20px;"><a class="btn sqaure_bt" href="{{ url('login') }}">ajouter aux favoris<i class="fa fa-angle-right"></i></a></div>
                 @endif 
                 
                  {{-- <a class="favoris" href="javascript:;" onClick="like(this);" rel="http://www.tumblr.com/like/fGKvAJgQ?id=16664837215">like it</a>


function like(placeholder) {
        $.ajax({
            url: $(placeholder).attr('rel'),
            type: "GET",
            success:function(){
                alert("done");
            },
            error:function (){
                alert("testing error");
            }
        });
        return false;
} --}}
                <div class="pull-right">
                  <div class="shr">Partager: </div>
                  <div class="social_icon">
                    <ul>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
             
         
         
         
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>Rechercher des publications</h4>
            
            <div class="side_bar_search">
            <form action="/information-search" method="POST">
              @csrf
              <div class="input-group stylish-input-group">
                <input class="form-control" name="recherche" placeholder="Search" type="text">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                </span>
              </div>
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
                      <li><a href="{{ url('/pubstag/'.$tag->id) }}">{{ $tag->nom }}</a></li>
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