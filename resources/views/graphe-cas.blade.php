@extends('layouts.admin')

@section('content')


<div class="section__content section__content--p30">
    <p hidden> {{Carbon\Carbon::setLocale( 'fr')}}.</p>
   
                    <div class="container-fluid">
                        <div class="row">
                           
                        </div>
                        <div class="row m-t-25">
                           
                        </div>
                      
                        
                       
                        <div class="row">
                            <div class="col-sm-3">
                                <div style="height:400px;width:900px;margin:auto;">
                                 
                                    <canvas id="barChart2"></canvas>
                                    
                                </div>
                            </div>
                        </div>
                        <br><br>
                        
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

