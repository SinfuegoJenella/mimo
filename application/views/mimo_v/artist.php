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
<div class="container" >
	<br />
		
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
				

			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
	<?php $this->load->view('include/releasebuttons');?>
	<?php $this->load->view('templates/addpostmodal');?>
	<?php $this->load->view('templates/addaudiomodal');?>
	<?php $this->load->view('templates/addvideomodal');?>
</div>
</body>

</html>
