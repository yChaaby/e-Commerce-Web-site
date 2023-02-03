<?php
include ("login.php");
session_start();
unset($_SESSION["Email"]);
unset($_SESSION["Password"]);
header("Location:home-02.html");
session_destroy();
?>