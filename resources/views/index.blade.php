@extends('layouts.admin')

@section('content')


<div class="section__content section__content--p30">
    <p hidden> {{Carbon\Carbon::setLocale( 'fr')}}.</p>
   
                    <div class="container-fluid">
                        <div class="row">
                           
                        </div>
                        @if (Auth::check() and Auth::user()->roles == 1)
                        {
                             <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$subscribers}}</h2>
                                                <span>Personnes inscrites sur la plateforme</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-collection-item-9-plus"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$publications}}</h2>
                                                <span>Nouvelles publications - 24h</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-alert-triangle"></i>
                                            </div>
                                            <div class="text">
                                            <h2>{{ $signals }}</h2>
                                                <span>Signalements non vérifiés</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-comments"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$idees}}</h2>
                                                <span>idées partagées aujourd'hui / non approuvées</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        }
                        @else
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                @php
                                                   $total = $ideescontrib + $signalscontrib; 
                                                @endphp
                                                <h2>{{$total}}</h2>
                                                <span>Contributions dans la plateforme</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-collection-item-9-plus"></i>
                                            </div>
                                            <div class="text">
                                                <h2>{{$publications}}</h2>
                                                <span>Nouvelles publications - 24h</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-alert-triangle"></i>
                                            </div>
                                            <div class="text">
                                                <span>Vous avez fait </span>
                                            <h2>{{ $signalscontrib }}</h2>
                                                <span>Signalements </span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-comments"></i>
                                            </div>
                                            <div class="text">
                                                <span>Vous avez participé avec </span>
                                            <h2>{{ $ideescontrib }}</h2>
                                                <span>idées </span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      @endif
                        
                       
                        <div class="row">
                            <div class="col-sm-3">
                                <div style="height:400px;width:900px;margin:auto;">
                                 
                                    <canvas id="barChart2"></canvas>
                                    
                                </div>
                            </div>
                        </div>
                        <br><br>
                         <div class="row">
                            <div class="col-sm-3">
                                <div style="height:400px;width:900px;margin:auto;">
                                 
                                    <canvas id="barChart3"></canvas>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
@endsection

 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(function(){
 		var datas = <?php echo json_encode($datas); ?>;
		var barCanvas = $("#barChart2");
		var barChart = new Chart(barCanvas , {
			type :'bar',
			data:{
labels:['-','Jan','Fev','Mars','Avr','mai','Juin','Juill','aout','sep','oct','nov','dec'],
datasets:[
{
label:'Graphe en bar nombre de malades Covid 19,2020',
data:datas,
backgroundColor:['','red','green','yellow','black','pink','blue','indigo','teal','orange','cyan','purple','gray']

}
]
				},
options:{
	scales:{
	yAxes:[{
	ticks:{
		beginAtZero:true
		}
}]
}
}
});
})



</script>

