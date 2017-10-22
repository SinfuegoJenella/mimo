<body id="body">

<!-- count particles -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        
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
                        <label for="stagename">Stage Name</label>
                        <div class="col-md-6">
                            <input id="stagename" class="form-control signupForm" name="stagename" value="<?php echo $user;?>" type="text" required autofocus />
                        </div>
                        <button class="btn btn-lg btn-custom btn-block" type="submit" name="next" id="next">Next</button>
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