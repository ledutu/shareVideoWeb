<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Betoyou</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../home/home.css"> 
    <link rel="stylesheet" href="detail.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    
    <?php
        require_once('../header.php');

        require_once("../conn.php");

        $videoId = $_GET["id"];
        $category = $_GET["category"];

        $sql = "SELECT * FROM video, user WHERE video.videoId = $videoId AND video.user = user.username";


    ?>

    <!-- WatchVideo -->
    <div class="watchVideo" style="margin-top: 70px">
        <div class="container-fluid">
            <div class="row">
                <div class="content">
                    <div class="col-xs-12 col-lg-8">
                        <div class="thumbnail">
                        
                        <?php
                        
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                        ?>
                            <video width="100%" controls autoplay>
                                <source src="../../uploads/<?php echo $row["file"] ?>" type="video/mp4">
                            </video>
                          
                        </div>
                        <!-- infoVideo -->  
                        <div class="infoVideo">
                            <div class="title-video">
                                <h3 id="id-title-video"><?= $row["title"] ?></h3>
                            </div>
                            <div class="view">
                                <div class="row" id="view-like">
                                    <div class="col-lg-8">
                                        <p id="view"><?= $row["view"] ?> Lượt xem</p>
                                    </div>
                                    <div class="col-xs-12 col-lg-4">
                                        <div class="row">
                                            <div class="col-xs-2 col-lg-2">
                                                <a id="like" href="#" class="btn btn btn-lg">
                                                    <i class="fa fa-thumbs-o-up">
                                                        <p><?= $row["like"] ?></p>
                                                    </i> 
                                                </a>    
                                            </div>    
                                            <div class="col-xs-2 col-lg-2">
                                                <a id="unlike" href="#" class="btn btn btn-lg">
                                                    <i class="fa fa-thumbs-o-down">
                                                        <p><?= $row["dislike"] ?></p>
                                                    </i> 
                                                </a>
                                            </div>
                                            <div class="col-xs-3 col-lg-3">
                                                <a href="#" class="btn btn btn-lg">
                                                    <i class="fa fa-share">
                                                        <p>SHARE</p>
                                                    </i> 
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
                                        
                                            <div class="row author">
                                                <div class="col-xs-3 col-lg-1">
                                                    <img id="img-channel" src="<?php echo $row["userImage"] ?>" class="img-circle" alt="Cinque Terre" >
                                                </div>
                                                <div class="col-xs-6 col-lg-9">
                                                    <a><?= $row["user"] ?></a>
                                                    <p><?= $row["subscribers"] ?> người đăng ký </p>
                                                </div>
                                                <div class="col-xs-2 col-lg-1">
                                                    <button id="subscribe" type="button" class="btn btn-danger">ĐĂNG KÝ</button>
                                                </div>
                                            </div>
                                        </div>  
                                    </div> 
                                </div>
                                <div class="info-more">
                                    <div class="row">
                                        <div class="col-xs-10 col-xs-push-1">
                                            <span class="more">
                                                <?php echo $row['description'] ?>
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
                                        <div class="col-xs-10">
                                            <p>817.408 bình luận</p>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="create-comment">

                                    <div class="row">

                                        <div class="col-xs-2 col-lg-1">
                                            <img id="img-create-comment" src="https://picsum.photos/600/600/?ramdom+2" class="img-circle" alt="Cinque Terre">
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
                                        <img id="img-read-comment"src="https://picsum.photos/600/600/?ramdom+1" class="img-circle" alt="Cinque Terre">
                                    </div>
                                    <div class="col-xs-10 col-lg-11">
                                        <a>Trần Dần</a>
                                        <p>Đệ nhất quốc sư Hoa Kỳ</p>
                                    </div>
                                </div> <!-- /comment -->
                            </div>
                            
        
                        </div> <!-- /infoVideo -->  

                        <?php
                            }
                        }
                        ?> 

                    </div>
                </div>
                                        
                <div class="videoRelation">
                    <div class="col-xs-12 col-lg-4">
                        <!-- div 2 -->             
                        <?php
                        if(isset($_GET["category"]))
                        {
                            $category = $_GET["category"];
                            echo $category;
                            $sqlCategory = "SELECT * FROM video WHERE category = $category";
                        }
                        $resultCategory = $conn->query($sqlCategory);

                        if($resultCategory){
                            while($row2 = $resultCategory->fetch_assoc()){
                                echo $row2["user"];
                        ?>

                        <div class="thumbnail">

                            <a href="">
                                <div class="row">
                                    <video width="100%">
                                        <source src="../../uploads/<?php echo $row2["file"] ?>" type="video/mp4">
                                    </video>
                                    <div class="col-xs-6 col-lg-6">
                                        
                                        <h3><a href=""><?php echo $row["title"] ?></a></h3>
                                        <p><?php echo $row2["user"] ?></p>
                                        <p><?php echo $row2["view"]?> Lượt xem - <?php echo $row2["date"] ?></p>
                                    </div>
                                </div>
                            </a>

                        </div> 

                        <?php
                            }
                        }
                        ?>
                         <!-- End div 2 -->
                    </div>  <!-- End thumbnail image info -->
                </div>
            </div>
        </div>
    </div>
    <script src="detail.js"></script>
    
</body>
</html>