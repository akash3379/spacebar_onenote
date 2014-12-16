
<?php
include("header.php");
include("database.php");
include("function.php");

$a=$_GET["subject"];
$u=$_SESSION['username'];
$delete="DELETE FROM  `$u` WHERE  `subject`='$a'";
$rs=mysql_query($delete)or die("Could Not Perform the Query");
header("location:see.php?rc=1");
?>