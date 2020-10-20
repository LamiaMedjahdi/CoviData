@extends('layouts.headerfooter')



@section('body')




@if(session()->has('message'))

<script>
  alert("<?php echo session()->get('message'); ?>")
</script>
  
@endif
<!-- end header -->
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Signalements</h1>
              <ol class="breadcrumb">
                <li><a href="{{ url('/acceuil') }}">Acceuil</a></li>
                <li class="active">Signalements</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section padding_layout_1 product_list_main">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">



          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/1.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.html">Norton Internet Security</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="old_price">$15.00</span> – <span class="new_price">$25.00</span></p>
                </div>
              </div>
            </div>
          </div>
         

          
        </div>
      </div>
     </div>
  </div>
</div>





@endsection



