<?php

session_start();
if(isset($_COOKIE["username"]))
{
$_SESSION["username"]=$_COOKIE["username"];
}
function login()
{
	if(isset($_SESSION["username"])||isset($_COOKIE["username"]))
	{
		$loged=TRUE;
		return $loged;
	}
}
?>