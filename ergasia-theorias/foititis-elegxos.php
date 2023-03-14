<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="styles/basic/style.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
	session_start();
	if(!isset($_SESSION['onoma_omadaxrhsth']) || $_SESSION['onoma_omadaxrhsth'] != "ΦΟΙΤΗΤΗΣ")
	{
		header("Location: foititis-elegxos-error.php");
		exit;
	}
?>