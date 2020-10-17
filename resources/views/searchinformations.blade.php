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
            <h1 class="page-title">Résultats de la recherche pour {{$q}} dans les publications :</h1>
              <ol class="breadcrumb">
                <li><a href="/acceuil">Acceuil</a></li>
                <li><a href="/publications">Publications</a></li>
                
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

        @if ($filtre->count() > 0)
       
                @foreach ($filtre as $res)
         <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img">
              @if ($res->image)
                 <img class="img-responsive" src="../images/signals/{{$res->image}}" alt="#" /> 
              @endif  </div>
          <div class="service_cont">
            <h3 class="service_head">{{$res->titre}}s</h3>
            <p>{{ \Illuminate\Support\Str::limit($res->contenu, 84) }}</p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="{{ url('/signal/'.$res->id) }}">Voir plus</a> </div>
          </div>
        </div>
      </div>
 
     @endforeach
     
     <p class="mb-0"><a class="btn btn-primary" href="javascript:history.back()">Retour</a>.</p>
     @else

          

          <div class="alert alert-primary" role="alert">
            <h4 class="alert-heading">Oups!</h4>
            <p>  Aucun résultat pour le mot :<b> {{$q}}</b>, Reessayez avec un autre mot</p>
            <hr>
            <p class="mb-0"><a href="javascript:history.back()">Retourner à la page de la publication</a>.</p>
          </div>

          
            
        @endif
      
    
    
     

    
     
   
    </div>
  </div>
</div>


    
@endsection