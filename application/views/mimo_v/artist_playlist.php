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
		<h3 class="txt">Artist</h3>
	</div>
			<!-- Table starts (table header)-->
	<div class="tbl pre-scrollable " style="max-height:500px; ">
		<table class="table table-hover ">
			<thead class="no-hover">
				<tr class="p text-center ">
					<th> </th>
					<th >Title</th>
					<!--<th>Artist</th>-->
					<th class="hidden-xs">Daily Plays</th>
				</tr>
			</thead>
						<!-- list of songs -->
			<tbody>
				<tr class="p color-hover">
					<!-- play button for music-->
					<td><i id="play-pause-button1" class="fa fa-play-circle" style="font-size:36px;"></i> </td>
					<td>New Rules</td>
					<!--<td>Dua Lipa</td>-->
					<td >
						<!-- maging ellipsis for tablet and phone (shows the daily plays)-->
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays" >
						<span class="glyphicon glyphicon-option-vertical" aria-hidden="true"> </span> </button>
						<span class="hidden-xs">1540</span> 
					</td>
	
				</tr>
			
				<tr class="p color-hover">
					<td><i id="play-pause-button2" class="fa fa-play-circle" style="font-size:36px;"></i></td>
					<td>Too Good At Goodbyes</td>
					<!--<td>Sam Smith</td>-->
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button> 
						<span class="hidden-xs">1300</span>
					</td>
	
				</tr>

				<tr class="p color-hover">
					<td><i id="play-pause-button3" class="fa fa-play-circle" style="font-size:36px;"></i></td>
					<td>Havana</td>
					<!--<td>Camila Cabello</td>-->
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button>
						<span class="hidden-xs">1120</span>
					</td>
	
				</tr>

				<tr class="p color-hover">
					<td><i id="play-pause-button4" class="fa fa-play-circle" style="font-size:36px;"></i></td>
					<td>rockstar</td>
					<!--<td>21 Savage</td>-->
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button>
						<span class="hidden-xs">906</span>
					</td>
	
				</tr>

				<tr class="p color-hover">
					<td><i id="play-pause-button5" class="fa fa-play-circle" style="font-size:36px;"></i></td>
					<td>Silence</td>
					<!--<td>Khalid</td>-->
					<td>
						<button type="button" class="btn visible-xs" style="background: transparent" data-toggle="popover" data-placement="bottom" data-trigger="hover" title="" data-content="Daily Plays">
						<span class="glyphicon glyphicon-option-vertical " aria-hidden="true"> </span> </button>
						<span class="hidden-xs">850</span>
					</td>
	
				</tr>
				
				
				
				
				
				

			</tbody>


		</table>

	</div>
	<!--Thoughts&Audio Modal-->
				<?php $this->load->view('templates/addpostmodal');?>
				<?php $this->load->view('templates/addaudiomodal');?>
</div>

</body>

<script>
	var audio1 = new Audio("http://localhost/mimo/assets/audios/Kalimba.mp3");

$('#play-pause-button1').on("click",function(){
  if($(this).hasClass('fa-play-circle'))
   {
     $(this).removeClass('fa-play-circle');
     $(this).addClass('fa-pause-circle');
     audio1.play();
   }
  else
   {
     $(this).removeClass('fa-pause-circle');
     $(this).addClass('fa-play-circle');
     audio1.pause();
   }
});

audio1.onended = function() {
     $("#play-pause-button1").removeClass('fa-pause-circle');
     $("#play-pause-button1").addClass('fa-play-circle');
};


var audio2 = new Audio("http://localhost/mimo/assets/audios/Maid.mp3");

$('#play-pause-button2').on("click",function(){
  if($(this).hasClass('fa-play-circle'))
   {
     $(this).removeClass('fa-play-circle');
     $(this).addClass('fa-pause-circle');
     audio2.play();
   }
  else
   {
     $(this).removeClass('fa-pause-circle');
     $(this).addClass('fa-play-circle');
     audio2.pause();
   }
});

audio2.onended = function() {
     $("#play-pause-button2").removeClass('fa-pause-circle');
     $("#play-pause-button2").addClass('fa-play-circle');
};

var audio3 = new Audio("http://localhost/mimo/assets/audios/Piano.mp3");

$('#play-pause-button3').on("click",function(){
  if($(this).hasClass('fa-play-circle'))
   {
     $(this).removeClass('fa-play-circle');
     $(this).addClass('fa-pause-circle');
     audio3.play();
   }
  else
   {
     $(this).removeClass('fa-pause-circle');
     $(this).addClass('fa-play-circle');
     audio3.pause();
   }
});

audio3.onended = function() {
     $("#play-pause-button3").removeClass('fa-pause-circle');
     $("#play-pause-button3").addClass('fa-play-circle');
};

var audio4 = new Audio("http://localhost/mimo/assets/audios/sample.mp3");

$('#play-pause-button4').on("click",function(){
  if($(this).hasClass('fa-play-circle'))
   {
     $(this).removeClass('fa-play-circle');
     $(this).addClass('fa-pause-circle');
     audio4.play();
   }
  else
   {
     $(this).removeClass('fa-pause-circle');
     $(this).addClass('fa-play-circle');
     audio4.pause();
   }
});

audio4.onended = function() {
     $("#play-pause-button4").removeClass('fa-pause-circle');
     $("#play-pause-button4").addClass('fa-play-circle');
};

var audio5 = new Audio("http://localhost/mimo/assets/audios/Sleep.mp3");

$('#play-pause-button5').on("click",function(){
  if($(this).hasClass('fa-play-circle'))
   {
     $(this).removeClass('fa-play-circle');
     $(this).addClass('fa-pause-circle');
     audio5.play();
   }
  else
   {
     $(this).removeClass('fa-pause-circle');
     $(this).addClass('fa-play-circle');
     audio5.pause();
   }
});

audio5.onended = function() {
     $("#play-pause-button5").removeClass('fa-pause-circle');
     $("#play-pause-button5").addClass('fa-play-circle');
};
	</script>
