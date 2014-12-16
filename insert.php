<?php
include("header.php");
include("database.php");
session_start();
if(isset($_POST["subsignup"])){
$a=$_POST["name"];
$b=$_POST["user"];
$c=$_POST["pass"];
$d=$_POST["city"];
$e=$_POST["phone"];
$f=$_POST["email"];
$g=$_POST["add"];

$check="SELECT * FROM signup WHERE `user`='$b'";
$result=mysql_query($check);

$count=mysql_num_rows($result);
if($count>=1)
{
header("location:signup.php?rc=1");

}
else{
$cre="CREATE TABLE  `note_up`.`$b` (
`no.` INT NOT NULL AUTO_INCREMENT ,
`subject` VARCHAR( 50 ) NOT NULL ,
`note` VARCHAR( 100000000 ) NOT NULL ,
`p` VARCHAR( 5 ) NOT NULL ,
PRIMARY KEY (  `no.` )
) ";
$rrr=mysql_query($cre)or die("Could Not Perform the ");


$table="INSERT INTO  `signup` (
`name` ,
`user` ,
`pass` ,
`city` ,
`phone` ,
`email` ,
`add`
)
VALUES (
'$a',  '$b',  '$c',  '$d',  '$e',  '$f',  '$g'
)";	

$rs=mysql_query($table)or die("Could Not Perform the Query");
header("location:signin.php?returnc=1 && name=$b");
}
}
?>