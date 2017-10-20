<body id="body">

<!-- count particles -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#">
                <!--Logo-->
                <?php $this->load->view('include/mimologo')?>
                <!---->
                <strong>MimO</strong> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			</div>	
			
			  <div class="collapse navbar-collapse" id="navcol-1">
				 <ul class="nav navbar-nav navbar-right">
					<li class="presentation" role="presentation"><a class="disabled">
					<p class=""> No account yet? </p></a></li>
                    <li class="" role="presentation"><a href="<?php echo base_url('accounts');?>" class=" btn bar">
					<p class="hidden-sm"><b>Sign Up!</b></p></a></li>
				</ul>
				</div>
             
        </div>
    </nav>
    <!-- Sign up Form -->
    <div class="container">
        <div id="login-box">
            <div class="row">
                <div class="col-md-12">
                    <p><i class="material-icons">public</i> Sign In to your Mimo Account</p>
                    <form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
                    <div id="log"></div>
                        <div class="form-group">
                        <label class="sr-only" for="username" >Stage Name</label>
                        <input type="text" class="form-control signupForm" id="username" placeholder="Stage Name" name="username" required>
                        </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <input type="password" class="form-control signupForm" id="password" placeholder="Password" name="password" required>
                        <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-custom btn-block" name="signin" id="signin">Sign In</button>
                    </div>
                    </form>
					<p class="text-center">or</p>
					<a href="<?php echo $authUrl;?>" role="button" style="font-size: 14px; width: 100%" class="btn btn-primary btn-md">
						<i class="fa fa-facebook-square"></i> &nbsp;Continue with Facebook</a>
						
                </div>
            </div>
        </div>
    </div>





<!--background-->
<div id="particles-js"></div>
<!-- scripts -->
<script src="http://localhost/mimo/assets/js/particles.js"></script>
<script src="http://localhost/mimo/assets/js/app.js"></script>
<!-- footer -->
<footer id="sticky"><a href="" style="color: white">Mimo</a> &copy &nbsp; 2017</footer>



<script type="text/javascript">
    $('#signin').click(function() {
        var username = $("#username").val();
        var password = $("#password").val();
        $.ajax({
            type: 'post',
            url: '<?php echo base_url() ?>accounts/si',
            data:{
                username:username,
                password:password,
            },
            success: function(response){
                var res = JSON.parse(response)
                console.log(res);
                if(res.status != "success"){
                    $("#log").attr('class', 'alert alert-danger');
                    $( "#log" ).text(res.eventid);
                }
                else{
                    window.location = "http://localhost/mimo";
                }
            },
            error: function(e){
               console.log(e);

            }
            
        });

    });
    
</script>
</body>
