<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title ; ?></title>
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0">
	<link href="http://localhost/mimo/assets/img/mimologo3.png" rel="icon" type="image/png"  />
    <link rel="stylesheet" href="http://localhost/mimo/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/mimo/assets/fonts/material-icons.css">
	<link rel="stylesheet" href="http://localhost/mimo/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/mimo/assets/css/custom.css">
    <link rel="stylesheet" href="http://localhost/mimo/assets/css/audplay.css">
    <link rel="stylesheet" href="http://localhost/mimo/assets/css/photoupload.css">
	<script type="text/javascript" src="http://localhost/mimo/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/mimo/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://localhost/mimo/assets/js/photoupload.js"></script>
    <script type="text/javascript" src="http://localhost/mimo/assets/js/likecomment.js"></script>
    <script type="text/javascript" src="http://localhost/mimo/assets/js/audplay.js"></script>

     <!-- Search NavBar -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('.searchbar').keyup(function(e){
            var sWord = $(this).val();
            $('.searchresult').html("");
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url() ?>mimo/search',
                data:{
                    searchword:sWord
                },
                success: function(s){
                    if(s!=''){
                        var res = JSON.parse(s);
                        for (var i = 0; i < res.length; i++) {
                            console.log(res[i])
                            $('.searchresult').html($('.searchresult').html()+'<li class="list-group-item sR" ><a href="http://localhost/mimo/mimo/myStudio?username='+res[i].username+'"><i class="fa fa-user"></i><span> '+res[i].firstname+' '+res[i].lastname+' <small>('+res[i].username+')</small></span></a></li>')
                        }
                    }
                },
                error: function(e){
                    console.log(e)
                    alert('error')
                }
            });


        });//end of searchbar keyup()

        $('#thoughts').click(function() {
            var txt = $("#textarea").val();
            $.ajax({
                type:'POST',
                url: '<?php echo base_url() ?>mimo/thoughts',
                data:{
                    thoughts:txt
                },
                success: function(r){
                    var posts = JSON.parse(r)
                    console.log(posts);
                    $('.thoughts').prepend('<div class="posttemp"><div class="posthead"><div class="media"><div class="media-left"><a href="#" ><div class="media-object postPic" style="background-image:url('+posts[0].picture+');"></div></a></div><div class="media-body"><h4 class="media-heading"><a class="user" href="http://localhost/mimo/mimo/myStudio?username='+posts[0].username+'">'+posts[0].username+'</a><small> shared a thought!<br /><small>'+posts[0].posted_at+'</small></small></h4></div></div></div><div class="postbody"><div class="postbodycont">'+posts[0].body+'</div></div><div id="likesection"><div class="btn-grp btn-group-justified"><a href="#" id="likeBtn" type="button" class="btn like" data-id="'+posts[0].id+'" aria-pressed="false" onclick="handleBtnClick(event)"><span class="fa fa-heart-o"></span> Like <small><small>('+posts[0].likes+')</small></small></a><a class="commentBtn btn comment" data-did="'+posts[0].id+'" data-toggle="modal" data-target="#commentModal"><span class="fa fa-commenting-o"></span> Comment </a></div></div></div>'
                                );
                        alert('Posted');
                },
                error: function(xhr, ajaxOptions, thrownError){
                    console.log(e);
                }
            });
        });//end of thoughts click()
    });
    </script>
</head>