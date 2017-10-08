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
					
						<div style="width: 140px; height: 140px; background-image:url('<?php echo $users[0]['picture']; ?>'); border-radius: 50%; 
							background-size: cover; margin: 0 auto; "></div>

							<h4 style="color: white" class="text-center user"><?php echo $users[0]['firstname'].' '.$users[0]['lastname'];?></h4>

							<a href="http://localhost/mimo/mimo/myStudio?username=<?php echo $users[0]['username'];?> " style="color: white" class="text-center user"><h6><?php echo $users[0]['username'];?></h6></a>
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
						<li class="active"><a data-toggle="tab" href="#account" ><span><i class="material-icons">account_circle</i></span>&nbsp;Account</a></li>
						<li><a data-toggle="tab" href="#mymusic" ><i class="material-icons">library_music</i></span>&nbsp;My Music</a></li>
					</ul>

						<div class="tab-content">
   
							<div id="account" class="tab-pane fade in active">
								<form role="form" method="post" class="form-group">
								<div class="row">
								<br />
									<div class="col-md-6 form-group">
									
										<label for="">Last Name :</label>
											<input type="text" class="form-control form-inline" name="" value="Millos"/>
										<label for="">Username <small>(Stage Name)</small>:</label>
											<input type="text" class="form-control"  name="" value="nightingale07"/>
										<label>Change Profile Picture :</label>
											<div class="input-group">
												<span class="input-group-btn">
													<span class="btn btn-default btn-file">
														Choose… <input type="file" id="imgProfile" accept="image/*">
													</span>
												</span>
												<input type="text" class="form-control" readonly>
											</div>
											<img id='img-Profile'/>
									</div>

								
									<div class="col-md-6 form-group">
										<div class="form-group">
											<label for="">First Name :</label>
											<input type="text" class="form-control" name="" value="Samantha"/>
											<label for="">Password:</label>
											<div class="input-group">
												<input type="password" class="form-control" name="" value="samanthagerrergergtrtgrrgtercfrgetcgtrbet" readonly />
													<span class="input-group-btn">
														<a class="btn btn-default" onclick="document.getElementById('demo').style.display='block'">
														<i class="glyphicon glyphicon-edit"></i> Send Link to Change Password
														</a>
													</span>	
											</div>
												<p id="demo" style="display:none; color: #565656">
													<small>The email was sent to sammillos@gmail.com 
													with the link to change your password.</small></p>
										</div>
										
										<div class="form-group">
											<label>Change Header Picture :</label>
											<div class="input-group">
												<span class="input-group-btn">
													<span class="btn btn-default btn-file">
														Choose… <input type="file" id="imgHeader" accept="image/*">
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
