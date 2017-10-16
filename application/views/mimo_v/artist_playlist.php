

<body style="background-color: #e1e1e1">

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
                    <li class="active" role="presentation"><a href="#" class="bar">
						<i class="material-icons bar">speaker</i><p class="bar hidden-sm"> Music Hall</p></a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" class="bar">
						<i class="material-icons bar">equalizer</i><p class="hidden-sm bar"> Browse</p><span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li role="presentation"><a href="<?php echo base_url('mimo/artist');?>"><i class="material-icons">person</i> Artist</a></li>
								<li role="presentation"><a href="<?php echo base_url('mimo/genre');?>"><i class="material-icons">music_note</i>Genre </a></li>
								<li role="presentation"><a href="<?php echo base_url('mimo/charts');?>"><i class="material-icons">show_chart</i>Chart </a></li>
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
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" class="bar">
						<i class="material-icons">settings</i> <span class="caret"></span></a>
						 <ul class="dropdown-menu" role="menu">
                     <li role="presentation">
							        	<a href="<?php echo base_url('mimo/settings');?>">Account Settings</a></li>
                            <li role="presentation"><a href="?a=logout">Logout</a></li>

						</ul>
                </ul>
            </div>
        </div>
    </nav>

</br> </br>
<div class="container">
	<div class="margin">
			<div style="float: left; padding-top:6%;"> <!-- artist picture -->
				<div><img src="http://localhost/mimo/assets/img/1.jpg" class="img-circle  "></a></div>
				
			</div>
			<div><!-- artist name -->
			<div style="padding-top:12%;padding-left:23%"><h3 class="txt">Artist Name</h3></div>
			</div>
	</div>
			<!-- Table starts (table header)-->
	<div class="tbl">
		<table class="table table-hover ">
			<thead class="no-hover">
				<tr class="p text-center ">
					<th> </th>
					<th >Title</th>
					
					<th class="hidden-xs">Daily Plays</th>
				</tr>
			</thead>
						<!-- list of songs -->
			<tbody>
				<tr class="p color-hover">
					<!-- play button for music-->
					<td><button type="button" class="btn btn-circle "><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>New Rules</td>
					
					<td >
						
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays" >
						<span class="glyphicon glyphicon-option-vertical" aria-hidden="true"> </span> </button>
						<span class="hidden-xs">1540</span> 
					</td>
	
				</tr>
			
				<tr class="p color-hover">
					<td><button type="button" class="btn btn-circle"><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>Too Good At Goodbyes</td>
					
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button> 
						<span class="hidden-xs">1300</span>
					</td>
	
				</tr>

				<tr class="p color-hover">
					<td><button type="button" class="btn btn-circle"><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>Havana</td>
					
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button>
						<span class="hidden-xs">1120</span>
					</td>
	
				</tr>

				<tr class="p color-hover">
					<td><button type="button" class="btn btn-circle"><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>rockstar</td>
					
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button>
						<span class="hidden-xs">906</span>
					</td>
	
				</tr>

				<tr class="p color-hover">
					<td><button type="button" class="btn btn-circle"><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>Silence</td>
				
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button>
						<span class="hidden-xs">850</span>
					</td>
	
				</tr>

			</tbody>


		</table>

	</div>
	<!--End table -->

	</div>
	<!--Thoughts&Audio Modal-->
				<?php $this->load->view('templates/addpostmodal');?>
				<?php $this->load->view('templates/addaudiomodal');?>
</div>

</body>
