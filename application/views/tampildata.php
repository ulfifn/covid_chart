<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/fontawesome-free/css/all.min.css">
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url() ?>assets/js/Chart.min.js"></script>

<!-- end load library -->
</head>
<body>
	<div >
		<p align="center"><font face="Arial" color="black" size="10"> Monitoring Data Covid-19 Jepara </p><p align="center"><font face="Arial" color="black" size="4">Jumat, 25 Juni 2020 pukul 10:00 WIB</p>
	</div>
	
	<div class="card-body">

	<canvas id="densityChart" width="100" height="30"></canvas>

	<script>
		var densityCanvas = document.getElementById("densityChart");

	Chart.defaults.global.defaultFontFamily = "Lato";
	Chart.defaults.global.defaultFontSize = 18;

	var jumlahPP = {
	  label: 'PP',
	  data: [

	  <?php
	    if (count($stat)>0){
	    	foreach ($stat as $val) {
	    		echo $val->jumlah_PP.",";
	    	}
	    } 
	 	?>
	  ],
	  backgroundColor: 'rgba(95, 158, 160)',
	  borderWidth: 0,
	  yAxisID: "y-axis-pp"
	};

	var jumlahODP = {
	  label: 'ODP',
	  data: [

	  <?php
	    if (count($stat)>0){
	    	foreach ($stat as $val) {
	    		echo $val->jumlah_ODP.",";
	    	}
	    } 
	 	?>
	  ],
	  backgroundColor: 'rgba(0, 0, 255)',
	  borderWidth: 0,
	  yAxisID: "y-axis-odp"
	};

	var jumlahPDP = {
	  label: 'PDP',
	  data: [
	  <?php
	    if (count($stat)>0){
	    	foreach ($stat as $val) {
	    		echo $val->jumlah_PDP.",";
	    	}
	    } 
	 	?>

	  ],
	  backgroundColor: 'rgba(255, 165, 0)',
	  borderWidth: 0,
	  yAxisID: "y-axis-pdp"
	};

	var jumlahPositif = {
	  label: 'Positif',
	  data: [
	  <?php
	    if (count($stat)>0){
	    	foreach ($stat as $val) {
	    		echo $val->jumlah_positif.",";
	    	}
	    } 
	 	?>
	  ],
	  backgroundColor: 'rgba(255, 0, 0)',
	  borderWidth: 0,
	  yAxisID: "y-axis-positif"
	};
	

	var planetData = {
	  labels: [
	  <?php

	    if (count($stat)>0){
	    	foreach ($stat as $val) {
	    		echo "'".$val->nama_kecamatan."',";
	    	}
	    } 
	     ?>
	  ],
	  datasets: [jumlahPP, jumlahODP, jumlahPDP, jumlahPositif]
	};

	var chartOptions = {
	  scales: {
	    xAxes: [{
	      barPercentage: 1,
	      categoryPercentage: 0.6
	    }],
	    yAxes: [{
	      id: "y-axis-pp"
	    }, {
	      id: "y-axis-odp"
	    },{
	    	id:"y-axis-pdp"
	    },{
	    	id:"y-axis-positif"
	    }
	    ]
	  }
	};

	var barChart = new Chart(densityCanvas, {
	  type: 'bar',
	  data: planetData,
	  options: chartOptions
	});
	</script>
</div>


</body>