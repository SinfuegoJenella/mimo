<body style="background: linear-gradient(to bottom right, #bdc3c7 1%, #2c3e50 111%); background-repeat: no-repeat;
			background-attachment: fixed">
<div class="container" style="margin-top: 55px; ">
	
	<div class="row">
	<ul class="nav nav-tabs nav-justified">
						<!-- COLLECTIONS, ALBUMS, THOUGHTS, and FAVORITES TABS-->
						<li class="active"><a data-toggle="tab" href="#collections"><i class="material-icons">library_music</i></span>&nbsp;Collections</a></li>
						<li><a data-toggle="tab" href="#albums" ><span><i class="material-icons">album</i></span>&nbsp;Albums</a></li>
						<li><a data-toggle="tab" href="#thought" ><span><i class="material-icons">chat_bubble</i></span>&nbsp;Thoughts</a></li>
						<li><a data-toggle="tab" href="#fav" ><i class="material-icons">favorite</i></span>&nbsp;Favorites</a></li>
					</ul>

						<div class="tab-content">
						<?php $this->load->view('templates/commentModal');?>
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
										<?php $this->load->view('templates/commentModal');?>
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
	</div>
</div>
</body>