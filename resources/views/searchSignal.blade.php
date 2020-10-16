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
              <h1 class="page-title">Résultats de la recherche des signalements</h1>
              <ol class="breadcrumb">
                <li><a href="/acceuil">Acceuil</a></li>
                <li><a href="/signals">Acceuil</a></li>
                
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
<div class="section padding_layout_1 service_list">
  <div class="container">
    <div class="row">

        @if (session('status'))
        <div class="alert alert-info">

            {{session('status')}}

        </div>
            
        @endif
      
     @foreach ($filtre as $res)
         <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img">
              @if ($res->image)
                 <img class="img-responsive" src="../images/signals/{{$res->image}}" alt="#" /> 
              @endif  </div>
          <div class="service_cont">
            {{-- <h3 class="service_head">{{$res->titre}}s</h3> --}}
            <p>{{ \Illuminate\Support\Str::limit($res->contenu, 84) }}</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="{{ url('/signal/'.$res->id) }}">Voir plus</a> </div>
          </div>
        </div>
      </div>
 
     @endforeach
     

    
     
   
    </div>
  </div>
</div>


    
@endsection