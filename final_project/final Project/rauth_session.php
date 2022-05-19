<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: rlogin.php");
        exit();
    }
?>
