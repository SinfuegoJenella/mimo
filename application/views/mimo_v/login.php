<body id="body">

<!-- count particles -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><strong>MimO</strong> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><h5 class="navbar-text">Already have an account?</h5></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Sign In</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row" style="width:300px;">
                                    <div class="col-md-12">
                                        Sign In to your Mimo Accunt
                                        <br />
                                        <br />
                                         <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">
                                                     <label class="sr-only" for="email" >Email address</label>
                                                     <input type="email" class="form-control" id="email" placeholder="Email address" required>
                                                </div>
                                                <div class="form-group">
                                                     <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                     <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                     <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                                </div>
                                                <div class="form-group">
                                                     <button type="submit" class="btn btn-custom btn-block">Sign In</button>
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
                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                        <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
                        <div class="col-md-6">
                            <input class="form-control" name="firstname" placeholder="First Name" type="text" required autofocus />
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                        </div>
                        <div class="col-md-12">
                        <input class="form-control" name="youremail" placeholder="Your Email" type="email" />
                        <input class="form-control" name="reenteremail" placeholder="Re-enter Email" type="email" />
                        <input class="form-control" name="password" placeholder="New Password" type="password" />
                        <label for="">Birth Date</label>
                        <input class="form-control" name="bday" placeholder="New Password" type="date" />
                        <label class="radio-inline">
                        <input type="radio" name="sex" id="inlineCheckbox1" value="male" />Male</label>
                        <label class="radio-inline">
                        <input type="radio" name="sex" id="inlineCheckbox2" value="female" />Female</label>
                        <br />
                        <br />
                        <button class="btn btn-lg btn-custom btn-block" type="submit">Sign up</button>
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
<footer id="sticky"><a href="">Mimo</a>, &copy&nbsp 2017</footer>
</body>