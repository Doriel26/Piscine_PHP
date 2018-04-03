<?php
include ('auth.php');
session_start();
if ($_GET && $_GET['login'] !== "" && $_GET['passwd'] !== "")
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
	if (auth($_GET['login'], $_GET['passwd']) == TRUE)
	{
		$logged_on_user = $_GET['login'];
		echo "OK\n";
	}
	else
	{
		$logged_on_user = "";
		echo "ERROR\n";
	}
}
?>