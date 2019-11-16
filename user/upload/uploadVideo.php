<?php
	session_start();

	require_once("../conn.php");
    $user = $_SESSION["username"];
	$title = $_POST["title"];
	$category = $_POST["category"];
    $date = date("Y/m/d");
    $description = $_POST["description"];
	
	
    $file_name = basename($_FILES["file"]["name"]);
    $target_dir = "../../uploads/";
	$target_file = $target_dir . $_FILES["file"]["name"];
	
    $maxsize = 524288000000; // 500MB
    
    // Select file type
    $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

    // Check extension
    if( in_array($videoFileType,$extensions_arr) ){
        
        // Check file size
        if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 500MB.";
        }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                // Insert record
                $sql = "INSERT INTO videoComfirm (user, title, category, date, description, file)
			    VALUES ('$user', '$title', '$category', '$date', '$description', '$file_name')";

                mysqli_query($conn, $sql);
                header("Location: ../home/home.php");
            }
        }

    }else{
        echo "Invalid file extension.";
    }
?>