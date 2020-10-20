<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bar chart</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>

</head>
<body>

    <div style="height:400px;width:900px;margin:auto;">
    <canvas id="barChart"></canvas>
    
</div>

<script>
	$(function(){
 		var datas = <?php echo json_encode($datas); ?>;
		var barCanvas = $("#barChart");
		var barChart = new Chart(barCanvas , {
			type :'bar',
			data:{
labels:['Jan','Fev','Mars','Avr','mai','Juin','Juill','aout','sep','oct','nov','dec'],
datasets:[
{
label:'Graphe en bar nombre de malades Covid 19,2020',
data:datas,
backgroundColor:['red','red','red','red','red','red','red','red','red','red','red','red'],

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
    
</body>
</html>