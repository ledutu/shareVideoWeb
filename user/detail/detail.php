<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Youtube</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="detail.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
    $(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 100;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
    </script>
</head>

<body>
    <!-- WatchVideo -->
    <div class="watchVideo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-lg-8">
                    <div class="thumbnail">
                        <div>
                            <iframe width="100%" height="720" src="https://www.youtube.com/embed/_dK2tDK9grQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>     
                    </div>
                    <!-- infoVideo -->  
                    <div class="infoVideo">
                        <div class="title-video">
                            <h3 id="id-title-video">UnderControll</h3>
                        </div>
                        <div class="view">
                            <div class="row">
                                <div class="col-lg-8">
                                    <p>1.612.599.000 lượt xem</p>
                                </div>
                                <div class="col-xs-12 col-lg-4">
                                    <div class="row">
                                        <div class="col-xs-2 col-lg-2">
                                            <a href="#" class="btn btn btn-lg">
                                                <span class="fa fa-thumbs-up">40N</span> 
                                            </a>    
                                        </div>
                                        <div class="col-xs-2 col-lg-2">
                                            <a href="#" class="btn btn btn-lg">
                                                <span class="fa fa-thumbs-down">40N</span> 
                                            </a>
                                        </div>
                                        <div class="col-xs-3 col-lg-3">
                                            <a href="#" class="btn btn btn-lg">
                                                <span class="glyphicon glyphicon-share-alt">SHARE</span> 
                                            </a>
                                        </div>
                                        <div class="col-xs-3  col-lg-3">
                                            <a href="#" class="btn btn btn-lg">
                                                <span class="glyphicon glyphicon-plus">SAVE</span> 
                                            </a>
                                        </div>
                                        <div class="col-xs-2 col-lg-2">
                                            <a href="#" class="btn btn btn-lg">
                                                <span class="glyphicon glyphicon-option-horizontal"></span> 
                                            </a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <hr>
                        </div>
                        <!-- info-actor -->
                        <div class="info-actor">
                            <div class="name-submit">
                                <div class="row">
                                    <div class="col-xs-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-xs-3 col-lg-1">
                                                <img src="https://picsum.photos/600/600/?ramdom" class="img-circle" alt="Cinque Terre" >
                                            </div>
                                            <div class="col-xs-7 col-lg-10">
                                                <a>Tiger Trần</a>
                                                <p>100&nbsp;T người đăng ký </p>
                                            </div>
                                            <div class="col-xs-2 col-lg-1">
                                                <button type="button" class="btn btn-danger">ĐĂNG KÝ</button>
                                            </div>
                                        </div>
                                    </div>  
                                </div> 
                            </div>
                            <div class="info-more">
                                <div class="row">
                                    <div class="col-xs-3 col-lg-1">
                                    </div>
                                    <div class="col-xs-9 col-lg-11">
                                        <span class="more">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /info-actor -->

                        <hr>

                        <!-- comment -->
                        <div class="comment">
                        
                            <div class="info-comment">
                            
                                <div class="row">
                                    <div class="col-xs-6 col-lg-2">
                                        <p>817.408 bình luận</p>
                                    </div>
                                    <div class="col-xs-6 col-lg-10">
                                    <a href="#" class="btn btn btn-lg">
                                        <span class="glyphicon glyphicon-menu-hamburger">SẮP XẾP THEO</span> 
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="create-comment">
                                <div class="row">
                                    <div class="col-xs-2 col-lg-1">
                                        <img src="https://picsum.photos/600/600/?ramdom+2" class="img-circle" alt="Cinque Terre">
                                    </div>
                                    <div class="col-xs-10 col-lg-11">
                                        <textarea ></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- read-comment -->
                            <div class="read-comment">
                                <div class="col-xs-2 col-lg-1">
                                    <img src="https://picsum.photos/600/600/?ramdom+1" class="img-circle" alt="Cinque Terre">
                                </div>
                                <div class="col-xs-10 col-lg-11">
                                    <h4>Trần Dần</h4>
                                    <p>Đệ nhất quốc sư Hoa Kỳ</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-3">
                                            <div class="row">
                                                <div class="col-xs-3 col-lg-3">
                                                    <a href="#" class="btn btn btn-lg">
                                                        <span class="fa fa-thumbs-up">40N</span> 
                                                    </a>
                                                </div>
                                                <div class="col-xs-3 col-lg-3">
                                                    <a href="#" class="btn btn btn-lg">
                                                        <span class="fa fa-thumbs-down">40N</span> 
                                                    </a>
                                                </div>
                                                <div class="col-xs-3 col-lg-6">
                                                    <a class="btn btn btn-lg">
                                                        <span>TRẢ LỜI </span> 
                                                    </a>
                                                </div>
                                            </div>
                                            
                                        </div>                     
                                        <div class="col-xs-9 col-lg-9">

                                        </div>
                                    </div>
                                </div>
                            </div><!-- /comment -->
                        </div>
                        
    
                    </div><!-- /infoVideo -->  
                </div>

               
                <div class="col-xs-12 col-lg-4">
                    <!-- div 2 -->
                    <div class="thumbnail">
                    <?php
                    for($i = 0; $i<9; $i++)
                    {
                    ?>

                    <a href="https://www.youtube.com/watch?v=_dK2tDK9grQ">
                        <div class="row">
                            <div class="col-xs-6 col-lg-6">
                                <img src="https://picsum.photos/id/<?php echo $i*20 ?>/600/600" alt="Lights" style="width:100%">
                            </div>
                            <div class="col-xs-6 col-lg-6">
                                <h3>Hãy Trao Cho Anh</h3>
                                <p>Sơn Tùng M-TP</p>
                                <p>1.6&nbsp;T lượt xem</p>
                            </div>
                        </div>
                    </a>

                    <?php
                    }
                    ?>
                    </div>  <!-- End div 2 -->
                </div>  <!-- End thumbnail image info -->
                

            </div>
        </div>
    </div>
</body>
</html>