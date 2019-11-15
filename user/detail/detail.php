<?php
    session_start();
?>
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

        $commentCounting = "SELECT * FROM comment WHERE videoId = $videoId";

        $sqlSizeCmt = "SELECT * FROM comment";

        $cmtSize = $conn->query($sqlSizeCmt);

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
                                <h3 style="float: left" id="id-title-video"><?= $row["title"] ?></h3>
                                
                            </div>
                            <div class="view">
                                <div class="row" id="view-like">
                                    <div class="col-lg-8">
                                        <p id="view"><?= $row["view"] ?> Lượt xem</p>
                                        <a href="#" class="btn btn btn-lg">
                                            <i class="fa fa-share">
                                                <p>SHARE</p>
                                            </i> 
                                        </a>
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
                                                    <p>
                                                        <span class="more">
                                                            <?php echo $row['description'] ?>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
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
                                            <p><?= $cmtSize->num_rows ?> Bình luận</p>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="create-comment">

                                    <div class="row">

                                        <div class="col-xs-2 col-lg-1">

                                        <?php if (isset($_SESSION["image"])): ?>
                                            <img id="img-create-comment" src="<?= $_SESSION["image"] ?>" class="img-circle" alt="Cinque Terre">
                                        <?php else: ?>
                                            <img id="img-create-comment" src="http://www.clipartpanda.com/clipart_images/user-66327738/download" class="img-circle" alt="Cinque Terre">
                                        <?php endif ?>
                                            
                                        </div>

                                        <div class="col-xs-10 col-lg-11">
                                            
                                            <form action="" method="POST" role="form" enctype="multipart/form-data">
                                            
                                                <div class="form-group" style="float: left; margin-right: 10px">
                                                    <textarea class="form-control" id="content" name="content"></textarea>
                                                </div>
                                            
                                                <button type="submit" class="btn btn-primary">Post</button>
                                            </form>

                                            <?php

                                                if(isset($_POST["content"]))
                                                {
                                                    $content = $_POST["content"];
                                                    if(isset($_SESSION["username"]) || isset($_SESSION["image"]))
                                                    {
                                                        $username = $_SESSION["username"];
                                                        $image = $_SESSION["image"];
                                                        $date = date("Y/m/d");
                                                        $com = "cmt" . ($cmtSize->num_rows+1);

                                                        $comment = "INSERT INTO comment(id, videoId, username, userImage,content, date)
                                                                    VALUES('$com',$videoId, '$username', '$image', '$content', '$date')";

                                                        if($conn->query($comment) === false)
                                                        {
                                                            die("Error: " . $comment . $conn->error);
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "Bạn chưa đăng nhập";
                                                    }
                                                }
                                            ?>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <br>
                                
                                <!-- read-comment -->
                                <?php
                                    $commentResults = $conn->query($commentCounting);
                                    if($commentResults->num_rows > 0){
                                        while($commentRow = $commentResults->fetch_assoc()){
                                ?>

                                <div class="read-comment">
                                    <div class="col-xs-2 col-lg-1">
                                        <img id="img-read-comment"src="<?= $commentRow["userImage"] ?>" class="img-circle" alt="Cinque Terre">
                                    </div>
                                    <div class="col-xs-10 col-lg-11">
                                        <a><?= $commentRow["username"] ?></a>
                                        <p><?= $commentRow["content"] ?></p>
                                        <p>Ngày đăng: <?= $commentRow["date"] ?></p>
                                    </div>
                                </div> <!-- /comment -->

                                <?php
                                        }
                                    }
                                ?>

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
                            $sqlCategory = "SELECT * FROM video WHERE category = '$category' ORDER BY RAND() LIMIT 8 ";
                        }
                        $resultCategory = $conn->query($sqlCategory);

                        if($resultCategory->num_rows > 0){
                            while($row2 = $resultCategory->fetch_assoc()){
                                if($row2["videoId"] !== $videoId)
                                {
                        ?>

                        <div class="thumbnail">

                            <a href="detail.php?id=<?= $row2['videoId']?>&category=<?= $row2['category'] ?>">
                                <div class="row">
                                    <div class="col-xs-6 col-lg-6">

                                        <video width="100%">
                                            <source src="../../uploads/<?php echo $row2["file"] ?>" type="video/mp4">
                                        </video>

                                    </div>

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