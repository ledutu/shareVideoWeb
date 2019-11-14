<!-- Comfirm video -->
<?php
    require_once("../user/conn.php");

    if(isset($_GET["id"]))
    {
        $date = date("Y/m/d");
        
        $videoId = $_GET["id"];
        $sql = "INSERT INTO video SELECT * FROM videoComfirm WHERE videoId = $videoId";

        if($conn->query($sql) === TRUE)
        {
            $deleted = "DELETE FROM videoComfirm WHERE videoId = $videoId";
            if($conn->query($deleted) === TRUE)
            {
                header('Location: index.php');
            }
        }
        else
        {
            die("Error deleting: " . $conn->error);
        }
    }
    
    else if(isset($_GET["deleted"]))
    {
        $videoId = $_GET["deleted"];
        $sql = "DELETE FROM videoComfirm WHERE videoId = $videoId";
        if($conn->query($sql) === TRUE)
        {
            header('Location: index.php');
        }
        else
        {
            die("Error deleting: " . $conn->error);
        }
    }

    $conn->close();
?>