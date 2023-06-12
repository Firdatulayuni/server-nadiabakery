<?php
session_start();
if($_SESSION['role']=="1"){
    header("Location: index.php");
    session_start();
    session_unset();
    session_destroy();
    header("Location: login.php");
}elseif($_SESSION['role']=="2"){
    header("Location: index.php");
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php");
}
?>