<html>
<head>
	<meta charset="UTF-8">
	<title>Error Page</title>
 
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/mimo/assets/css/browse.css">
</head>




<body style="background: linear-gradient(to bottom right, #bdc3c7 1%, #2c3e50 111%);
			background-attachment: fixed">
	<!-- Top Nav Bar -->
		<br>
<div class="container">
		<div id="wrapper">
			<div class="col-md-10 "  >
		
			<div  >
			<!--papunta sa artists.php-->
			<div><a href="<?php echo base_url('mimo/artist');?>" ><img  src="http://localhost/mimo/assets/img/artist.jpg" class="img-rounded img-chart img img-responsive" style="width:800px; height: 200px; opacity: 0.9;"></a></div>				
			</div>
			<br/> 
			<br/>
			<div >
			<!--papunta sa genre.php-->
			<div><a href="<?php echo base_url('mimo/genre');?>" ><img  src="http://localhost/mimo/assets/img/genree.jpg" class="img-rounded img-chart img img-responsive" style="width:800px; height: 200px; opacity: 0.9;"></a></div>				
			</div>
			<br/>
			<br/> 
			<div  >
			<!--papunta sa charts.php-->
			<div><a href="<?php echo base_url('mimo/charts');?>" ><img  src="http://localhost/mimo/assets/img/chart.jpg" class="img-rounded img-chart img img-responsive" style="width:800px; height: 200px; opacity: 0.9;"></a></div>				
			</div>


		<?php $this->load->view('include/releasebuttons');?>
		<?php $this->load->view('templates/addpostmodal');?>
		<?php $this->load->view('templates/addaudiomodal');?>
		<?php $this->load->view('templates/addvideomodal');?>
	</div>
</div>
</body>
