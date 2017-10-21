<body style="background: linear-gradient(to bottom right, #bdc3c7 1%, #2c3e50 111%);
			background-attachment: fixed">
	<!-- Top Nav Bar -->
	<?php $this->load->view('include/topnav');?>
	
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
<div class="container-fluid " style="margin-left: 100px; margin-right: 100px; ">
 <div id="wrapper" >
  <div class="row margin" >
  
<!-- Top 10 Most Followed Artists -->
    <div class="col-md-3 col-sm-3  pre-scrollable " style="background-color:white; max-height:440px; ">
		<span><h2 class="text-center">New Artists</h2></span>
		<?php //'.$mimo['picture'].'
		foreach($newartists as $s){
		echo '
		<div style="background-color: #e1e1e1; height:150px; margin-top: 5%;" >
			<div style="float: left; padding-top:6%; padding-left:6%;">
				<div><a href="http://localhost/mimo/mimo/myStudio?username='.$s['username'].'" ><img src="'.$s['picture'].'" class="img-circle img" width="90"; height="90" ></a></div>
				<div style="padding-left:25%;" ><a href="http://localhost/mimo/mimo/myStudio?username='.$s['username'].'" >'.$s['username'].'</a></div>
			</div>
			<div style="padding-top:10%; padding-left:10%;"> 
				<h6 style=" color: black" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									'.$s['followers'].' People</h6>
						<!-- Follow button -->
				<div style="padding-left:50%;"><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
				color:grey;background-color:#e1e1e1;" >Follow</div>
			</div>
		</div>
		';}
		?>
		<!-- End Top 10 Most Followed Artists -->
		
		
		
	</div>
	<!-- Start of new artists Artists -->
    <div class="col-md-9 col-sm-9 pre-scrollable phone " style="background-color:#1a1a1a; margin:auto; max-height:440px;" >
		<div class="row margin" >
			<span> <h2 class="text-center" style="color:white;"> Top 10 Most Followed Artists</h2></span>
			<?php
					foreach($mimoartists as $mimo){
					echo '
					<div class="text-center " >
				<div class="col-md-4 col-sm-4" class="artist" style="padding-top:2%;">
					<div >
						<!--both a href link papunta sa playlist-->
						<div><a href="http://localhost/mimo/mimo/myStudio?username='.$mimo['username'].'" ><img src="'.$mimo['picture'].'" class="img-circle img" width="220"; height="220"></a></div>			
						<div style="background-color:#666666; margin-top: 5%; height: 110px;">	
							<div><a href="http://localhost/mimo/mimo/myStudio?username='.$mimo['username'].'" style="color:white;">'.$mimo['username'].'</a></div>	
							<h6 style=" color: white" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									'.$mimo['followers'].' People</h6>
							<!-- Follow button -->
							<div ><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
							color:grey;background-color:#e1e1e1;">Follow</div>
						</div>
					</div> 
					</div> 
			</div>
			';} ?>
		</div>
	</div>
	<!-- End of new artists Artists -->
  </div>
  </div>
</div>
		
		
		
		
		
		
		
		
		
		
	<?php $this->load->view('include/releasebuttons');?>
	<?php $this->load->view('templates/addpostmodal');?>
	<?php $this->load->view('templates/addaudiomodal');?>
	<?php $this->load->view('templates/addvideomodal');?>
</div>
</body>

</html>
