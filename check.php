<?php
include("header.php");
include("database.php");
include("function.php");
/*if(!login())
{
	header("location:index.php");
}*/

session_start();
if(isset($_POST["sub"])){
$name=$_POST["username"];
$pass=$_POST["password"];

//$re=$_POST["reme"];
$check="SELECT * FROM signup WHERE `user`='$name' AND `pass`='$pass'";
$result=mysql_query($check);

$count=mysql_num_rows($result);


if($count>0){
 
	
		/*if($re=="on")
		{
			setcookie("username",$_POST["username"],time()+60*60*24*3);
		}
		else if($re=="")
		{*/
			$_SESSION["username"]=$_POST["username"];
		//}
			
header("location:menu.php");
}
else
header("location:signin.php?rc=1");
}
?>