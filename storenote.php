<?php
include("header.php");
include("database.php");
session_start();
if(isset($_POST["subnote"]))
{
$sub=$_POST["subject"];
$note=$_POST["note"];
$user=$_SESSION["username"];
$p=$_POST["private"];

if($p=="on")
$key="yes";
else
$key="no";
echo $key;
$insert="INSERT INTO  `note_up`.`$user` (
`no.` ,
`subject` ,
`note`,
`p`
)
VALUES (
NULL ,  '$sub',  '$note' , '$key'
)";

$rs=mysql_query($insert)or die("Could Not Perform the Query");


header("location:create.php?rc=1");
}

?>