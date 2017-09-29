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
                    <li><h5 class="navbar-text">&nbsp;&nbsp;&nbsp;&nbsp;Already have an account?</h5></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Sign In</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row" style="width:300px;">
                                    <div class="col-md-12">
                                        Sign In to your Mimo Account
                                        <br />
                                        <br />
                                         <form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
                                                <div id="error"></div>
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
                                                <div class="checkbox">
                                                     <label>
                                                     <input type="checkbox"> keep me logged-in
                                                     </label>
                                                </div>
                                         </form>
                                    </div>
                                    
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Sign up Form -->
    <div class="container">
        <div id="login-box">
            <div class="row">
                <div class="col-md-12">
                    <form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
                        <legend>
							<i class="material-icons">public</i></a> Sign up!</legend>
                        <div id="log"></div>
                        <div class="col-md-6">
                            <input id="first" class="form-control signupForm" name="firstname" placeholder="First Name" type="text" required autofocus />
                        </div>
                        <div class="col-md-6">
                            <input id="last" class="form-control signupForm" name="lastname" placeholder="Last Name (Optional)" type="text"  />
                        </div>
                        <div class="col-md-12">
                        <input id="user" class="form-control signupForm" name="username" placeholder="Stage Name" type="text" required/>
                        <input id="email" class="form-control signupForm" name="email" placeholder="you@email.com" type="email" required/>
                        <input id="pass" class="form-control signupForm" name="password" placeholder="New Password" type="password" required/>
                        <label for="">Birth Date</label>
                        <input id="bday" class="form-control signupForm" name="bday" placeholder="New Password" type="date" required/>
                        <label class="radio-inline">
                        <input class="sex" type="radio" name="sex" id="inlineCheckbox1" value="male" />Male</label>
                        <label class="radio-inline">
                        <input class="sex" type="radio" name="sex" id="inlineCheckbox2" value="female" />Female</label>
                        <br />
                        <br />
                        <button class="btn btn-lg btn-custom btn-block" type="button" name="signup" id="signup">Sign up</button>
                        <br />
                        
                        </div>
                    </form>
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
<footer id="sticky"><a href="" style="color: white">Mimo</a> &copy&nbsp 2017</footer>


<script type="text/javascript">
    $('#signin').click(function() {
        var username = $("#username").val();
        var password = $("#password").val();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url() ?>accounts/signin',
            data:{
                username:username,
                password:password,
            },
            success: function(r){
                console.log(r);
                window.location = "http://localhost/mimo";

            },
            error: function(e){
                $( "#error" ).text( "Invalid Username or Password!" );
            }
            
        });

    });
    $('#signup').click(function() {
        var firstname = $("#first").val();
        var lastname = $("#last").val();
        var username = $("#user").val();
        var email = $("#email").val();
        var password = $("#pass").val();
        var birthdate = $("#bday").val();
        var sex = $('input[name="sex"]:checked').val();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url() ?>accounts/signup',
            data:{
                firstname:firstname,
                lastname:lastname,
                username:username,
                email:email,
                password:password,
                birthdate:birthdate,
                sex:sex
            },
            success: function(r){
                console.log(r);
                alert("Account Created!");
            },
            error: function(e){
                $( "#log" ).text( "Please fill all the fields Correctly!" );
            }

        });
    });
</script>
</body>
