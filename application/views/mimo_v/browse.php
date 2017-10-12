<body style="background: linear-gradient(to bottom right, #bdc3c7 1%, #2c3e50 111%);
			background-attachment: fixed">
	<!-- Top Nav Bar -->
		<br>
		<div class="container">

<div class="col-md-10" style="padding-top: 80px; ">
			
			<div style="margin-left: 150px;">
			<!--papunta sa artists.php-->
			<div><a href="<?php echo base_url('mimo/artist');?>" ><img  src="http://localhost/mimo/assets/img/artists.jpg" class="img-rounded img-chart " style="width:800px; height: 200px; opacity: 0.9;"></a></div>				
			</div>
			<br/>
			<br/>
			<div style="margin-left: 150px;" >
			<!--papunta sa genre.php-->
			<div><a href="<?php echo base_url('mimo/genre');?>" ><img  src="http://localhost/mimo/assets/img/genres.png" class="img-rounded img-chart " style="width:800px; height: 200px; opacity: 0.9;"></a></div>				
			</div>
			<br/>
			<br/>
			<div style="margin-left: 150px;" >
			<!--papunta sa charts.php-->
			<div><a href="<?php echo base_url('mimo/charts');?>" ><img  src="http://localhost/mimo/assets/img/charts.jpg" class="img-rounded img-chart " style="width:800px; height: 200px; opacity: 0.9;"></a></div>				
			</div>


	<?php $this->load->view('include/releasebuttons');?>
	<?php $this->load->view('templates/addpostmodal');?>
	<?php $this->load->view('templates/addaudiomodal');?>
	<?php $this->load->view('templates/addvideomodal');?>
</div>
</body>
