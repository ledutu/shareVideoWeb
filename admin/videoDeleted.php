<!-- delete video -->
<?php
    require_once("../user/conn.php");

    if(isset($_GET["id"]))
    {
        $videoId = $_GET["id"];
        $sql = "DELETE FROM video WHERE videoId = $videoId";
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