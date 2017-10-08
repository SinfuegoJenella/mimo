<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/mimo/assets/css/image.css">
	<script type="text/javascript" src="../assets/js/charts.js"></script>
</head>
</style>
<body style="background-color: #1a1a1a">
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
                            <li role="presentation"><a href="<?php echo base_url('mimo/artist');?>"><i class="material-icons">person</i>Artist </a></li>
                            <li role="presentation"><a href="<?php echo base_url('mimo/genre');?>"><i class="material-icons">music_note</i>Genre </a></li>
                            <li role="presentation"><a href="#"><i class="material-icons">show_chart</i>Chart </a></li>
                        </ul>
                    </li>
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="material-icons">file_upload</i>Release <span class="caret"></span></a>
						 <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="" data-toggle="modal" data-target="#addThought"><i class="material-icons">comments</i> Thoughts</a></li>
                            <li role="presentation"><a href="#"><i class="material-icons">music_note</i> Audio</a></li>
						</ul>
                    <li role="presentation"><a href="<?php echo base_url('mimo/myStudio');?>"><i class="material-icons">headset_mic</i>My Studio</a></li>	
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="material-icons">settings</i> <span class="caret"></span></a>
						 <ul class="dropdown-menu" role="menu">
                            <li role="presentation">
								<a href="/Mimo/settings">Account Settings</a></li>
                            <li role="presentation"><a href="#">Logout</a></li>
						</ul>
                </ul>
            </div>
        </div>
    </nav>

</br> </br>
<div class="container">
	<div class="margin">
		<br><h3 class="txt" style="color: white;">Alternative Music</h3>
	</div>
			<!-- Table starts (table header)-->
	<div class="tbl">
		<table class="table">
			<thead>
				<tr class="p text-center ">
					<th> </th>
					<th style="color: white;">Title</th>
					<th style="color: white;">Artist</th>
					<th class="hidden-xs" style="color: white;"> </th>
				</tr>
			</thead>
						<!-- list of songs -->
			<tbody>
				<tr>
					<!-- play button for music-->
					<td><i class="material-icons" style="color: #F97A16;;">music_note</i> </span> </button></td>
					<td style="color: white;">Perfect Places</td>
					<td style="color: white;">Lorde</td>
					<td >
						<!-- maging ellipsis for tablet and phone (shows the daily plays)-->
						<button type="button">Add to Favourites</button> 
					</td>
	
				</tr>
			
				<tr>
					<td><i class="material-icons" style="color: #F97A16;;">music_note</i> </span> </button></td>
					<td style="color: white;">Thunder</td>
					<td style="color: white;">Imagine Dragons</td>
					<td>
						<button type="button">Add to Favourites</button> 
					</td>
	
				</tr>

				<tr>
					<td><i class="material-icons" style="color: #F97A16;;">music_note</i></span> </button></td>
					<td style="color: white;">Lay It On Me</td>
					<td style="color: white;">Vance Joy</td>
					<td>
						<button type="button">Add to Favourites</button> 
					</td>
	
				</tr>

				<tr >
					<td><i class="material-icons" style="color: #F97A16;;">music_note</i></span> </button></td>
					<td style="color: white;">Whole Wide World</td>
					<td style="color: white;">Cage the elephant</td>
					<td>
						<button type="button">Add to Favourites</button> 
					</td>
	
				</tr>

				<tr>
					<td><i class="material-icons" style="color: #F97A16;;">music_note</i></span> </button></td>
					<td style="color: white;">Up All Night</td>
					<td style="color: white;">Beck</td>
					<td>
						<button type="button">Add to Favourites</button> 
					</td>
	
				</tr>

			</tbody>


		</table>

	</div>
</div>

</body>