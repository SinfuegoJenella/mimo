<body style="background-color: #d9d9d9">

 
	<!--This is below Top Navigation Section -->
<div class="container">
	<!-- Left Nav Section -->
<div class="row">
		<div id="leftnav" class="col-md-3 col-sm-5">
		
			<!-- Left Nav Profile Section -->
			<div class="row" style="margin-left: 10px; margin-right: 10px">
				<!-- Header -->
					<!-- Sa 'background-image: url('') mo ilagay yung mga header at profile pic -->
				<div class="header" style="background-image:url('http://localhost/mimo/assets/img/s.jpg'); width: 100%; height: 170px;
									margin-left: 0px; background-size: cover;">
					<!--DP-->
					<div class="nameBox" style="background: linear-gradient(transparent,rgba(0,0,0,0.2),rgba(0,0,0,0.7)); 
												background-size: cover; margin: 0 0; height: 162px">
						<div class="dpSection media" style="background-image:url('http://localhost/mimo/assets/img/sam.jpg');"></div>
							
						
						<!-- Full name yung sa h4 at username/stagename yung sa h6 -->
						<h4 style="color: white" class="text-center user">Samantha Millos</h4>
						<a style="color: white" class="text-center user"><h6>nightingale07</h6></a>
						</div>
				</div>
			
			</div>
			
			<!-- End of Left Nav Profile Section -->

			<div class="row" style="margin-left: 10px; margin-right: 10px">
					<div id="listNav" class="col-md-12">
						<div class="btn-group btn-group-justified">
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">local_mall</i>
						<p class="">Collection</p>
						</a>
			
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">library_music</i>
						<p class="">Albums</p>
						</a>
					
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">favorite</i>
						<p class="">Favorites</p>
						</a>
		
					</div>
				</div>
			</div>
			
			
			<!--MP3 Player Section-->
		
			
			<!-- MP3 Player Section-->
			
			
			
			
			
		</div>
		<!--End of Left Nav Section -->
			<!--MP3 Player Section-->
			<!-- MP3 Player Section-->
		
		
	<!-- Content Section -->
	
	<!-- Post Body (Thoughts) -->
	<div class="col-md-6 belowtn col-xs-12 col-sm-7">
		<div class="postcont">
		
		<!--Start to place Here the Post/Thought Templates-->
		<?php $this->load->view('templates/post_temp');?>
		<?php $this->load->view('templates/post_temp');?>
		<?php $this->load->view('templates/post_temp');?>
		<?php $this->load->view('templates/post_temp');?>
		<?php $this->load->view('templates/post_temp');?>
		<?php $this->load->view('templates/post_temp');?>

		
		<!--End of Post Section -->	
		</div>
		<!-- End of Contents Divisions-->
	</div>
	
	
<!-- Third Column Div (Beside Contents)-->
	<div class="col-md-3">
	<br /> <br /> <br />
	<div class="row hidden-sm hidden-xs" id="audplayer">
				<div class="col-md-12">
				<div class="wrapper">
					<div class="music music-cover">
						<img src="http://localhost/mimo/assets/img/bp.jpg" alt="" class="cover-img" />
					</div>
					
					<div class="music album-controls">
						<img src="http://localhost/mimo/assets/img/bp.jpg" alt="" class="album-img" />
							<div class="album-info">
								<span class="song-title">Track Title<span>
								<span class="album-artist">Singer</span>
								<span class="album-artist">Album: Into The Pink</span>
								<span class="song-utility">
									<i class="fa fa-home" aria-hidden="true"></i>
									<i class="fa fa-random" aria-hidden="true"></i>
									<i class="fa fa-retweet" aria-hidden="true"></i>
									<i class="fa fa-clock-o" aria-hidden="true"></i>
								</span>
							</div>
					</div>

					<div class="music music-controls">
						<span class="seek-bar">
							<span class="knot"></span>
						</span>
						<span class="song-buffer"></span>
						<span class="song-current-time">00:00</span><span class="play">
							<i class="fa fa-play" aria-hidden="false"></i>
							<span class="song-duration">00:00</span>
						</span>
					</div>
				
				</div>
			</div>
			</div>
	
	<!--Para to sa Modal ng Thoughts at Audio-->
		<audio controls id="music-player" preload="auto" >
				<source src="http://localhost/mimo/assets/audios/sample.mp3" type="audio/mpeg">
					Your browser does not support the audio element.
			</audio>
	<?php $this->load->view('templates/addpostmodal');?>
	<?php $this->load->view('templates/addaudiomodal');?>
	
		<!--Para naman to dun sa fixed button ng release ng thoughts at audio-->
		<?php $this->load->view('include/releasebuttons');?>
	</div>
		
</div><!--End of the Whole Row (LeftNav, Contents, Third Column -->


<script type="text/javascript">
	$('#thoughts').click(function() {
		var txt = $("#textarea").val();
		$.ajax({
			type:'POST',
			url: '<?php echo base_url() ?>mimo/thoughts',
			data:{
				thoughts:txt
			},
			success: function(r){
				console.log(r);
				alert('Posted');
			},
			error: function(e){
				console.log(r);
			}


		});
	});
	
	var _audio = $("#music-player")[0],
  _audioDuration = 0,
  _currentTime = 0,
  _buffered = 0,
  _buuferPlayTime = 5;

$(".music-controls .fa").on("click", function() {
  var $this = $(this);
  $(".music-controls .seek-bar").css("animation-play-state", "running");
  if ($this.hasClass("fa-play")) {
    $this.removeClass("fa-play").addClass("fa-pause");
    _audio.play();
    $(".music-controls .seek-bar").addClass("is-animate");
  } else {
    $(".music-controls .seek-bar").css("animation-play-state", "paused");
    $this.removeClass("fa-pause").addClass("fa-play");
    $(".music-controls .seek-bar");
    _audio.pause();
  }
});

var _setAudioDuration = setInterval(function() {
  _audioDuration = _audio.duration;
  if (_audioDuration > 0) {
    $(".song-duration").html(formatAudio(_audioDuration)).css("opacity", 1);
    $(".song-current-time").css("opacity", 1);
    clearInterval(_setAudioDuration);
  }
}, 500);

var _animateSeek = setInterval(function() {
  if ($(".fa").hasClass("fa-pause")) {
    var _percent = (_audio.currentTime * 100) / _audioDuration;
    $(".is-animate").css("width", _percent + "%");
    
    $(".song-current-time").html(currentTime(_audio.currentTime));
  }
}, 500);

_audio.onended = function() {
  setTimeout(function() {
    _audio.currentTime = 0;
    $(".song-current-time").html(currentTime(_audio.currentTime));
    $(".is-animate").css("width", "0%");
    
    $(".music-controls .fa").removeClass("fa-pause").addClass("fa-play");
  }, 500);
};

var _checkBuffer = setInterval(function() {
  if (_audioDuration > 0) {
    _buffered = (_audio.buffered.end(_audio.buffered.length - 1) * 100) / _audio.duration;

    $(".music-controls .song-buffer").css("width", _buffered + "%");
    if (_buffered > _buuferPlayTime) {
      $(".wrapper").addClass("showMP");
      $(".fa").css({
        "opacity": "1",
        "pointer-events": "auto"
      });
    }
    if (_buffered == 100) {
      clearInterval(_checkBuffer);
    }
  }
}, 500);

function currentTime(songActivity){
  var _mprefix = "";
  var _sprefix = "";
  var _secs = songActivity;
  var _min = Math.floor(_secs/60);

  var _time = Math.floor(((_secs/60) - _min )*60);
  if(_min < 10){
    _mprefix = "0";
  }
  if(_time < 10){
    _sprefix = "0";
  }
  return _mprefix + _min + ":" + _sprefix + _time;
}

function formatAudio(songActivity) {
  var _mprefix = "",
    _sprefix = "",
    _secs = songActivity,
    _min = Math.floor(_secs / 60),
    _time = Math.floor(((_secs / 60) - _min) * 60);

  if (_min < 10) {
    _mprefix = "0";
  }
  if (_time < 10) {
    _sprefix = "0";
  }
  return _mprefix + _min + ":" + _sprefix + _time;
}



function setCookie(c_name,value,exdays)
{
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}

function getCookie(c_name)
{
    var i,x,y,ARRcookies=document.cookie.split(";");
    for (i=0;i<ARRcookies.length;i++)
    {
      x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
      y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
      x=x.replace(/^\s+|\s+$/g,"");
      if (x==c_name)
        {
        return unescape(y);
        }
      }
}

var song = document.getElementsByTagName('audio')[0];
var played = false;
var tillPlayed = getCookie('timePlayed');


function update()
{
    if(!played){
        if(tillPlayed){
        song.currentTime = tillPlayed;
        song.play();
        played = true;
        }
        else {
                song.play();
                played = true;
        }
    }

    else {

    setCookie('timePlayed', song.currentTime);
	
    }
}
setInterval(update,1000);

</script>
<script type="text/javascript">
    if (window.location.hash && window.location.hash == '#_=_') {
        if (window.history && history.pushState) {
            window.history.pushState("", document.title, window.location.pathname);
        } else {
            // Prevent scrolling by storing the page's current scroll offset
            var scroll = {
                top: document.body.scrollTop,
                left: document.body.scrollLeft
            };
            window.location.hash = '';
            // Restore the scroll offset, should be flicker free
            document.body.scrollTop = scroll.top;
            document.body.scrollLeft = scroll.left;
        }
    }
</script>
</body>