@extends('layouts.headerfooter')

@section('body')

@if(session()->has('message'))

<script>
  alert("<?php echo session()->get('message'); ?>")
</script>
  
@endif

<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h2>Restez en contact avec nous</h2>
              </div>
            </div>
            <div class="contact_information">
            
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <h4>+213 55 53 79 98 8</h4>
                    <p> {{ date('d F Y', strtotime(Carbon\Carbon::now()->toDateTimeString()))}}</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <h4>medj.lam@gmail.com</h4>
                    <p>24/7 le Support du site est à votre service</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
              <h2 class="text_align_center">Contacter les administrateurs</h2>
              <div class="form_section">
                <form class="form_contant" action="contact-admin" method="post">
                    @csrf
                  <fieldset>
                  <div class="row">
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <input class="field_custom" name="objet" placeholder="Objet du message" type="text">
                      <input class="field_custom" name="userid" value="{{Auth::user()->id}}" hidden placeholder="Objet du message" type="text">
                    </div>
                   
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <textarea class="field_custom" name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="center">  <button type="submit" class="btn btn-success btn-sm">Modifier</button></div>
                  </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    
@endsection

