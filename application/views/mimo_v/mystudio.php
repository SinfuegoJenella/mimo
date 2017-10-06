<body style="background-color: #d6d6d6">
<div class="container" style="margin-top: 55px; ">
<div class="row">
	<div class="row" style="background-color: #e1e1e1; padding: 20px; 
				background: url('http://localhost/mimo/assets/img/s.jpg') no-repeat center; background-size:cover;">
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
					<h2 style="color: #1a1a1a" class="user"> Samantha Millos <small>(nightingale07)</small></h2>
						<h6 style="color: #1a1a1a; padding: 0 2.2em" class="user"><i class="material-icons">music_note</i><b style="color: #ff9926">Genres:</b> Ballad, Asian Pop, Pop Rock</h6>
							<h6 style="color: #1a1a1a; padding: 0 2.2em" class="user"><i class="material-icons">business_center</i><b style="color: #ff9926"> Career:</b> Singer , Song Writer, Sound Designer</h6>
							<h6 style="color: #1a1a1a; padding: 0 2.2em" class="user"><i class="material-icons">group</i><b style="color: #ff9926"> Followers:</b> 232,651 People</h6>
							<h6 style="color: #1a1a1a; padding: 0 2.2em" class="user"><i class="material-icons">album</i><b style="color: #ff9926"> Album:</b> 56 Released Albums (146 audio)</h6>
				</div>	
			</div>
		</div>	
		<div class="col-md-6" style="padding-top: 40px; ">
			<h6 style="color: #1a1a1a;" class="user"><i class="fa fa-bullhorn"></i><b style="color: #ff9926"> Shoutout:</b></h6>
			<div class="row" style="background-color: rgba(0,0,0,0.1); padding: 40px; margin-top: 20px;height: 120px">
				<p class="text-center" style="color: #262626; padding: 0 2.2em"><i>"You've got to hold your head up high!"</i></p>
			
			</div>
		</div>
	
	</div>
	<hr />
	<?php $this->load->view('templates/addpostmodal');?>
	<?php $this->load->view('templates/addaudiomodal');?>
	
	<ul class="nav nav-tabs nav-justified">
						<li class="active"><a style="color: black; border-bottom: orange" data-toggle="tab" href="#collections"><i class="material-icons">library_music</i></span>&nbsp;Collections</a></li>
						<li><a style="color: black" data-toggle="tab" href="#albums" ><span><i class="material-icons">album</i></span>&nbsp;Albums</a></li>
						<li><a style="color: black" data-toggle="tab" href="#thought" ><span><i class="material-icons">comment</i></span>&nbsp;Thoughts</a></li>
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
							
							<div id="thought" class="tab-pane fade">
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
	<?php $this->load->view('include/releasebuttons');?>
</div>

</body>