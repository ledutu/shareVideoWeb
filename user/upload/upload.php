<?php
    session_start();

    if(!isset($_SESSION["username"]))
    {
        header("Location: ../login/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="upload.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-push-2">
                
                <div class="header text-center">
                    <h1>Betoyou Uploader</h1>
                    <p>Upload videos directly to our Betoyou channel</p>
                </div>

                <form action="uploadVideo.php" method="POST" role="form" enctype="multipart/form-data">
                
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Video Title" required>
                        
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Video Description" required>
                    </div>

                    <div class="form-group">
                        
                        <select name="category" id="input" class="form-control" required="required">
                            <option value="">Choose video category</option>
                            <option value="music">Music</option>
                            <option value="film">film</option>
                            <option value="sport">sport</option>
                            <option value="other">other</option>
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control" id="file" name="file" placeholder="Click to select a video file" required>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
                
            </div>
        </div>
        
    </div>
    
</body>
</html>