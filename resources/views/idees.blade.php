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
              <h1 class="page-title">Idées</h1>
              <ol class="breadcrumb">
                <li><a href="{{ url('/acceuil') }}">Acceuil</a></li>
                <li class="active">Idées</li>
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


            
           
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
              <h4>Vous avez une idée à proposer ?</h4>
              <p>Exposez votre idée pour aider la communauté à mieux gérer cette crise sanitaire, expliquez les solutions envisageables et illustrez votre idée par une image</p>
             @if(Auth::check())
              <div class="form_section">
              <form method="POST" action="idees/store" enctype="multipart/form-data">
                  {{ csrf_field() }}
                <div class="form-group">
                      <input type="text" name="user" hidden value="{{ Auth::user()->id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">  
                    <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titre de l'idée">
                   
                </div>
                <div class="form-group">
                    
                     <textarea name="contenu" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Contenu de l'idée"></textarea>
                </div>
               <div class="form-group">
                    <label for="exampleFormControlSelect1">Catégorie</label>
                    <select class="form-control" name="categorie" id="exampleFormControlSelect1">
                        @foreach ($categories as $cat)
                            <option value="{{$cat->id}}"> {{$cat->label}} </option>
                        @endforeach
                    </select>
                </div>
                 <div class="form-group">
                    <label for="exampleFormControlFile1">Illustrez votre idée</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button type="submit" class="btn btn-primary">envoyer</button>
                </form>
                <br><br>
              </div>
              @else 
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item"> <h4>Connectez vous pour proposer votre idée</h4><a class="btn main_bt" href="/login">Connexion</a> </li>
                  <li class="nav-item"> <h4>Vous n'avez pas de compte ? inscrivez vous</h4><a class="btn main_bt" href="/register">Inscription</a> </li>
              
              </ul>
              @endif 
              <br><br><br><br>
            </div>
            @foreach ($idees as $idee)
            
                <div class="row">
                  
          <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog" style="padding:0 15px;">
            <div class="full text_align_left">
              <h3>{{$idee->titre}} - catégorie : {{$idee->label}}</h3>
              <p>{{$idee->contenu}}..</p>
              
              <ul>
                <li><i class="fa fa-thumbs-up"></i>{{$idee->like}}</li>
                <li><i class="fa fa-thumbs-down"></i>{{$idee->dislike}}</li>
                
              </ul>
              <div class="center"><a class="btn main_bt" href="{{ url('/idee/'.$idee->id) }}">Voir l'idée en détail</a></div>
            </div>
            
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img">
          <div class="full text_align_center"> <img class="img-responsive" src="images/idees/{{$idee->image}}"  alt="#"> </div>
          </div>

          
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