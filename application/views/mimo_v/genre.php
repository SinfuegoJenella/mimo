<body style="background-color: #333333">
	<!-- Top Nav Bar -->
<<<<<<< HEAD
	<?php $this->load->view('include/topnav');?>
=======
  <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="<?php echo base_url('');?>">
				<?php $this->load->view('include/mimologo')?>
				<strong style="margin-top: -5px;">MimO</strong> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
			 <form class="navbar-form navbar-left">
                    <div class="input-group">
						<!--Search Bar -->
                        <input class="form-control searchbar" type="text" placeholder="Search">
                        <div class="input-group-btn">
                            <a class="btn btn-block searchBtn" role="button" href="#"> <i class="glyphicon glyphicon-search"></i></a>
                        </div>
                    </div>
                </form>
				<!-- Nav Items -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="presentation" role="presentation"><a href="<?php echo base_url('');?>" class="bar">
						<i class="material-icons bar">speaker</i><p class="bar hidden-sm"> Music Hall</p></a></li>
                    <li class="presentation" role="presentation"><a href="<?php echo base_url('mimo/browse');?>" class="bar">
						<i class="material-icons bar">equalizer</i><p class="hidden-sm bar"> Browse</p></a>
                    </li>
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" class="bar">
						<i class="material-icons bar">file_upload</i><p class="hidden-sm bar"> Release</p><span class="caret"></span></a>
						 <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="" data-toggle="modal" data-target="#addThought"><i class="material-icons">comments</i> Thoughts</a></li>
                            <li role="presentation"><a href="" data-toggle="modal" data-target="#addAudio"><i class="material-icons">music_note</i> Audio</a></li>
						</ul>
                    <li role="presentation"><a href="<?php echo base_url('mimo/myStudio');?>" class="bar">
						<i class="material-icons bar">headset_mic</i><p class="hidden-sm bar">My Studio</p></a></li>	
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" class="bar">
						<i class="material-icons">settings</i> <span class="caret"></span></a>
						 <ul class="dropdown-menu" role="menu">
                            <li role="presentation">
								<a href="<?php echo base_url('mimo/settings');?>">Account Settings</a></li>
                            <li role="presentation"><a href="#">Logout</a></li>
						</ul>
                </ul>
            </div>
        </div>
    </nav>
	
>>>>>>> master
	<!--This is below Top Navigation Section -->
	
<div class="container " style="padding-top:50px;">
<div class="margin">
	<h3 class="txt" style="color:white;">Genres</h3>
</div>

<<<<<<< HEAD



	</body>
		</div>
		
			<div class="col-md-1">
			
			</div>
			
			
	</div>
		<br/>
		<br/>
		<br/><br/>
		<br/>
		<br/>
		<?php $this->load->view('include/releasebuttons');?>
</div>		
=======
<div class="row text-center" style="padding-top:50px;">
	<div class="col-md-2 " >
		<div >
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist" ><img src="http://localhost/mimo/assets/img/alt.png" class="img-rounded img-chart "></a></div>			
			<div><a href="/Mimo/playlist" class="txt ">Alternative Music</a></div>	
		</div>
	</div>
	
	
	<div class="col-md-2 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/blues.jpg" class="img-rounded img-chart " style="width:170px;height:170px;"></a></div>				
			<div><a href="/Mimo/playlist" class="txt ">Blues</a></div>	
		</div>
	</div>
	
	<div class="col-md-2 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/classical.png" class="img-rounded img-chart " style="width:170px;height:170px"></a></div>					
			<div><a href="/Mimo/playlist" class="txt">Classical Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-2 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/country.png" class="img-rounded img-chart"  style="width:170px;height:170px "></a></div>				
			<div><a href="/Mimo/playlist" class="txt">Country Music</a></div>
		</div>
	</div>
	<div class="col-md-2 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/dance.jpg" class="img-rounded img-chart " style="width:170px;height:170px;"></a></div>				
			<div><a href="/Mimo/playlist" class="txt ">Dance Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-2 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/easy.png" class="img-rounded img-chart " style="width:170px;height:170px"></a></div>					
			<div><a href="/Mimo/playlist" class="txt">Easy Listening</a></div>	
		</div>
	</div>
	
	
	<div class="col-md-2 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/electronic.jpg" class="img-rounded img-chart " style="width:170px;height:170px;"></a></div>				
			<div><a href="/Mimo/playlist" class="txt ">Electronic Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-2 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/european.png" class="img-rounded img-chart " style="width:170px;height:170px"></a></div>					
			<div><a href="/Mimo/playlist" class="txt">European Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-2 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/hip.jpg" class="img-rounded img-chart"  style="width:170px;height:170px "></a></div>				
			<div><a href="/Mimo/playlist" class="txt">Hip Hop / Rap</a></div>
		</div>
	</div>
	<div class="col-md-2 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/indie.png" class="img-rounded img-chart"  style="width:170px;height:170px "></a></div>				
			<div><a href="/Mimo/playlist" class="txt">Indie Pop</a></div>
		</div>
	</div>
	<div class="col-md-2 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/inspire.jpg" class="img-rounded img-chart " style="width:170px;height:170px;"></a></div>				
			<div><a href="/Mimo/playlist" class="txt ">Inspirational Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-2 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/new.jpg" class="img-rounded img-chart " style="width:170px;height:170px"></a></div>					
			<div><a href="/Mimo/playlist" class="txt">New Age Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-2 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/opera.jpg" class="img-rounded img-chart"  style="width:170px;height:170px "></a></div>				
			<div><a href="/Mimo/playlist" class="txt">Opera</a></div>
		</div>
	</div>
	<div class="col-md-2 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/pop.jpg" class="img-rounded img-chart " style="width:170px;height:170px;"></a></div>				
			<div><a href="/Mimo/playlist" class="txt ">Pop Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-2 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/rnb.jpg" class="img-rounded img-chart " style="width:170px;height:170px"></a></div>					
			<div><a href="/Mimo/playlist" class="txt">R&B / Soul</a></div>	
		</div>
	</div>
	
	<div class="col-md-2 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/reggae.jpg" class="img-rounded img-chart"  style="width:170px;height:170px "></a></div>				
			<div><a href="/Mimo/playlist" class="txt">Reggae</a></div>
		</div>
	</div>
	<div class="col-md-2 " >
		<div>
		<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/rock.jpg" class="img-rounded img-chart " style="width:170px;height:170px;"></a></div>				
			<div><a href="/Mimo/playlist" class="txt ">Rock Music</a></div>	
		</div>
	</div>
	
	<div class="col-md-2 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/singer.jpg" class="img-rounded img-chart " style="width:170px;height:170px"></a></div>					
			<div><a href="/Mimo/playlist" class="txt">Singer / Songwriter</a></div>	
		</div>
	</div>
	
	<div class="col-md-2 " >
		<div>
			<!--both a href link papunta sa playlist-->
			<div><a href="/Mimo/playlist"><img src="http://localhost/mimo/assets/img/world.jpg" class="img-rounded img-chart"  style="width:170px;height:170px "></a></div>				
			<div><a href="/Mimo/playlist" class="txt">World Music / Beats</a></div>
		</div>
	</div>
	</div>
	<!--end of first row-->	
>>>>>>> master
</body>
