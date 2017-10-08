
<body style="background-color: #333333">
	<!-- Top Nav Bar -->
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
					 <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" class="bar">
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
		<br>
		<div class="container">
			
		
		

<div class="col-md-10" style="padding-top: 80px; ">
			
			<div style="margin-left: 150px;">
			<!--papunta sa artists.php-->
			<div><a href="/Mimo/artist" ><img  src="http://localhost/mimo/assets/img/artists.jpg" class="img-rounded img-chart " style="width:800px; height: 200px; opacity: 0.9;"></a></div>				
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
			<div><a href="/Mimo/charts" ><img  src="http://localhost/mimo/assets/img/charts.jpg" class="img-rounded img-chart " style="width:800px; height: 200px; opacity: 0.9;"></a></div>				
			</div>
		
		
		
		
		
		
		
		
		
		
</div>
</body>
