<body style="background-color: #d6d6d6">

<div class="container" style="margin-top: 55px; ">
	<div class="row" style="padding: 20px; background: linear-gradient(to bottom right, #bdc3c7 1%, #2c3e50 111%);">
		<div class="col-md-6">
			<div class="media">
				<div class="media-left">
					<a href="#" >
					
						<!--Profile Picture Section -->
						<div class="media-object" 
								style="width: 130px; height: 130px; background-image:url('http://localhost/mimo/assets/img/sam.jpg'); border-radius: 50%; 
							background-size: cover; margin: 10px auto; ">
						</div>
					</a>
				</div>

				<!--Profile Info: NAME, STAGENAME, GENRE, CAREER, FOLLOWERS, ALBUM -->
				<div class="media-body">
					<h2 class="profile"> Samantha Millos <small style="color: #cccccc" >(nightingale07)</small></h2>
						<h6 style="padding: 0 2.2em" class="profile"><i class="material-icons">music_note</i><b style="color: #ffc266">Genres:</b> Ballad, Asian Pop, Pop Rock</h6>
							<h6 style="padding: 0 2.2em" class="profile"><i class="material-icons">business_center</i><b style="color: #ffc266"> Career:</b> Singer , Song Writer, Sound Designer</h6>
							<h6 style="padding: 0 2.2em" class=" profile"><i class="material-icons">group</i><b style="color: #ffc266"> Followers:</b> 232,651 People</h6>
							<h6 style="padding: 0 2.2em" class=" profile"><i class="material-icons">album</i><b style="color:#ffc266 "> Album:</b> 56 Released Albums (146 audio)</h6>
				</div>	
			</div>
		</div>	
		
		<!--Profile Info: SHOUTOUT(Parang Bio) -->
		<div class="col-md-6" style="padding-top: 40px; ">
			<h6 class="user profile"><i class="fa fa-bullhorn"></i><b style="color: #ffc266"> Shoutout:</b></h6>
			<div class="row" style="background-color: rgba(255,255,255,0.2); padding: 10px; margin-top: 20px;height: 50px">
				<!--Put here the bio -->
				<p class="text-center profile" style="padding: 0 2.2em"><i>"You've got to hold your head up high!"</i></p>
			</div>
			
			<!-- Follow Button-->
			<div class="row" style="margin-top: 30px;">
				<a id="followBtn" class="btn btn-default pull-right" href="#"><i class="fa fa-bell"></i> Follow</a>
			</div>
		</div>
	</div>
	
	<!-- Para to sa modal ng share thought at audio-->
	<?php $this->load->view('templates/addpostmodal');?>
	<?php $this->load->view('templates/addaudiomodal');?>
	
	<div class="row">
	<ul class="nav nav-tabs nav-justified">
						<!-- COLLECTIONS, ALBUMS, THOUGHTS, and FAVORITES TABS-->
						<li class="active"><a data-toggle="tab" href="#collections"><i class="material-icons">library_music</i></span>&nbsp;Collections</a></li>
						<li><a data-toggle="tab" href="#albums" ><span><i class="material-icons">album</i></span>&nbsp;Albums</a></li>
						<li><a data-toggle="tab" href="#thought" ><span><i class="material-icons">chat_bubble</i></span>&nbsp;Thoughts</a></li>
						<li><a data-toggle="tab" href="#fav" ><i class="material-icons">favorite</i></span>&nbsp;Favorites</a></li>
					</ul>

						<div class="tab-content">
						
						<!-- COLLECTIONS -->
							<div id="collections" class="tab-pane fade in active">
							<div class="row">
								<div class="col-md-3"></div>
								<!-- PUT HERE THE COLLECTIONS-->
								<div class="col-md-6">	
									<?php $this->load->view('templates/audio_temp');?>
									<?php $this->load->view('templates/audio_temp');?>
									<?php $this->load->view('templates/audio_temp');?>
									<?php $this->load->view('templates/audio_temp');?>
								<!-- -->
								</div>
								
								<div class="col-md-3"></div>
							</div>
							</div>
   
						<!-- ALBUMS-->
							<div id="albums" class="tab-pane fade" >
							<div class="row">
								<div class="col-md-3"></div>
									
								<div class="col-md-6">	
									<!-- PUT HERE THE ALBUMS-->
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<!-- -->
								</div>
								
								<div class="col-md-3"></div>
								
							</div>
							</div>
							
							
							<!-- THOUGHTS-->
							<div id="thought" class="tab-pane fade">
								<div class="row">
									<div class="col-md-3">
									</div>
									<div class="col-md-6">
										<!-- PUT HERE THE THOUGHTS-->
										<?php $this->load->view('templates/post_temp');?>
										<?php $this->load->view('templates/post_temp');?>
										<?php $this->load->view('templates/post_temp');?>
										<!-- -->
									</div>
									<div class="col-md-3">
									</div>
								</div>
							</div>	
							
							<!-- FAVORITES-->
							<div id="fav" class="tab-pane fade">
							<div class="row">
								<div class="col-md-3"></div>
									
								<div class="col-md-6">	
									<!-- PUT HERE THE FAVORITES-->
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<?php $this->load->view('templates/albumbox');?>
									<!-- -->
								</div>
								
								<div class="col-md-3"></div>
							</div>		
						</div>
</div>
	<?php $this->load->view('include/releasebuttons');?>
	</div>
</div>

</body>