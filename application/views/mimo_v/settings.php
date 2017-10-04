<body style="background-color: #333333">
	<!-- Top Nav Bar -->
	
	
	<!--This is below Top Navigation Section -->
	
<div class="container belowtn" style="margin-top: 25px;">
	<div class="row">
		<div class="row">
		
			<div class="col-md-1">
			<!--Free Column-->
			</div>
			<div class="col-md-2">
					
						<div style="width: 140px; height: 140px; background-image:url('http://localhost/mimo/assets/img/sam.jpg'); border-radius: 50%; 
							background-size: cover; margin: 0 auto; "></div>

							<h4 style="color: white" class="text-center user">Samantha Millos</h4>

							<a style="color: white" class="text-center user"><h6>nightingale07</h6></a>
			</div>

			<div class="col-md-8">
				<div class="" style="background: linear-gradient(white,#DCDCDC); border-bottom: 1px solid grey;">
					
					<div class="row">
						<h3 class="text-center" style="color: #1a1a1a;">SETTINGS</h3>
					</div>
				</div>
				
				<div class="col-md-12" style="background-color: rgb(242,242,242);">
					
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
														<input type="password" class="form-control " name="currPass" value="samantha"/>
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
								<label>I'm a(n):</label>
								<div class="row">
								<div class="col-md-3">
									<input type="checkbox" name="mcareer" value="singer"> Singer<br>
									<input type="checkbox" name="mcareer" value="swriter"> Song Writer<br>
									<input type="checkbox" name="mcareer" value="mprod"> Music Producer<br>
									<input type="checkbox" name="mcareer" value="compo"> Composer<br>
								</div>
								
								<div class="col-md-3">
									<input type="checkbox" name="mcareer" value="dj"> DJ<br>
									<input type="checkbox" name="mcareer" value="rockstar"> Rockstar<br>
									<input type="checkbox" name="mcareer" value="instrum"> Instrumentalist<br>
									<input type="checkbox" name="mcareer" value="bgsinger"> Background Singer<br>
								</div>
								
								<div class="col-md-3">
									<input type="checkbox" name="mcareer" value="lyricist"> Lyricist<br>
									<input type="checkbox" name="mcareer" value="bandmember"> Band Member<br>
									<input type="checkbox" name="mcareer" value="pmwriter"> Production Music Writer<br>
									<input type="checkbox" name="mcareer" value="sounddesigner"> Sound Designer<br>
								</div>
								
								<div class="col-md-3">
									<input type="checkbox" name="mcareer" value="jwriter"> Jingle Writer<br>
									<input type="checkbox" name="mcareer" value="accomp"> Accompanist<br>
									<input type="checkbox" name="mcareer" value="ssinger"> Session Singer<br>
									<input type="checkbox" name="mcareer" value="smusician"> Session Musician<br>
								</div>
								
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
						</div>
				</div>
			</div>
				
		</div>
		
			<div class="col-md-1">
				<!--Thoughts&Audio Modal-->
				<?php $this->load->view('templates/addpostmodal');?>
				<?php $this->load->view('templates/addaudiomodal');?>
			</div>
			
			
	</div>
		<br/>
		<br/>
		<br/><br/>
		<br/>
		<br/>
</div>		
</body>
