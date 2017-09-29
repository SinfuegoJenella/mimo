<body>
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
                    <li class="active" role="presentation"><a href="#" class="bar">
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
                    <li role="presentation"><a href="<?php echo base_url('mimo/myStudio');?>" class="bar">
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
	
	<!-- Left Nav Section -->
<div class="row">
		<div id="leftnav" class="col-md-3 col-sm-5">
		
			<!-- Left Nav Profile Section -->
			<div class="row" style="margin-left: 10px; margin-right: 10px">
				<!-- Header -->
					<!-- Sa 'background-image: url('') mo ilagay yung mga header at profile pic -->
				<div class="header" style="background-image:url('http://localhost/mimo/assets/img/s.jpg'); width: 100%; height: 170px;
									margin-left: 0px; background-size: cover;">
					<!--DP-->
					<div class="nameBox" style="background: linear-gradient(transparent,rgba(0,0,0,0.2),rgba(0,0,0,0.7)); 
												background-size: cover; margin: 0 0; height: 162px">
						<div class="dpSection media" style="background-image:url('http://localhost/mimo/assets/img/sam.jpg');"></div>
							
						
						<!-- Full name yung sa h4 at username/stagename yung sa h6 -->
						<h4 style="color: white" class="text-center user">Samantha Millos</h4>
						<a style="color: white" class="text-center user"><h6>nightingale07</h6></a>
						</div>
				</div>
			
			</div>
			
			<!-- End of Left Nav Profile Section -->

			<div class="row" style="margin-left: 10px; margin-right: 10px">
					<div id="listNav" class="col-md-12">
						<div class="btn-group btn-group-justified">
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">local_mall</i>
						<p class="">Collection</p>
						</a>
			
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">library_music</i>
						<p class="">Albums</p>
						</a>
					
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">favorite</i>
						<p class="">Favorites</p>
						</a>
		
					</div>
				</div>
			</div>
			<!--MP3 Player Section-->
		
			
			<!-- MP3 Player Section-->
			
			
			
			
			
		</div>
		<!--End of Left Nav Section -->
			<!--MP3 Player Section-->
			<!-- MP3 Player Section-->
		
		
	<!-- Content Section -->
	
	<!-- Post Body (Thoughts) -->
	<div class="col-md-6 belowtn col-xs-12 col-sm-7">
		<div class="postcont">
		
		<!--Start to place Here the Post/Thought Templates-->
		<?php $this->load->view('templates/post_temp');?>
		<?php $this->load->view('templates/audio_temp');?>
		<?php $this->load->view('templates/audio_temp');?>
		<?php $this->load->view('templates/post_temp');?>
		<?php $this->load->view('templates/post_temp');?>
		
		<!--End of Post Section -->	
		</div>
		<!-- End of Contents Divisions-->
	</div>
	
	
<!-- Third Column Div (Beside Contents)-->
	<div class="col-md-3">
	<br /> <br /> <br />

	<?php $this->load->view('templates/addpostmodal');?>
	<?php $this->load->view('templates/addaudiomodal');?>
	</div>
		
</div><!--End of the Whole Row (LeftNav, Contents, Third Column -->
</body>