<body>
	<!-- Top Nav Bar -->
   <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><strong>MimO</strong> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
			 <form class="navbar-form navbar-left">
                    <div class="input-group">
						<!--Search Bar -->
                        <input class="form-control searchbar" type="text" placeholder="Search">
                        <div class="input-group-btn">
                            <a class="btn btn-default btn-block" role="button" href="#"> <i class="glyphicon glyphicon-search"></i></a>
                        </div>
                    </div>
                </form>
				<!-- Nav Items -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#"><i class="material-icons">speaker</i>Music Hall</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="material-icons">equalizer</i>Browse <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#"><i class="material-icons">person</i>Artist </a></li>
                            <li role="presentation"><a href="#"><i class="material-icons">music_note</i>Genre </a></li>
                            <li role="presentation"><a href="#"><i class="material-icons">show_chart</i>Chart </a></li>
                        </ul>
                    </li>
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="material-icons">file_upload</i>Release <span class="caret"></span></a>
						 <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="" data-toggle="modal" data-target="#addThought"><i class="material-icons">comments</i> Thoughts</a></li>
                            <li role="presentation"><a href="#"><i class="material-icons">music_note</i> Audio</a></li>
						</ul>
                    <li role="presentation"><a href="#"><i class="material-icons">headset_mic</i>My Studio</a></li>	
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="material-icons">settings</i> <span class="caret"></span></a>
						 <ul class="dropdown-menu" role="menu">
                            <li role="presentation">
								<a href="/Mimo/settings">Account Settings</a></li>
                            <li role="presentation"><a href="?a=logout">Logout</a></li>
						</ul>
                </ul>
            </div>
        </div>
    </nav>
	<!--This is below Top Navigation Section -->
	
	<!-- Left Nav Section -->
<div class="row">
		<div id="leftnav" class="col-md-3 hidden-xs">
		
			<!-- Left Nav Profile Section -->
			<div class="row">
				<!-- Header -->
					<!-- Sa 'background-image: url('') mo ilagay yung mga header at profile pic -->
				<div style="width: 100%; height: 170px; background-image:url('assets/img/s.jpg'); margin-left: 15px; 
					background-size: cover; padding-top: 10px;">
					<!--DP-->
						<div style="width: 100px; height: 100px; background-image:url('assets/img/sam.jpg'); border-radius: 50%; 
							background-size: cover; margin: 0 auto; border: 2px solid orange"></div>
							
						<div class="col-md-12" style="background: linear-gradient(transparent,rgba(0,0,0,0.7)); 
												background-size: cover">
						<!-- Full name yung sa h4 at username/stagename yung sa h6 -->
						<a style="color: white" class="text-center user"><h4>Samantha Millos</h4></a>
						<a style="color: white" class="text-center user"><h6>nightingale07</h6></a>
						</div>
				</div>
			
			</div>
			
			<!-- End of Left Nav Profile Section -->

				<div class="row">
					<div id="listNav" class="col-md-12">
						<div class="btn-group btn-group-justified">
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">local_mall</i>
						<p class="">Collection</p>
						</a>
			
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">library_music</i>
						<p class="">Playlist</p>
						</a>
					
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">favorite</i>
						<p class="">Favorites</p>
						</a>
		
					</div>
					<hr />
				</div>
			</div>
		</div>
		<!--End of Left Nav Section -->
		
		
	<!-- Content Section -->
	
	<!-- Post Body (Thoughts) -->
	<div class="col-md-6 belowtn col-xs-12">
		<div class="postcont">
		
		<!--Start to place Here the Post/Thought Templates-->
		<?php $this->load->view('templates/post_temp')?>
		<?php $this->load->view('templates/post_temp')?>
		<?php $this->load->view('templates/post_temp')?>
		
		<!--End of Post Section -->	
		</div>
		<!-- End of Contents Divisions-->
	</div>
	
	
<!-- Third Column Div (Beside Contents)-->
	<div class="col-md-3">
	<br />
	<br />
	<br /><br /><br /><br /><br />

	<!--Add Thought Modal-->
	<div class="modal fade" id="addThought" tabindex="-1" role="dialog" 
		aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header" style="background-color: #f9f9f9">
					<button type="button" class="close" 
						data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">
						<span><i class="material-icons">create</i></span>Share a Thought!
					</h4>
				</div>
            
				<!-- Modal Body -->
				<div class="modal-body" style="background-color: #f9f9f9">
					<form role="form">
					
						<div class="media">
							<div class="media-left">
								<a href="#" >
								<div class="media-object" style="width: 45px; height: 45px; background-image:url('assets/img/sam.jpg'); border-radius: 50%; 
									background-size: cover; border: 2px solid orange"></div>
								</a>
							</div>
							<div class="media-body">
								<textarea class="form-control addthought" name="thought" rows="5" placeholder="Write your thought here..."></textarea>
							</div>	
							
							<div class="modal-footer">
						
							<button type="button" class="btn btn-default"
								data-dismiss="modal">
								Cancel
							</button>
							<button type="submit" class="btn btn-warning">
								Share now!
							</button>
							</div>
						</div>
					
					</form>
					</div>
				</div>
			</div>
		</div>
		<!--End of Add Thought Modal-->
		
		<!--Release Audio Modal-->
		<!--End of Release Audio Modal-->
	</div>
		
</div><!--End of the Whole Row (LeftNav, Contents, Third Column -->
</body>