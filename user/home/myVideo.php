<?php
    session_start();

    if(!isset($_SESSION["username"]))
    {
        header("Location: ../login/login.php");
    }
    else
    {
        $username = $_SESSION["username"];
        header("Location: home.php?user=$username");
    }
?>