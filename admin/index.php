<?php
    session_start();

    if(!isset($_SESSION["username"]))
    {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comfirm Video</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="application">
        <?php
            require_once("../user/conn.php");
            $sql = "SELECT * FROM video";

            $result = $conn->query($sql);

            $videoComfirm = "SELECT * FROM videoComfirm";

            $resultComfirm = $conn->query($videoComfirm);
        ?>

        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-push-1">
                    <h2>VIDEOS</h2>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">All Videos  <span class="badge"><?= $result->num_rows ?></span></a></li>
                        <li><a data-toggle="tab" href="#pending">Pending  <span class="badge"><?= $resultComfirm->num_rows ?></span></a></li>
                        <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
                    </ul>
                    

                    <div class="tab-content">

                        <div id="home" class="tab-pane fade in active allVideoTable">
                            
                            <table class="table table-hover ">
                                <thead>
                                    <tr>
                                        <th>Video</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Uploaded</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>

                                <tbody>

                                <?php
                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                ?>

                                    <tr>
                                        <td>
                                            <video width="100px">
                                                <source src="../uploads/<?= $row["file"] ?>" type="video/mp4">
                                            </video>
                                        </td>
                                        <td><?= $row["title"] ?></td>
                                        <td><?= $row["description"] ?></td>
                                        <td><?= $row["category"] ?></td>
                                        <td><?= $row["date"] ?></td>
                                        <td>
                                            <a href="videoDeleted.php?id=<?= $row["videoId"] ?>"><button class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                <?php
                                        }
                                    }
                                ?>
                                </tbody>
                            </table>
                            
                        </div>


                        <!-- Comfirm video from admin -->
                        <div id="pending" class="tab-pane fade">
                            <table class="table table-hover pendingTable">
                                <thead>
                                    <tr>
                                        <th>Video</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>category</th>
                                        <th>Uploaded</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>

                                <tbody>

                                <?php
                                    if($resultComfirm->num_rows > 0){
                                        while($comfirm = $resultComfirm->fetch_assoc()){
                                ?>

                                    <tr>
                                        <td>
                                            <video width="100px">
                                                <source src="../uploads/<?= $comfirm["file"] ?>" type="video/mp4">
                                            </video>
                                        </td>
                                        <td><?= $comfirm["title"] ?></td>
                                        <td><?= $comfirm["description"] ?></td>
                                        <td><?= $comfirm["category"] ?></td>
                                        <td><?= $comfirm["date"] ?></td>
                                        <td>
                                            <a href="videoComfirm.php?id=<?= $comfirm["videoId"] ?>"><button class="btn btn-primary">Comfirm</button></a>
                                            <a href="videoComfirm.php?deleted=<?= $comfirm["videoId"] ?>"><button class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>

                                <?php
                                        }
                                    }
                                    
                                ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
        
</body>
</html>