<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Betoyou</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css?version=51" type="text/css">
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
                        <a href="home.php" style="display: block"><i class="fa fa-home fa-lg"></i> Home</a> 
                        <a href="" style="display: block" data-toggle="modal" data-target="#about"><i class="fa fa-info fa-lg"></i> About</a> 
                        <a href="" style="display: block" data-toggle="modal" data-target="#service"><i class="fa fa-fire fa-lg"></i> Service</a> 
                        <a href="" style="display: block" data-toggle="modal" data-target="#contact"><i class="fa fa-address-book fa-lg"></i> Contact</a> 
                        <hr>
                        <a href="home.php?category=music" style="display: block" ><i class="fa fa-music fa-lg"></i> Music</a> 
                        <a href="home.php?category=film" style="display: block" ><i class="fa fa-video-camera fa-lg"></i> Film</a> 
                        <a href="home.php?category=sport" style="display: block" ><i class="fa fa-circle fa-lg"></i> Sport</a> 
                        <a href="home.php?category=other" style="display: block" ><i class="fa fa-caret-down fa-lg"></i> Other</a> 
                        <hr>
                        <a href="myVideo.php" style="display: block" ><i class="fa fa-users fa-lg"></i> My videos</a>
                    
                    </div>  <!-- finish left menu -->
                    
                    <!-- content -->
                    <div class="col-lg-10 content">
                        <div class="container">

                            <!-- create item wrapper -->
                            <div class="row">
                                
                                <div class="row sectionRow">
                                    
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <h2>Video</h2>
                                    </div>

                                </div>
                                
                                <?php
                                    require_once("../conn.php");
                                    $sql = "SELECT * FROM video ORDER BY view DESC";

                                    if(isset($_GET["category"]))
                                    {
                                        $category = $_GET["category"];
                                        $sql = "SELECT * FROM video WHERE category = '$category' ORDER BY view DESC";
                                    }
                                    else if(isset($_GET["user"]))
                                    {
                                        $username = $_GET["user"];
                                        $sql = "SELECT * FROM video WHERE user = '$username' ORDER BY view DESC";
                                    }
                                    else if(isset($_POST["text"]))
                                    {
                                        $text = $_POST["text"];
                                        $sql = "SELECT * FROM video WHERE title LIKE '%$text%' ORDER BY view DESC";
                                    }
                                    

                                    $result = $conn->query($sql);
                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            
                                ?>

                                
                                <div class="col-sm-6 col-md-3">
                                    <a href="detail.php?id=<?php echo $row["videoId"] ?>&category=<?php echo $row["category"] ?>">
                                        <div class="item">
                                            
                                            <video width="100%">
                                                <source src="../../uploads/<?php echo $row["file"] ?>" type="video/mp4">
                                            </video>
                                            <div class="videoTitle">
                                                <h3><a href=""><?php echo $row["title"] ?></a></h3>
                                            </div>
                                            <p><?php echo $row["user"] ?></p>
                                            <p><?php echo $row["view"]?> Lượt xem - <?php echo $row["date"] ?></p>

                                        </div>
                                    </a>
                                </div>  

                                <?php

                                        }
                                    }
                                ?>
                                
                                
                            </div>  <!-- End row -->

                        </div>  <!-- End container -->

                    </div>  <!-- End content -->
                    
                </div>  <!-- End contentWrapper -->

                

                <?php 
                    require_once('about.php');
                    require_once('contact.php');
                ?>
            </div>
        </div>
    </div>
    
    <script src="../../utils/menuToggle.js?version=51"></script>
</body>
</html>