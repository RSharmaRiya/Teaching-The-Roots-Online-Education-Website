<?php

session_start();

if(isset($_SESSION['username'])){

    $_SESSION['msg'] = "You must log in first to view this page";
    header("location :login.php");
}
if(isset($_GET['logout'])){

    session_destroy();;
    unset($_SESSION['username']);
    header("location : login.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
</head>
<body>
</body>
</html>