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
			<br/>
		<br/>
		<br/>
		
<div class="col-md-6" style="padding-top: 40px; ">
<div class="container"><div class="col-lg-12"><p><a href="#"><h3>New MimO Artists</h3></a></p></div>

<br/>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> nightingale07 </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> IzzayBenedicto </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> CarlyyAbends </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> GeloGeloGelo </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> SheiShei </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> JenJen </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> Geisheeeerrr </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> Audeng </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> lalagyan pa  </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> ba ng follow </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> button dito? </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> o subscribe </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> na lang? </p></div></div></a>
<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> Hehe </p></div></div></a>
</div>
</div>
<div class="col-md-5" style="padding-top: 40px; ">
			<h3 style="color: white;" class="user"></i><b style="color: #ff9926; "> Top 20 Mimo Artists</b></h3>
			<div class="row" style="background-color: rgba(255,255,255,0.1); padding: 20px; margin-top: 10px;height: 750px">
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> MoiraDelaTorre </p></div></div></a>
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> InigoooP </p></div></div></a>
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> MarisRacal </p></div></div></a>
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> LittleMmix </p></div></div></a>
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> FifthHarmony </p></div></div></a>
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> BoyceAvenue </p></div></div></a>
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> EdEdEdEdSheee </p></div></div></a>
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> WalaNakomaisip </p></div></div></a>
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> SinoPaBa? </p></div></div></a>				
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> maka-20 lang oh </p></div></div></a>				
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> anuna </p></div></div></a>				
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> Basta </p></div></div></a>				
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> Kunwari </p></div></div></a>				
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> 20 artists </p></div></div></a>				
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> na yung </p></div></div></a>				
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> nakalagay</p></div></div></a>				
				<a href="#"><div class="container"><div class="col-lg-12"><p style="color: white;"><i class="material-icons">music_note</i> huehue</p></div></div></a>				
			
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
</div>
</body>
