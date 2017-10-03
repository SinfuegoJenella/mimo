<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/mimo/assets/css/image.css">
	<script type="text/javascript" src="../assets/js/charts.js"></script>
</head>

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
                            <li role="presentation"><a href="#">Logout</a></li>
						</ul>
                </ul>
            </div>
        </div>
    </nav>

</br> </br>
<div class="container">
	<div class="margin">
		<h3 class="txt">Global Top 50</h3>
	</div>
			<!-- Table starts (table header)-->
	<div class="tbl">
		<table class="table table-hover ">
			<thead class="no-hover">
				<tr class="p text-center ">
					<th> </th>
					<th >Title</th>
					<th>Artist</th>
					<th class="hidden-xs">Daily Plays</th>
				</tr>
			</thead>
						<!-- list of songs -->
			<tbody>
				<tr class="p color-hover">
					<!-- play button for music-->
					<td><button type="button" class="btn btn-circle "><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>New Rules</td>
					<td>Dua Lipa</td>
					<td >
						<!-- maging ellipsis for tablet and phone (shows the daily plays)-->
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays" >
						<span class="glyphicon glyphicon-option-vertical" aria-hidden="true"> </span> </button>
						<span class="hidden-xs">1540</span> 
					</td>
	
				</tr>
			
				<tr class="p color-hover">
					<td><button type="button" class="btn btn-circle"><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>Too Good At Goodbyes</td>
					<td>Sam Smith</td>
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button> 
						<span class="hidden-xs">1300</span>
					</td>
	
				</tr>

				<tr class="p color-hover">
					<td><button type="button" class="btn btn-circle"><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>Havana</td>
					<td>Camila Cabello</td>
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button>
						<span class="hidden-xs">1120</span>
					</td>
	
				</tr>

				<tr class="p color-hover">
					<td><button type="button" class="btn btn-circle"><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>rockstar</td>
					<td>21 Savage</td>
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button>
						<span class="hidden-xs">906</span>
					</td>
	
				</tr>

				<tr class="p color-hover">
					<td><button type="button" class="btn btn-circle"><span class="glyphicon glyphicon-play" aria-hidden="true"> </span> </button></td>
					<td>Silence</td>
					<td>Khalid</td>
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button>
						<span class="hidden-xs">850</span>
					</td>
	
				</tr>

			</tbody>


		</table>

	</div>
</div>

</body>