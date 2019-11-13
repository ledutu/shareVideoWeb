<?php
    session_start();
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

        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-push-1">
                    <h2>VIDEOS</h2>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">All Videos</a></li>
                        <li><a data-toggle="tab" href="#pending">Pending</a></li>
                    </ul>

                    <div class="tab-content">

                        <div id="home" class="tab-pane fade in active">
                            <table>
                                <thead>
                                    <tr>
                                        <td>Video</td>
                                        <td>Title</td>
                                        <td>Description</td>
                                        <td>category</td>
                                        <td>Options</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <video width="50%">
                                                <source src="../uploads/video1.mp4" type="video/mp4">
                                            </video>
                                        </td>
                                        <td>Phim hanh dong</td>
                                        <td>Tap 900</td>
                                        <td>Film</td>
                                        <td>
                                            <button class="btn btn-primary">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div id="pending" class="tab-pane fade">
                            <h3>Menu 1</h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
        
</body>
</html>