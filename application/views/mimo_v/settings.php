<body style="background-color: #1a1a1a">
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
                            <li role="presentation"><a href="#"><i class="material-icons">comments</i> Thoughts</a></li>
                            <li role="presentation"><a href="#"><i class="material-icons">music_note</i> Audio</a></li>
						</ul>
                    <li role="presentation"><a href="#"><i class="material-icons">headset_mic</i>My Studio</a></li>	
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="material-icons">settings</i> <span class="caret"></span></a>
						 <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">Account Settings</a></li>
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
			<div class="col-md-1">
			</div>
			
			<div class="col-md-10">
				<div class="" style="background-color: rgba(255,255,255,0.3)">
					<br/>
					<div style="width: 400px; height: 170px; background-image:url('http://localhost/assets/img/s.jpg'); 
					background-size: cover; padding-top: 10px; margin: 0 auto">
					<!--DP-->
					<div style="width: 100px; height: 100px; background-image:url('http://localhost/assets/img/sam.jpg'); border-radius: 50%; 
						background-size: cover; margin: 0 auto; border: 2px solid orange"></div>
							
					<div class="col-md-12" style="background: linear-gradient(transparent,rgba(0,0,0,0.5)); 
												background-size: cover">
						<a style="color: white" class="text-center user"><h4>Samantha Millos</h4></a>
						<a style="color: white" class="text-center user"><h6>nightingale07</h6></a>
					</div>
				</div>
			<br />
			
				<div class="row">
					<h3 class="text-center" style=" font-family:kristen ITC; color:white;">Edit Settings</h3>
					<br />
				</div>
			</div>
				<div class="col-md-12" style="background-color: #f9fbff; border: 2px solid grey">
					<form role="form" method="post" class="form-group">
						<br />
						<div class="row">
						<h4>&nbsp;&nbsp;&nbsp;<span><i class="material-icons">face</i></span>&nbsp;<u>PERSONAL</u></h4>
						<hr />
							<div class=" col-md-3 form-group">
								<label for="">Last Name :</label>
								<input type="text" class="form-control form-inline" name="" value="Millos"/>
							</div>
							
							<div class="col-md-3 form-group">
								<label for="">First Name :</label>
								<input type="text" class="form-control" name="" value="Samantha"/>
							</div>	
							
							<div class="col-md-3 form-group">
								<label for="">Birthday <small>dd/mm/yyyy</small>:</label>
								<input type="date" class="form-control" name="" value="1998-09-07"/>
							</div>	
							
							<div class="col-md-3 form-group">
								<label for="">Sex :</label>
								<label class="radio-inline">
									<input type="radio" name="optradio" value="male">Male
								</label>
								<label class="radio-inline">
									<input type="radio" name="optradio" value="female" checked>Female
								</label>
							</div>	
							
						</div>
						<br />
						
						<div class="row">
						<h4>&nbsp;&nbsp;&nbsp;<span><i class="material-icons">account_circle</i></span>&nbsp;<u>ACCOUNT</u></h4>
						<hr />
						
								<div class="col-md-6 form-group">
								<label for="">Username <small>(Stage Name)</small>:</label>
								<input type="text" class="form-control"  name="" value="nightingale07"/>
								</div>
								
								<div class="col-md-6 form-group">
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
								<!--End-->
								</div>
								
							
						</div>
						
						<div class="row">
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
							</div>
							
							<div class="col-md-6 form-group">
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
						
						<br />
						
						
						<div class="row">
						<h4>&nbsp;&nbsp;&nbsp;<span><i class="material-icons">library_music</i></span>&nbsp;<u>MUSIC CAREER</u></h4>
							<hr />
								<h5>&nbsp;&nbsp;&nbsp;<b>My Top 3 Genres</b></h5>
								<div class="col-md-4 form-inline">
								<label for="">1.&nbsp;&nbsp;</label>
									<select class="form-control">
										<!-- Pakilagay ng lang po ito sa database at i-php na lang po :) Listahan ng Music Genres-->
										<option value="alternative" disabled>Alternative Music</option>
										<option value="blues" disabled>Blues</option>
										<option value="classical" disabled>Classical Music</option>
										<option value="country" disabled>Country Music</option>
										<option>Dance Music</option>
										<option>Easy Listening</option>
										<option>Electronic Music</option>
										<option>European Music (Folk / Pop)</option>
										<option>Hip Hop / Rap</option>
										<option value="indie" disabled>Indie Pop</option>
										<option>Inspirational (incl. Gospel)</option>
										<option>Asian Pop (J-Pop, K-pop, OPM)</option>
										<option>Jazz</option>
										<option>Latin Music</option>
										<option>New Age</option>
										<option>Opera</option>
										<option>Pop (Popular music)</option>
										<option>R&B / Soul</option>
										<option>Reggae</option>
										<option>Rock</option>
										<option>World Music / Beats</option>
									</select>
								</div>
								
								<div class="col-md-4 form-inline">
								<label for="">2.&nbsp;&nbsp;</label>
									<select class="form-control">
										<option >Alternative Music</option>
										<option>Blues</option>
										<option>Classical Music</option>
										<option>Country Music</option>
										<option>Dance Music</option>
										<option>Easy Listening</option>
										<option>Electronic Music</option>
										<option>European Music (Folk / Pop)</option>
										<option>Hip Hop / Rap</option>
										<option>Indie Pop</option>
										<option>Inspirational (incl. Gospel)</option>
										<option>Asian Pop (J-Pop, K-pop, OPM)</option>
										<option>Jazz</option>
										<option>Latin Music</option>
										<option>New Age</option>
										<option>Opera</option>
										<option>Pop (Popular music)</option>
										<option>R&B / Soul</option>
										<option>Reggae</option>
										<option>Rock</option>
										<option>World Music / Beats</option>
									</select>
								</div>
								
								<div class="col-md-4 form-inline">
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
										<option>Hip Hop / Rap</option>
										<option>Indie Pop</option>
										<option>Inspirational (incl. Gospel)</option>
										<option>Asian Pop (J-Pop, K-pop, OPM)</option>
										<option>Jazz</option>
										<option>Latin Music</option>
										<option>New Age</option>
										<option>Opera</option>
										<option>Pop (Popular music)</option>
										<option>R&B / Soul</option>
										<option>Reggae</option>
										<option>Rock</option>
										<option>World Music / Beats</option>
									</select>
									<br />
									<br />
									<br />
									<br />
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
						<br />
					<div class="row">
						<div class="col-md-12 ">
							<div class="pull-right">
							<button type="button" class="btn btn-default">Cancel</button>
							<button type="button" class="btn btn-primary">Save</button>
							</div>
						<br />
						</div>
						</div>
					</div>
					
				</form>
				</div>
				
				
			</div>
			<div class="col-md-1">
			</div>
		</div>
		<br/>
					<br/>
					<br/><br/>
					<br/>
					<br/>
	</div>		

	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
</div><!--End of the Whole Row (LeftNav, Contents, Third Column -->
</body>