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
			</nav>
			</div>
<div class="container-fluid " style="margin-left: 100px; margin-right: 100px; ">
 <div id="wrapper" >
  <div class="row margin" >
  
<!-- Top 10 Most Followed Artists -->
    <div class="col-md-3 col-sm-3  pre-scrollable " style="background-color:white; max-height:440px; ">
		<span><h2 class="text-center"> Top 10 Most Followed Artists</h2></span>
		<div style="background-color: #e1e1e1; height:150px; margin-top: 5%;" >
			<div style="float: left; padding-top:6%; padding-left:6%;">
				<div><a href="<?php echo base_url('mimo/artistplaylist');?>" ><img src="http://localhost/mimo/assets/img/IU.jpg" class="img-circle img"></a></div>
				<div style="padding-left:40%;"><a href="<?php echo base_url('mimo/artistplaylist');?>" >IU</a></div>
			</div>
			<div style="padding-top:10%; padding-left:10%;"> 
				<h6 style=" color: black" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									232,651 People</h6>
						<!-- Follow button -->
				<div style="padding-left:50%;"><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
				color:grey;background-color:#e1e1e1;" >Follow</div>
			</div>
		</div>
		
<<<<<<< HEAD
<div class="col-md-6" style="padding-top: 40px; ">
<div class="container"><div class="col-lg-12"><p><a href="#"><h3>New MimO Artists</h3></a></p></div>

<br/>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons ">music_note</i> nightingale07 &emsp; <button type="submit" form="form1" value="Submit" class="btn pill" id="btn">Follow</button></p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> IzzayBenedicto &emsp;<button type="submit" form="form1" value="Submit" class="btn pill" id="btn" >Follow</button></p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> CarlyyAbends &emsp;<button type="submit" form="form1" value="Submit" class="btn pill" id="btn">Follow</button></p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> GeloGeloGelo &emsp; <button type="submit" form="form1" value="Submit" class="btn pill" id="btn">Follow</button></p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> SheiShei &emsp;<button type="submit" form="form1" value="Submit" class="btn pill" id="btn">Follow</button> </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> JenJen &emsp;<button type="submit" form="form1" value="Submit" class="btn pill" id="btn">Follow</button> </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> Geisheeeerrr &emsp; <button type="submit" form="form1" value="Submit" class="btn pill" id="btn">Follow</button></p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> Audeng &emsp; <button type="submit" form="form1" value="Submit" class="btn pill" id="btn">Follow</button></p></div></div></a>

</div>
</div>
<div class="col-md-5" style="padding-top: 10px; ">
			<h3 style="color: white;" class="user"></i><b style="color: #ff9926; "> Top 20 Mimo Artists</b></h3>

			<div class="tbl">
		<table class="table">
			<thead>
				<tr class="p text-center ">
					<th> </th>
					<th style="color: white;"> </th>
					<th style="color: white;"></th>
					<th class="hidden-xs" style="color: white;"> </th>
				</tr>
			</thead>

			<div class="row" style="background-color: rgba(255,255,255,0.1); padding: 20px; margin-top: 10px;">
				<a href="<?php echo base_url('mimo/artistplaylist');?>" ><div class="container"><div class="col-lg-12"><p style="color: white;"><img src="http://localhost/mimo/assets/img/noimage.jpg" class="img-circle" style="width: 40px; height: 40px;" alt="noimage"/> &emsp; MoiraDelaTorre <a style="color: gray;"> - 173,263 followers </a></p></div></div></a>
				<a href="<?php echo base_url('mimo/artistplaylist');?>"><div class="container"><div class="col-lg-12"><p style="color: white;"><img src="http://localhost/mimo/assets/img/noimage.jpg" class="img-circle" style="width: 40px; height: 40px;" alt="noimage"/> &emsp; InigoooP <a style="color: gray;"> - 173,263 followers </a></p></div></div></a>
				<a href="<?php echo base_url('mimo/artistplaylist');?>"><div class="container"><div class="col-lg-12"><p style="color: white;"><img src="http://localhost/mimo/assets/img/noimage.jpg" class="img-circle" style="width: 40px; height: 40px;" alt="noimage"/> &emsp; MarisRacal <a style="color: gray;"> - 173,263 followers </a></p></div></div></a>
				

=======
		<div style="background-color: #e1e1e1; height:150px; margin-top: 5%;" >
			<div style="float: left; padding-top:6%; padding-left:6%;">
				<div><a href="<?php echo base_url('mimo/artistplaylist');?>" ><img src="http://localhost/mimo/assets/img/IU.jpg" class="img-circle img"></a></div>
				<div style="padding-left:40%;"><a href="<?php echo base_url('mimo/artistplaylist');?>" >IU</a></div>
			</div>
			<div style="padding-top:10%; padding-left:10%;"> 
				<h6 style=" color: black" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									232,651 People</h6>
						<!-- Follow button -->
				<div style="padding-left:50%;"><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
				color:grey;background-color:#e1e1e1;" >Follow</div>
			</div>
		</div>
		
		<div style="background-color: #e1e1e1; height:150px; margin-top: 5%;" >
			<div style="float: left; padding-top:6%; padding-left:6%;">
				<div><a href="<?php echo base_url('mimo/artistplaylist');?>" ><img src="http://localhost/mimo/assets/img/IU.jpg" class="img-circle img"></a></div>
				<div style="padding-left:40%;"><a href="<?php echo base_url('mimo/artistplaylist');?>" >IU</a></div>
			</div>
			<div style="padding-top:10%; padding-left:10%;"> 
				<h6 style=" color: black" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									232,651 People</h6>
						<!-- Follow button -->
				<div style="padding-left:50%;"><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
				color:grey;background-color:#e1e1e1;" >Follow</div>
>>>>>>> master
			</div>
		</div>
		
		<div style="background-color: #e1e1e1; height:150px; margin-top: 5%;" >
			<div style="float: left; padding-top:6%; padding-left:6%;">
				<div><a href="<?php echo base_url('mimo/artistplaylist');?>" ><img src="http://localhost/mimo/assets/img/IU.jpg" class="img-circle img"></a></div>
				<div style="padding-left:40%;"><a href="<?php echo base_url('mimo/artistplaylist');?>" >IU</a></div>
			</div>
			<div style="padding-top:10%; padding-left:10%;"> 
				<h6 style=" color: black" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									232,651 People</h6>
						<!-- Follow button -->
				<div style="padding-left:50%;"><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
				color:grey;background-color:#e1e1e1;" >Follow</div>
			</div>
		</div>
		
		<div style="background-color: #e1e1e1; height:150px; margin-top: 5%;" >
			<div style="float: left; padding-top:6%; padding-left:6%;">
				<div><a href="<?php echo base_url('mimo/artistplaylist');?>" ><img src="http://localhost/mimo/assets/img/IU.jpg" class="img-circle img"></a></div>
				<div style="padding-left:40%;"><a href="<?php echo base_url('mimo/artistplaylist');?>" >IU</a></div>
			</div>
			<div style="padding-top:10%; padding-left:10%;"> 
				<h6 style=" color: black" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									232,651 People</h6>
						<!-- Follow button -->
				<div style="padding-left:50%;"><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
				color:grey;background-color:#e1e1e1;" >Follow</div>
			</div>
		</div>
		
		<div style="background-color: #e1e1e1; height:150px; margin-top: 5%;" >
			<div style="float: left; padding-top:6%; padding-left:6%;">
				<div><a href="<?php echo base_url('mimo/artistplaylist');?>" ><img src="http://localhost/mimo/assets/img/IU.jpg" class="img-circle img"></a></div>
				<div style="padding-left:40%;"><a href="<?php echo base_url('mimo/artistplaylist');?>" >IU</a></div>
			</div>
			<div style="padding-top:10%; padding-left:10%;"> 
				<h6 style=" color: black" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									232,651 People</h6>
						<!-- Follow button -->
				<div style="padding-left:50%;"><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
				color:grey;background-color:#e1e1e1;" >Follow</div>
			</div>
		</div>
		
		<div style="background-color: #e1e1e1; height:150px; margin-top: 5%;" >
			<div style="float: left; padding-top:6%; padding-left:6%;">
				<div><a href="<?php echo base_url('mimo/artistplaylist');?>" ><img src="http://localhost/mimo/assets/img/IU.jpg" class="img-circle img"></a></div>
				<div style="padding-left:40%;"><a href="<?php echo base_url('mimo/artistplaylist');?>" >IU</a></div>
			</div>
			<div style="padding-top:10%; padding-left:10%;"> 
				<h6 style=" color: black" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									232,651 People</h6>
						<!-- Follow button -->
				<div style="padding-left:50%;"><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
				color:grey;background-color:#e1e1e1;" >Follow</div>
			</div>
		</div>
		
		<div style="background-color: #e1e1e1; height:150px; margin-top: 5%;" >
			<div style="float: left; padding-top:6%; padding-left:6%;">
				<div><a href="<?php echo base_url('mimo/artistplaylist');?>" ><img src="http://localhost/mimo/assets/img/IU.jpg" class="img-circle img"></a></div>
				<div style="padding-left:40%;"><a href="<?php echo base_url('mimo/artistplaylist');?>" >IU</a></div>
			</div>
			<div style="padding-top:10%; padding-left:10%;"> 
				<h6 style=" color: black" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									232,651 People</h6>
						<!-- Follow button -->
				<div style="padding-left:50%;"><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
				color:grey;background-color:#e1e1e1;" >Follow</div>
			</div>
		</div>
		
		<div style="background-color: #e1e1e1; height:150px; margin-top: 5%;" >
			<div style="float: left; padding-top:6%; padding-left:6%;">
				<div><a href="<?php echo base_url('mimo/artistplaylist');?>" ><img src="http://localhost/mimo/assets/img/IU.jpg" class="img-circle img"></a></div>
				<div style="padding-left:40%;"><a href="<?php echo base_url('mimo/artistplaylist');?>" >IU</a></div>
			</div>
			<div style="padding-top:10%; padding-left:10%;"> 
				<h6 style=" color: black" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									232,651 People</h6>
						<!-- Follow button -->
				<div style="padding-left:50%;"><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
				color:grey;background-color:#e1e1e1;" >Follow</div>
			</div>
		</div>
		
		<div style="background-color: #e1e1e1; height:150px; margin-top: 5%;" >
			<div style="float: left; padding-top:6%; padding-left:6%;">
				<div><a href="<?php echo base_url('mimo/artistplaylist');?>" ><img src="http://localhost/mimo/assets/img/IU.jpg" class="img-circle img"></a></div>
				<div style="padding-left:40%;"><a href="<?php echo base_url('mimo/artistplaylist');?>" >IU</a></div>
			</div>
			<div style="padding-top:10%; padding-left:10%;"> 
				<h6 style=" color: black" class=" profile text-center" ><b style="color: #ffa31a"><i class="fa fa-users"></i> Followers:</b> <br />
									232,651 People</h6>
						<!-- Follow button -->
				<div style="padding-left:50%;"><button class="btn pill" style="-webkit-border-radius: 16px;-moz-border-radius: 16px;border-radius: 16px; border-color:grey;
				color:grey;background-color:#e1e1e1;" >Follow</div>
			</div>
		</div>
		<!-- End Top 10 Most Followed Artists -->
		
		
		
	</div>
	<!-- Start of new artists Artists -->
    <div class="col-md-9 col-sm-9 pre-scrollable phone " style="background-color:#1a1a1a; margin:auto; max-height:440px;" >
		<div class="row margin" >
			<span> <h2 style="color:white;">New Artists</h2></span>
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
		
		
		<div class="row margin" >
			
			<div class="text-center" >
				<div class="col-md-4 col-sm-4" class="artist" style="padding-top:2%;">
					<div >
						<!--both a href link papunta sa playlist-->
						<div><a href="<?php echo base_url('mimo/artistplaylist');?>" ><img src="http://localhost/mimo/assets/img/1.jpg" class="img-circle  "></a></div>			
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
			
			
				<div class="col-md-4 col-sm-4" style="padding-top:2%;" >
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
		
		<div class="row margin" >
			
			<div class=" text-center " >
				<div class="col-md-4 col-sm-4" class="artist" style="padding-top:2%;">
					<div >
						<!--both a href link papunta sa playlist-->
						<div><a href="<?php echo base_url('mimo/artistplaylist');?>" ><img src="http://localhost/mimo/assets/img/1.jpg" class="img-circle  "></a></div>			
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
			
			
				<div class="col-md-4 col-sm-4" style="padding-top:2%;" >
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
			
				<div class="col-md-4 col-sm-4" style="padding-top:2%;" >
					<div >
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
