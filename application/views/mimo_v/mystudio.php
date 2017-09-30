<body style="background-color:rgb(248,248,248)">
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
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" class="bar">
						<i class="material-icons bar">equalizer</i><p class="hidden-sm bar"> Browse</p><span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li role="presentation"><a href="#"><i class="material-icons">person</i> Artist</a></li>
								<li role="presentation"><a href="#"><i class="material-icons">music_note</i>Genre </a></li>
								<li role="presentation"><a href="#"><i class="material-icons">show_chart</i>Chart </a></li>
							</ul>
                    </li>
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" class="bar">
						<i class="material-icons bar">file_upload</i><p class="hidden-sm bar"> Release</p><span class="caret"></span></a>
						 <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="" data-toggle="modal" data-target="#addThought"><i class="material-icons">comments</i> Thoughts</a></li>
                            <li role="presentation"><a href="" data-toggle="modal" data-target="#addAudio"><i class="material-icons">music_note</i> Audio</a></li>
						</ul>
                    <li class="active"><a href="<?php echo base_url('mimo/myStudio');?>" class="bar">
						<i class="material-icons bar">headset_mic</i><p class="hidden-sm bar">My Studio</p></a></li>	
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" class="bar">
						<i class="material-icons">settings</i> <span class="caret"></span></a>
						 <ul class="dropdown-menu" role="menu">
                     <li role="presentation">
							        	<a href="<?php echo base_url('mimo/settings');?>">Account Settings</a></li>
                            <li role="presentation"><a href="?a=logout">Logout</a></li>

						</ul>
                </ul>
            </div>
        </div>
    </nav>
	<!--This is below Top Navigation Section -->
	
<div class="container-fluid" style="margin-top: 55px;">
	<div class="row" style="background-color: #1a1a1a; padding: 20px; ">
		<div class="col-md-6">
			<div class="media">
				<div class="media-left">
					<a href="#" >
						<div class="media-object" 
								style="width: 130px; height: 130px; background-image:url('http://localhost/mimo/assets/img/sam.jpg'); border-radius: 50%; 
							background-size: cover; margin: 10px auto; ">
						</div>
					</a>
				</div>

				<div class="media-body">
					<h2 style="color: white" class="user"><i class="glyphicon glyphicon-user"></i> Samantha Millos <small>(nightingale07)</small></h2>
						<h6 style="color: white; padding: 0 2.2em" class="user"><i class="material-icons">music_note</i><b style="color: #ff9926">Genres:</b> Ballad, Asian Pop, Pop Rock</h6>
							<h6 style="color: white; padding: 0 2.2em" class="user"><i class="material-icons">business_center</i><b style="color: #ff9926"> Career:</b> Singer , Song Writer, Sound Designer</h6>
							<h6 style="color: white; padding: 0 2.2em" class="user"><i class="material-icons">group</i><b style="color: #ff9926"> Followers:</b> 232,651 People</h6>
							<h6 style="color: white; padding: 0 2.2em" class="user"><i class="material-icons">album</i><b style="color: #ff9926"> Album:</b> 56 Released Albums (146 audio)</h6>
				</div>	
			</div>
		</div>	
	
		<div class="col-md-6" style="padding-top: 40px; ">
			<h6 style="color: white;" class="user"><i class="fa fa-bullhorn"></i><b style="color: #ff9926"> Shoutout:</b></h6>
			<div class="row" style="background-color: rgba(255,255,255,0.1); padding: 40px; margin-top: 20px;height: 120px">
				<p class="text-center" style="color: white; padding: 0 2.2em"><i>"You've got to hold your head up high!"</i></p>
			
			</div>
		</div>
	
	</div>
	<?php $this->load->view('templates/addpostmodal');?>
	<?php $this->load->view('templates/addaudiomodal');?>
	
	<ul class="nav nav-tabs nav-justified">
						<li class="active"><a style="color: black; border-bottom: orange" data-toggle="tab" href="#collections"><i class="material-icons">library_music</i></span>&nbsp;Collections</a></li>
						<li><a style="color: black" data-toggle="tab" href="#albums" ><span><i class="material-icons">album</i></span>&nbsp;Albums</a></li>
						<li><a style="color: black" data-toggle="tab" href="#thoughts" ><span><i class="material-icons">comment</i></span>&nbsp;Thoughts</a></li>
						<li><a style="color: black" data-toggle="tab" href="#fav" ><i class="material-icons">favorite</i></span>&nbsp;Favorites</a></li>
					</ul>

						<div class="tab-content">
							<div id="collections" class="tab-pane fade in active">
								<div class="col-md-3"></div>
									
								<div class="col-md-6">	
									<?php $this->load->view('templates/audio_temp');?>
									<?php $this->load->view('templates/audio_temp');?>
									<?php $this->load->view('templates/audio_temp');?>
									<?php $this->load->view('templates/audio_temp');?>
								
								</div>
								
								<div class="col-md-3"></div>
							</div>
   
							<div id="albums" class="tab-pane fade" >
								<div class="col-md-3"></div>
									
								<div class="col-md-6">	
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
								
								</div>
								
								<div class="col-md-3"></div>
								
							</div>
							
							<div id="thoughts" class="tab-pane fade">
																<div class="row">
									<div class="col-md-3">
									</div>
									<div class="col-md-6">
								<?php $this->load->view('templates/post_temp');?>
								<?php $this->load->view('templates/post_temp');?>
								<?php $this->load->view('templates/post_temp');?>
									</div>
									<div class="col-md-3">
									</div>
								</div>
							</div>	
							
							<div id="fav" class="tab-pane fade">
								<div class="col-md-3"></div>
									
								<div class="col-md-6">	
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
								</div>
								
								<div class="col-md-3"></div>
							</div>	
						</div>
</div>
</div>

</body>