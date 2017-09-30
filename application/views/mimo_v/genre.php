<body style="background-color: #333333">
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
								<li role="presentation"><a href="<?php echo base_url('mimo/artist');?>"><i class="material-icons">person</i> Artist</a></li>
								<li role="presentation"><a href="<?php echo base_url('mimo/genre');?>"><i class="material-icons">music_note</i>Genre </a></li>
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
	
<div class="container">
			<a class="btn icon-btn btn-default" href="#"><span class="glyphicon btn-glyphicon glyphicon-user img-circle text-primary"></span>ARTISTS</a>
			<a class="btn icon-btn btn-default" href="#"><span class="glyphicon btn-glyphicon glyphicon-cd img-circle text-success"></span>GENRE</a>
			<a class="btn icon-btn btn-default" href="#"><span class="glyphicon btn-glyphicon glyphicon-equalizer img-circle text-info"></span>CHART</a>
		</div>
		<br/>
		<br/>
		<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>
           <h3 style="color: white;" class="user"></i><b style="color: #ff9926"> LIST OF GENRES</b></h3>
			<a href="<?php echo base_url('mimo/alternativemusic');?>"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">ALTERNATIVE MUSIC</button></a>
			<a href="<?php echo base_url('mimo/blues');?>"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">BLUES</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">CLASSICAL MUSIC</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">COUNTRY MUSIC</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">DANCE MUSIC</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">EASY LISTENING</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">ELECTRONIC MUSIC</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">EUROPEAN MUSIC </button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">HIP HOP / RAP</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">INDIE POP</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">INSPIRATIONAL</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">ASIAN POP</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">JAZZ</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">LATIN MUSIC</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">NEW AGE</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">OPERA</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">POP (Popular Music)</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">R&B / SOUL</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">REGGAE</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">ROCK</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16;">SINGER / SONGWRITER</button></a>
			<a href="#"><button type="button" style="background-color: #DEDBD8; color: black; height: 120px; width: 190px;border: 4px solid #F97A16; ">WORLD MUSIC / BEATS</button></a>
			
          </p>
        </div>
	</div>






	</body>
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
</body>
