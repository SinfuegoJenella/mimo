<body style="background-color: #e1e1e1">
	<!-- Top Nav Bar -->
		<br>
		
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="http://localhost/mimo/assets/img/ny.jpg" alt="Los Angeles" style="width:100%;height: 350px">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="http://localhost/mimo/assets/img/mimo1.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="http://localhost/mimo/assets/img/mimo1.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="container" style="margin-top: 10px" >

	<div class="row" class="" style="background-color:white">
		<div class="vtab">
			<button class="tablinks" onclick="openTab(event, 'Audios')" id="defaultOpen">Audios</button>
			<button class="tablinks" onclick="openTab(event, 'Artists')">Artist</button>
			<button class="tablinks" onclick="openTab(event, 'Videos')">Videos</button>
		</div>

		<div id="Audios" class="vtabcontent">
			<h3>Audios</h3>
			<?php //$this->load->view('templates/s_audio')?>
				<div class="audCard" style="width:100px;float:left">
				<img src="http://localhost/mimo/assets/img/bp.jpg" width="100px" height="100px">
				</div>
		</div>

		<div id="Artists" class="vtabcontent">
			<h3>Artist</h3>
				<p>Paris is the capital of France.</p> 
		</div>

		<div id="Videos" class="vtabcontent">
			<h3>Videos</h3>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
				<p>Tokyo is the capital of Japan.</p>
		</div>
	</div>
</div>

<div class="container-fluid" style="margin-top: 0px" >
	<div class="row">
		
	</div>
</div>
</body>
<script>
function openTab(evt, tabName) {
    var i, vtabcontent, tablinks;
    vtabcontent = document.getElementsByClassName("vtabcontent");
    for (i = 0; i < vtabcontent.length; i++) {
        vtabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
