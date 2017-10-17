<body style="background-color: #e1e1e1">
<?php $this->load->view('include/topnav');?>

<div class="container">
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
			
	<div class="text-center " >
				<div class="col-md-4 col-sm-4" class="artist" style="padding-top:2%;">
					<div >
						<!--both a href link papunta sa playlist-->
						<div><a href="<?php echo base_url('mimo/artistplaylist');?>" ><img src="http://localhost/mimo/assets/img/1.jpg" class="img-circle  cen"></a></div>			
						<div style="background-color:#666666; margin-top: 5%; height: 110px;">	
							<div><a href="<?php echo base_url('mimo/artistplaylist');?>" style="color:white;">Miley Cyrus</a></div>	
							<h6 style=" color: white" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									232,651 People</h6>
							<!-- Follow button -->
							<div ><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
							color:grey;background-color:#e1e1e1;" >Follow</div>
						</div>
					</div>
				</div> 
			
			
				<div class="col-md-4 col-sm-4"  style="padding-top:2%;">
					<div >
					<!--both a href link papunta sa playlist-->
						<div><a href="<?php echo base_url('mimo/artistplaylist');?>"><img src="http://localhost/mimo/assets/img/2.jpg" class="img-circle  "></a></div>
						<div style="background-color:#666666; margin-top: 5%; height: 110px;" >
							<div><a href="<?php echo base_url('mimo/artistplaylist');?>" style="color:white;" >JLo</a></div>	
							<h6 style=" color: white" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									232,651 People</h6>
									<!-- Follow button -->
							<div ><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
							color:grey;background-color:#e1e1e1;" >Follow</div>
						</div>
					</div>
				</div>
			
				<div class="col-md-4 col-sm-4"  style="padding-top:2%;">
					<div>
						<!--both a href link papunta sa playlist-->
						<div><a href="<?php echo base_url('mimo/artistplaylist');?>"><img src="http://localhost/mimo/assets/img/3.jpg" class="img-circle  "></a></div>
						<div style="background-color:#666666; margin-top: 5%; height: 110px;">
							<div><a href="<?php echo base_url('mimo/artistplaylist');?>" style="color:white;" >GD</a></div>
							<h6 style=" color: white" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									232,651 People</h6>
									<!-- Follow button -->
							<div ><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
							color:grey;background-color:#e1e1e1;" >Follow</div>
						</div>
					</div>
				</div>
		
			</div>
		</div>
	<div class="row text-center" style="padding-top:50px;">
	<div class="col-md-3" >
		<div >
			<!--both a href link papunta sa playlist-->
			<div><a href="<?php echo base_url('mimo/playlist');?>" ><img src="http://localhost/mimo/assets/img/top_gl.jpg" class="img-rounded img-chart "></a></div>			
			<div><strong><a href="<?php echo base_url('mimo/playlist');?>" class="txt ">Global Top 50</a></strong></div>	
		</div>
	</div>
	
	
	<div class="col-md-3 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="<?php echo base_url('mimo/playlist');?>"><img src="http://localhost/mimo/assets/img/top_ph.jpg" class="img-rounded img-chart "></a></div>				
			<div><strong><a href="<?php echo base_url('mimo/playlist');?>" class="txt ">Philippines Top 50</a></strong></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="<?php echo base_url('mimo/playlist');?>"><img src="http://localhost/mimo/assets/img/vir_ph.jpg" class="img-rounded img-chart "></a></div>					
			<div><strong><a href="<?php echo base_url('mimo/playlist');?>" class="txt">Philippines Viral 50</a></strong></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="<?php echo base_url('mimo/playlist');?>"><img src="http://localhost/mimo/assets/img/vir_gl.jpg" class="img-rounded img-chart "></a></div>				
			<div><strong><a href="<?php echo base_url('mimo/playlist');?>" class="txt">Global Viral 50</a></strong></div>
		</div>
	</div>
	
	</div>
  

  <div class="row text-center" style="padding-top:50px; margin-left:90px;">
	<div class="col-md-3 " >
		<div >
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist" ><img src="http://localhost/mimo/assets/img/alt.png" class="img-rounded img-chart" ></a></div>			
			<div><a href="/Mimo/playlist" class="txt " style="color:black">Alternative Music</a></div>	
		</div>
	</div>
	
	
	<div class="col-md-3 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/blues.jpg" class="img-rounded img-chart " style="width:170px;height:170px;"></a></div>				
			<div><a href="/Mimo/playlist" class="txt " style="color:black">Blues</a></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/classical.png" class="img-rounded img-chart " style="width:170px;height:170px"></a></div>					
			<div><a href="/Mimo/playlist" class="txt" style="color:black">Classical Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/country.png" class="img-rounded img-chart"  style="width:170px;height:170px "></a></div>				
			<div><a href="/Mimo/playlist" class="txt" style="color:black">Country Music</a></div>
		</div>
	</div>
	<div class="col-md-3 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/dance.jpg" class="img-rounded img-chart " style="width:170px;height:170px;"></a></div>				
			<div><a href="/Mimo/playlist" class="txt" style="color:black">Dance Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/easy.png" class="img-rounded img-chart " style="width:170px;height:170px"></a></div>					
			<div><a href="/Mimo/playlist" class="txt" style="color:black">Easy Listening</a></div>	
		</div>
	</div>
	
	
	<div class="col-md-3 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/electronic.jpg" class="img-rounded img-chart " style="width:170px;height:170px;"></a></div>				
			<div><a href="/Mimo/playlist" class="txt " style="color:black">Electronic Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/european.png" class="img-rounded img-chart " style="width:170px;height:170px"></a></div>					
			<div><a href="/Mimo/playlist" class="txt" style="color:black">European Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/hip.jpg" class="img-rounded img-chart"  style="width:170px;height:170px "></a></div>				
			<div><a href="/Mimo/playlist" class="txt" style="color:black">Hip Hop / Rap</a></div>
		</div>
	</div>
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/indie.png" class="img-rounded img-chart"  style="width:170px;height:170px "></a></div>				
			<div><a href="/Mimo/playlist" class="txt" style="color:black">Indie Pop</a></div>
		</div>
	</div>
	<div class="col-md-3 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/inspire.jpg" class="img-rounded img-chart " style="width:170px;height:170px;"></a></div>				
			<div><a href="/Mimo/playlist" class="txt " style="color:black">Inspirational Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/new.jpg" class="img-rounded img-chart " style="width:170px;height:170px"></a></div>					
			<div><a href="/Mimo/playlist" class="txt" style="color:black">New Age Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/opera.jpg" class="img-rounded img-chart"  style="width:170px;height:170px "></a></div>				
			<div><a href="/Mimo/playlist" class="txt" style="color:black">Opera</a></div>
		</div>
	</div>
	<div class="col-md-3 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/pop.jpg" class="img-rounded img-chart " style="width:170px;height:170px;"></a></div>				
			<div><a href="/Mimo/playlist" class="txt" style="color:black">Pop Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/rnb.jpg" class="img-rounded img-chart " style="width:170px;height:170px"></a></div>					
			<div><a href="/Mimo/playlist" class="txt" style="color:black">R&B / Soul</a></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/reggae.jpg" class="img-rounded img-chart"  style="width:170px;height:170px "></a></div>				
			<div><a href="/Mimo/playlist" class="txt" style="color:black">Reggae</a></div>
		</div>
	</div>
	<div class="col-md-3 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/rock.jpg" class="img-rounded img-chart " style="width:170px;height:170px;"></a></div>				
			<div><a href="/Mimo/playlist" class="txt" style="color:black">Rock Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/singer.jpg" class="img-rounded img-chart " style="width:170px;height:170px"></a></div>					
			<div><a href="/Mimo/playlist" class="txt" style="color:black">Singer / Songwriter</a></div>	
		</div>
	</div>
	
	<div class="col-md-3 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/world.jpg" class="img-rounded img-chart"  style="width:170px;height:170px "></a></div>				
			<div><a href="/Mimo/playlist" class="txt" style="color:black">World Music / Beats</a></div>
		</div>
	</div>
</nav>
			


		<?php $this->load->view('include/releasebuttons');?>
		<?php $this->load->view('templates/addpostmodal');?>
		<?php $this->load->view('templates/addaudiomodal');?>
		<?php $this->load->view('templates/addvideomodal');?>
	</div>
</div>
</body>