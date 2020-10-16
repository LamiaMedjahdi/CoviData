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


            
           
            <div class="btn-group" role="group" aria-label="Basic example">
                @foreach ($categories as $cat)
                    <a href="{{ url('/signal-par-categorie/'.$cat->label.'/'.$cat->id) }}" style="color:white;" type="button" class="btn btn-secondary">{{ $cat->label }}</a>
                    @endforeach
 
 
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
              <h4>Vous voulez signaler un dépassement ou un comportement ?</h4>
              <p>Exposez votre signalement pour aider la communauté et les autorités concernés à améliorer le service / résoudre le problème, Indiquez le lieu , la date , et une image si nécessaire </p>
             @if(Auth::check())
              <div class="form_section">
              <form method="POST" action="signals/store" enctype="multipart/form-data">
                  {{ csrf_field() }}
                <div class="form-group">
                      <input type="text" name="user" hidden value="{{ Auth::user()->id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >  
                  
                   
                </div>
                <div class="form-group">
                    
                     <textarea name="contenu" class="form-control" required id="exampleFormControlTextarea1" rows="3" placeholder="Contenu du signalement"></textarea>
                </div>
               <div class="form-group">
                    <label for="exampleFormControlSelect1">Catégorie</label>
                    <select class="form-control" name="categorie" id="exampleFormControlSelect1" required>
                        @foreach ($categories as $cat)
                            <option value="{{$cat->id}}"> {{$cat->label}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Date :</label>
                    
                    <input type="date" id="date" name="date" class="form-control" required>
                    
               
                </div>
                

                {{-- <div class="form-group">
                       <label for="exampleFormControlSelect1">Indiquez le lieu concerné par votre signalement</label>
                      <input type="text" name="localisation"  id="mapsearch" class="form-control"  >  
                  </div> --}}

                 <div class="form-group">
                    <label for="exampleFormControlSelect1">Wilaya</label>
                    <select class="form-control formselect required" name="wilaya" id="wilayaid" required>
                      <option value="0" disabled selected>Selectionnez une wilaya </option>
                        @foreach ($wilayas as $wilaya)
                            <option value="{{$wilaya->id}}"> {{$wilaya->nom}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Commune</label>
                    <select class="form-control formselect required" name="commune" id="communeid" required>
                      
                    </select>
                </div>
                 <div class="form-group">
                   <label for="exampleFormControlSelect1">Décrire l'endroit par des mots clés (ex : lycée ahmed ben zekri)</label>
                      <input type="text" name="motcles"  class="form-control"  >  
                  
                   
                </div>
             

                
              

                 <div class="form-group">
                    <label for="exampleFormControlFile1">Illustrez votre signalement par une image </label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                

              
                      <button type="submit" class="btn btn-primary">envoyer</button>  
                </div>
                
               
            
                </form>
               
              </div>
              @else 
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item"> <h4>Connectez vous pour proposer votre idée</h4><a class="btn main_bt" href="/login">Connexion</a> </li>
                  <li class="nav-item"> <h4>Vous n'avez pas de compte ? inscrivez vous</h4><a class="btn main_bt" href="/register">Inscription</a> </li>
              
              </ul>
              @endif 
              <br><br><br><br><br>
            </div>
            
            <br><br><br>
            <div class="full text_align_center">
            <h3>Signalements des citoyens</h3>
            <hr>
            </div>
            
            
            @foreach ($signals as $signal)
            
            
                <div class="row">
                  
          <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog" style="padding:0 15px;">
            <div class="full text_align_left">
              <p hidden> {{Carbon\Carbon::setLocale( 'fr')}}.</p>
              
              <h5>{{$signal->nom}}  a signalé dans la catégorie  : {{$signal->label}}</h5>
              <p>{{ Carbon\Carbon::parse($signal->created_at)->subHours(1)->diffForHumans() }}</p>
               
              <p>{{$signal->contenu}}..</p>
              
              
              <br>
            
              <iframe width="300" height="200" src="http://maps.google.com/maps?q={{$signal->localisation}}  &output=embed"></iframe>
              
              
             
            </div>
            
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img">
            
                <div class="full text_align_center"> <img class="img-responsive" src="images/signals/{{$signal->image}}"  alt="#"> </div>
            
          
          </div>
          
        <div  class="col-lg-6 col-md-6 col-sm-12"><a  class="btn main_bt" href="{{ url('/signal/'.$signal->id) }}">Lire la suite</a></div>
        
         
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

    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
        
    <script>
                $(document).ready(function () {
                $('#wilayaid').on('change', function () {
                let id = $(this).val();
                $('#communeid').empty();
                $('#communeid').append(`<option value="0" disabled selected>Selection en cours...</option>`);
                $.ajax({
                type: 'GET',
                url: 'GetCommuneEdit/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#communeid').empty();
                // $('#communeid').append(`<option value="0" disabled selected>Selectionnez une commune *</option>`);
                response.forEach(element => {
                    $('#communeid').append(`<option value="${element['nom']}">${element['nom']}</option>`);
                            });
                            }
                        });
                    });
                });


                
    </script>

