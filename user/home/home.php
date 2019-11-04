<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Betoyou</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    
    
</head>
<body>
    <div class="application">
        
        <?php
            require_once('../header.php');
        ?>

        <div class="contentWrapper" style="margin-top: 70px">
            <div class="container-fluid">

                <div class="row">

                    <!-- left menu -->
                    <div class="col-lg-2 leftMenu" id="leftMenu">
                        <a href="" style="display: block" data-toggle="modal" data-target="#home"><i class="fa fa-home fa-lg"></i> Home</a> 
                        <a href="" style="display: block" data-toggle="modal" data-target="#about"><i class="fa fa-info fa-lg"></i> About</a> 
                        <a href="" style="display: block" data-toggle="modal" data-target="#service"><i class="fa fa-fire fa-lg"></i> Service</a> 
                        <a href="" style="display: block" data-toggle="modal" data-target="#contact"><i class="fa fa-address-book fa-lg"></i> Contact</a> 
                        <hr>
                        <a href="" style="display: block" ><i class="fa fa-music fa-lg"></i> Music</a> 
                        <a href="" style="display: block" ><i class="fa fa-video-camera fa-lg"></i> Film</a> 
                        <a href="" style="display: block" ><i class="fa fa-circle fa-lg"></i> Sport</a> 
                        <a href="" style="display: block" ><i class="fa fa-caret-down fa-lg"></i> Other</a> 
                    
                    </div>  <!-- finish left menu -->
                    
                    <!-- content -->
                    <div class="col-lg-10 content">
                        <div class="container">

                            <!-- create item wrapper -->
                            <?php
                            $category = array("Musics", "Films", "Sports", "Other");
                            for($i=0; $i < 4; $i++)
                            {
                            ?>
                            <div class="row">
                                
                                <div class="row sectionRow">
                                    
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <h2><?php echo $category[$i] ?></h2>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                                        <h2><button class="btn btn-default">Read more</button></h2>
                                    </div>

                                </div>

                                <!-- to create 8 items -->
                                <?php
                                for($j=0; $j<8; $j++)
                                {
                                ?>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="../detail/detail.php">
                                        <div class="item">
                                            <img src="https://picsum.photos/id/<?php echo $i*10+$j+10 ?>/600/600" alt="Image" class="img-responsive">
                                            <h3><a href="">Tran danh hay nhat lich su</a></h3>
                                            <p>Nguoi dang</p>
                                            <p style="float: left">160N Luot xem - </p>
                                            <p>1 nam truoc</p>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                }
                                ?>
                                
                            </div>  <!-- End row -->
                            <?php
                            }
                            ?>
                        </div>  <!-- End container -->
                    </div>  <!-- End content -->
                </div>  <!-- End contentWrapper -->

                <?php 
                    require_once('about.php');
                    require_once('contact.php')
                ?>
            </div>
        </div>
    </div>
    <script src="../../utils/menuToggle.js"></script>
</body>
</html>