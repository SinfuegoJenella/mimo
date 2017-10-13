<body style="background: linear-gradient(to bottom right, #bdc3c7 1%, #2c3e50 111%);
			background-attachment: fixed">
	<!-- Top Nav Bar -->

	<!--This is below Top Navigation Section -->
<div class="col-md-10" style="padding-top: 80px; margin-left: 100px;  ">
						<h1> Browse </h1>

			<nav class="navbar navbar-default" style="width:500px;">
			<ul class="nav navbar-nav ">
				<li class="navbar: hover;"><a href="<?php echo base_url('mimo/browse');?>">Overview</a></li>
				<li><a href="<?php echo base_url('mimo/artist');?>"> Artists </a></li>
				<li><a href="<?php echo base_url('mimo/genre');?>"> Genres </a></li>
				<li><a href="<?php echo base_url('mimo/charts');?>"> Charts </a></li>
			</ul>
			</div>
<br />
<br />
<br />
<div class="container " style="padding-top:50px;">
<div class="margin">
	<h3 class="txt">Featured Charts</h3>
</div>

<div class="row text-center">
	<div class="col-md-3" >
		<div >
			<!--both a href link papunta sa playlist-->
			<div><a href="<?php echo base_url('mimo/playlist');?>" ><img src="http://localhost/mimo/assets/img/top_gl.jpg" class="img-rounded img-chart "></a></div>			
			<div><strong><a href="<?php echo base_url('mimo/playlist');?>" class="txt ">Global Top 50</a></strong></div>	
			<div><p class="p hidden-xs"> Your daily update of the most played tracks right now. </br>PLAYLIST . BY MimO </p></div>	
		</div>
	</div>
	
	
	<div class="col-md-3 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="<?php echo base_url('mimo/playlist');?>"><img src="http://localhost/mimo/assets/img/top_ph.jpg" class="img-rounded img-chart "></a></div>				
			<div><strong><a href="<?php echo base_url('mimo/playlist');?>" class="txt ">Philippines Top 50</a></strong></div>	
			<div><p class="p hidden-xs"> Your daily update of the most played tracks in the Philippines right now. </br>PLAYLIST . BY MimO</p></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="<?php echo base_url('mimo/playlist');?>"><img src="http://localhost/mimo/assets/img/vir_ph.jpg" class="img-rounded img-chart "></a></div>					
			<div><strong><a href="<?php echo base_url('mimo/playlist');?>" class="txt">Philippines Viral 50</a></strong></div>	
			<div><p class="p hidden-xs"> Your daily update of the most viral tracks in the Philippines.</br> PLAYLIST . BY MimO </p></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="<?php echo base_url('mimo/playlist');?>"><img src="http://localhost/mimo/assets/img/vir_gl.jpg" class="img-rounded img-chart "></a></div>				
			<div><strong><a href="<?php echo base_url('mimo/playlist');?>" class="txt">Global Viral 50</a></strong></div>
			<div><p class="p hidden-xs"> Your daily update of the most viral tracks in the world. </br>PLAYLIST . BY MimO  </p></div>
		</div>
	</div>
	
	</div>
	<!--end of first row-->
	
	<!--second row-->
	</br>
	<div class="row text-center">
	<div class="col-md-6">
		<div>
			<!--a href link papunta sa playlist-->
			<a href="<?php echo base_url('mimo/playlist');?>"><img src="http://localhost/mimo/assets/img/top_cn.jpg" class="img-rounded img-banner"></a>				
		</div>
	</div>
	
	
	<div class="col-md-6">
		<div><!--a href link papunta sa playlist-->
			<a href="<?php echo base_url('mimo/playlist');?>"><img src="http://localhost/mimo/assets/img/vir_cn.jpg" class="img-rounded img-banner"></a>				
			
		</div>
	</div>
	
	
	
	</div>
	<!--end of second row-->
	<!--Thoughts&Audio Modal-->
	<?php $this->load->view('include/releasebuttons');?>
	<?php $this->load->view('templates/addpostmodal');?>
	<?php $this->load->view('templates/addaudiomodal');?>
	<?php $this->load->view('templates/addvideomodal');?>
</div>	
	</body>