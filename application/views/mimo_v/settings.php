<body style="background-color: #1a1a1a">
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
                    <li role="presentation"><a href="#" class="bar">
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
	
	<!--This is below Top Navigation Section -->
	
<div class="container belowtn" style="margin-top: 25px;">
	<div class="row">
		<div class="row">
		
			<div class="col-md-2">
			<!--Free Column-->
			</div>
			
			<div class="col-md-8">
				<div class="" style="background-color: rgba(255,255,255,0.3)">
					<br/>
					
					<div style="width: 400px; height: 170px; background-image:url('http://localhost/mimo/assets/img/s.jpg'); 
						background-size: cover; padding-top: 10px; margin: 0 auto">
						<!--DP-->
						
						<div style="background: linear-gradient(transparent,rgba(0,0,0,0.5)); 
												background-size: cover; height: 162px">
												
						<div style="width: 100px; height: 100px; background-image:url('http://localhost/mimo/assets/img/sam.jpg'); border-radius: 50%; 
							background-size: cover; margin: 0 auto; border: 2px solid orange"></div>
							
							<h4 style="color: white" class="text-center user">Samantha Millos</h4>
							<a style="color: white" class="text-center user"><h6>nightingale07</h6></a>
						</div>
					</div>
			
					<div class="row">
						<h3 class="text-center" style="font-family: helvetica; color: white;">SETTINGS</h3>
					</div>
				</div>
				
				<div class="col-md-12" style="background-color: #f9fbff; border: 2px solid grey">
					
					<br />
					<ul class="nav nav-tabs nav-justified">
						<li class="active"><a style="color: black; border-bottom: orange" data-toggle="tab" href="#personal"><i class="material-icons">library_music</i></span>&nbsp;Personal</a></li>
						<li><a style="color: black" data-toggle="tab" href="#account" ><span><i class="material-icons">account_circle</i></span>&nbsp;Account</a></li>
						<li><a style="color: black" data-toggle="tab" href="#mymusic" ><i class="material-icons">library_music</i></span>&nbsp;My Music</a></li>
					</ul>

						<div class="tab-content">
							<div id="personal" class="tab-pane fade in active">
							<form role="form" method="post" class="form-group">
								<div class="row">
								<br />
									<div class="col-md-3 form-group">
									</div>
									<div class="col-md-6 form-group">
										<label for="">Last Name :</label>
											<input type="text" class="form-control form-inline" name="" value="Millos"/>
										<label for="">First Name :</label>
											<input type="text" class="form-control" name="" value="Samantha"/>
											
										<label for="">Birthday <small>(dd/mm/yyyy)</small>:</label>
											<input type="date" class="form-control" name="" value="1998-09-07"/>
										<label for="">Sex :</label>
											<label class="radio-inline">
												<input type="radio" name="optradio" value="male">Male
											</label>
										<label class="radio-inline">
											<input type="radio" name="optradio" value="female" checked>Female
										</label>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn settingsBtn pull-right">
											Save Changes
										</button>
									</div>
								</div>
							</form>
							</div>
   
							<div id="account" class="tab-pane fade">
							<form role="form" method="post" class="form-group">
								<div class="row">
								<br />
									<div class="col-md-6 form-group">
										<label for="">Username <small>(Stage Name)</small>:</label>
											<input type="text" class="form-control"  name="" value="nightingale07"/>
										<label for="">Password:</label>
											<input type="password" class="form-control" name="" value="samantha" readonly />
								
									<!-- Start Field Set for Change Password -->
									<br />
										<fieldset class="changepass">
											<legend class="changepass">Change Password</legend>
												<div class="control-group">
													<label class="control-label input-label" for="currPass">Current Password :</label>
														<input type="password" class="form-control" name="currPass" value="samantha"/>
													<br />
													<label class="control-label input-label" for="newPass">New Password :</label>
														<input type="password" class="form-control" name="newPass" value=""/>
													<br />
													<label class="control-label input-label" for="verPass">Retype Password :</label>
														<input type="password" class="form-control" name="verPass" value=""/>
												</div>
										</fieldset>
									</div>
								
									<div class="col-md-6 form-group">
										<div class="form-group">
											<label>Change Profile Picture :</label>
											<div class="input-group">
												<span class="input-group-btn">
													<span class="btn btn-default btn-file">
														Choose… <input type="file" id="imgProfile">
													</span>
												</span>
												<input type="text" class="form-control" readonly>
											</div>
											<img id='img-Profile'/>
										</div>
										
										<div class="form-group">
											<label>Change Header Picture :</label>
											<div class="input-group">
												<span class="input-group-btn">
													<span class="btn btn-default btn-file">
														Choose… <input type="file" id="imgHeader">
													</span>
												</span>
												<input type="text" class="form-control" readonly>
											</div>
											<img id='img-Head'/>
										</div>
										
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn settingsBtn pull-right">
											Save Changes
										</button>
									</div>
								</div>
							</form>
							</div>
							
							
							<div id="mymusic" class="tab-pane fade">
							<form role="form" method="post" class="form-group">
								<div class="row">
								<br />
									<h5 class="text-center"><b>My Top 3 Genres</b></h5>
									<div class="col-md-3">
									</div>
									<div class="col-md-6">
										<label for="">1.&nbsp;&nbsp;</label>
											<select class="form-control">
												<!-- Pakilagay ng lang po ito sa database at i-php na lang po :) Listahan ng Music Genres-->
												<option>New Age</option>
												<option>Opera</option>
												<option>Pop (Popular music)</option>
												<option>R&B / Soul</option>
												<option>Reggae</option>
												<option>Rock</option>
												<option>World Music / Beats</option>
											</select>
											
										<label for="">2.&nbsp;&nbsp;</label>
											<select class="form-control">
												<option>Latin Music</option>
												<option>New Age</option>
												<option>Opera</option>
												<option>Pop (Popular music)</option>
												<option>R&B / Soul</option>
												<option>Reggae</option>
												<option>Rock</option>
												<option>World Music / Beats</option>
											</select>
											
										<label for="">3.&nbsp;&nbsp;</label>
											<select class="form-control">
												<option>Alternative Music</option>
												<option>Blues</option>
												<option>Classical Music</option>
												<option>Country Music</option>
												<option>Dance Music</option>
												<option>Easy Listening</option>
												<option>Electronic Music</option>
												<option>European Music (Folk / Pop)</option>
											</select>
									</div>
								</div>	
								
									<div class="row">
										<div class="col-md-12">
											<button type="submit" class="btn settingsBtn pull-right">
											Save Changes
											</button>
										</div>
									</div>
							</form>
							</div>
						</div>
				</div>
			</div>
				
		</div>
		
			<div class="col-md-2">
			
			</div>
			
			
	</div>
		<br/>
		<br/>
		<br/><br/>
		<br/>
		<br/>
</div>		
</body>