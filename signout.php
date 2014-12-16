<?php
include("header.php");
session_start();
session_destroy();
//setcookie("username","",time()-60*60*24*3);
header("location:index.php");
?>