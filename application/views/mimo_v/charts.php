<body style="background-color: #e1e1e1">

<br />
<br />
<br />
<div class="margin">
	<h3 class="txt">Featured Charts</h3>
</div>

<div class="row text-center">
	<div class="col-md-3" >
		<div >
			<!--both a href link papunta sa playlist-->
			<div><a href="<?php echo base_url('mimo/playlist');?>" ><img src="http://localhost/mimo/assets/img/top_gl.jpg" class="img-rounded img-chart "></a></div>			
			<div><strong><a href="<?php echo base_url('mimo/playlist');?>" class="txt ">Global Top 50</a></strong></div>	
			<div><p class="p hidden-xs"> Your daily update of the most played tracks right now. </br>PLAYLIST . BY SPOTIFY </p></div>	
		</div>
	</div>
	
	
	<div class="col-md-3 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="<?php echo base_url('mimo/playlist');?>"><img src="http://localhost/mimo/assets/img/top_ph.jpg" class="img-rounded img-chart "></a></div>				
			<div><strong><a href="<?php echo base_url('mimo/playlist');?>" class="txt ">Philippines Top 50</a></strong></div>	
			<div><p class="p hidden-xs"> Your daily update of the most played tracks in the Philippines right now. </br>PLAYLIST . BY SPOTIFY</p></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="<?php echo base_url('mimo/playlist');?>"><img src="http://localhost/mimo/assets/img/vir_ph.jpg" class="img-rounded img-chart "></a></div>					
			<div><strong><a href="<?php echo base_url('mimo/playlist');?>" class="txt">Philippines Viral 50</a></strong></div>	
			<div><p class="p hidden-xs"> Your daily update of the most viral tracks in the Philippines.</br> PLAYLIST . BY SPOTIFY </p></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="<?php echo base_url('mimo/playlist');?>"><img src="http://localhost/mimo/assets/img/vir_gl.jpg" class="img-rounded img-chart "></a></div>				
			<div><strong><a href="<?php echo base_url('mimo/playlist');?>" class="txt">Global Viral 50</a></strong></div>
			<div><p class="p hidden-xs"> Your daily update of the most viral tracks in the world. </br>PLAYLIST . BY SPOTIFY  </p></div>
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
</div>	
	</body>