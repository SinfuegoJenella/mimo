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
					
						<div style="width: 140px; height: 140px; background-image:url('<?php echo $users[0]['picture'] ?>'); border-radius: 50%; 
							background-size: cover; margin: 0 auto; "></div>

							<h4 style="color: white" class="text-center user"><?php echo $users[0]['firstname'].' '.$users[0]['lastname'] ?></h4>

							<a href="http://localhost/mimo/mimo/myStudio?username=<?php echo $users[0]['username'];?>" style="color: white" class="text-center user"><h6><?php echo $users[0]['username'] ?></h6></a>
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
								<form role="form" method="post" class="form-group" enctype="multipart/form-data" >
								<div class="row">
								<br />
									<div class="col-md-6 form-group">
									
										<label for="lastname">Last Name :</label>
											<input type="text" class="form-control form-inline" name="lastname" id="lastname" value="<?php echo $users[0]['lastname'] ?>" />
										<label for="username">Username <small>(Stage Name)</small>:</label>
											<input type="text" class="form-control"  name="username" id="username" value="<?php echo $users[0]['username'] ?>" /> 
										<label>Change Profile Picture :</label>
											<div class="input-group">
												<span class="input-group-btn">
													<span class="btn btn-default btn-file">
														Choose… <input type="file" id="imgProfile" name="imgProfile" accept="image/*">
													</span>
												</span>
												<input type="text" class="form-control" readonly>
											</div>
											<img id='img-Profile'/>
									</div>

								
									<div class="col-md-6 form-group">
										<div class="form-group">
											<label for="firstname">First Name :</label>
											<input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo $users[0]['firstname'] ?>" />
											<label for="">Password:</label>
											<div class="input-group">
												<input type="password" class="form-control" name="" value="samanthagerrergergtrtgrrgtercfrgetcgtrbet" readonly />
													<span class="input-group-btn">
														<a id="changepass"class="btn btn-default" onclick="document.getElementById('demo').style.display='block'">
														<i class="glyphicon glyphicon-edit"></i> Send Link to Change Password
														</a>
													</span>	
											</div>
												<p id="demo" style="display:none; color: #565656">
													<small>The email was sent to <?php echo $users[0]['email'];?> 
													with the link to change your password.</small></p>
										</div>
										
										<div class="form-group">
											<label>Change Header Picture :</label>
											<div class="input-group">
												<span class="input-group-btn">
													<span class="btn btn-default btn-file">
														Choose… <input type="file" id="imgHeader" name="imgHeader" accept="image/*">
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
									<button type="submit" class="btn settingsBtn pull-right" name="account">
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
											<select class="form-control" id="genre1" name="genre1">
												<!-- Pakilagay ng lang po ito sa database at i-php na lang po :) Listahan ng Music Genres-->
											<?php
											foreach($genre as $s){
												$id = $this->login->isLoggedIn();
												foreach($about as $a){
												if($a['user_id']==$id)
												{  
													
													if($a['genre1']==NULL)
													{
													echo '<option value="'.$s['name'].'">'.$s['name'].'</option>';
													}
													else{
													
														if($a['genre1']==$s['name'])
															{
															echo '<option selected = "selected" value="'.$s['name'].'">'.$s['name'].'</option>';
															}
														else{
															echo '<option value="'.$s['name'].'">'.$s['name'].'</option>';
															}
														}
												}
																	}
																	}
											?>
											</select>
											
										<label for="genre2">2.&nbsp;&nbsp;</label>
											<select class="form-control" id="genre2" name="genre2"> 
												<?php
											foreach($genre as $s){
												$id = $this->login->isLoggedIn();
												foreach($about as $a){
												if($a['user_id']==$id)
												{  
													
													if($a['genre2']==NULL)
													{
													echo '<option value="'.$s['name'].'">'.$s['name'].'</option>';
													}
													else{
													
														if($a['genre2']==$s['name'])
															{
															echo '<option selected = "selected" value="'.$s['name'].'">'.$s['name'].'</option>';
															}
														else{
															echo '<option value="'.$s['name'].'">'.$s['name'].'</option>';
															}
														}
												}
																	}
																	}
											?>
											</select>
											
										<label for="genre3">3.&nbsp;&nbsp;</label>
											<select class="form-control" id="genre3" name="genre3">
												<?php
											foreach($genre as $s){
												$id = $this->login->isLoggedIn();
												foreach($about as $a){
												if($a['user_id']==$id)
												{  
													
													if($a['genre3']==NULL)
													{
													echo '<option value="'.$s['name'].'">'.$s['name'].'</option>';
													}
													else{
													
														if($a['genre3']==$s['name'])
															{
															echo '<option selected = "selected" value="'.$s['name'].'">'.$s['name'].'</option>';
															}
														else{
															echo '<option value="'.$s['name'].'">'.$s['name'].'</option>';
															}
														}
												}
																	}
																	}
											?>
											</select>
									</div>
								</div>	
								
									<div class="row">
							<div class="col-md-12">
								<label>I'm a(n):</label>
								<div class="row">
							
								<div class="col-md-3">
					
									<input type="checkbox" name="mcareer[]" value="Singer"> Singer<br>
									<input type="checkbox" name="mcareer[]" value="Song Writer"> Song Writer<br>
									<input type="checkbox" name="mcareer[]" value="Music Producer"> Music Producer<br>
									<input type="checkbox" name="mcareer[]" value="Composer"> Composer<br>
								</div>
								
								<div class="col-md-3">
									<input type="checkbox" name="mcareer[]" value="DJ"> DJ<br>
									<input type="checkbox" name="mcareer[]" value="Rockstar"> Rockstar<br>
									<input type="checkbox" name="mcareer[]" value="Instrumentalist"> Instrumentalist<br>
									<input type="checkbox" name="mcareer[]" value="Background Singer"> Background Singer<br>
								</div>
								
								<div class="col-md-3">
									<input type="checkbox" name="mcareer[]" value="Lyricist">Lyricist<br>
									<input type="checkbox" name="mcareer[]" value="Band Member"> Band Member<br>
									<input type="checkbox" name="mcareer[]" value="Production Music Writer"> Production Music Writer<br>
									<input type="checkbox" name="mcareer[]" value="Sound Designer"> Sound Designer<br>
								</div>
								
								<div class="col-md-3">
									<input type="checkbox" name="mcareer[]" value="Sound Designer"> Sound Designer<br>
									<input type="checkbox" name="mcareer[]" value="Accompanist"> Accompanist<br>
									<input type="checkbox" name="mcareer[]" value="Session Singer"> Session Singer<br>
									<input type="checkbox" name="mcareer[]" value="Session Musician"> Session Musician<br>
								</div>
								
								</div>
							</div>
						</div>
						
									<div class="row">
										<div class="col-md-12">
											<button type="submit" class="btn settingsBtn pull-right" name="mymusic">
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

<script type="text/javascript">
	$('#changepass').click(function(e) {
		e.preventDefault();
		var email = '<?php echo $users[0]['email'];?> ';
		$.ajax({
			type: 'POST',
			url: '<?php echo base_url() ?>mimo/changepass',
			data:{
				email:email
			},
			success: function(s){
				console.log(s)
			},
			error: function(e){
				console.log(e)
			}
		});
	});

</script>

</body>
