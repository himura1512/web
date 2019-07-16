<?php
	include "koneksi.php";
	$sqladm = mysql_query("select * from admin where username='$_POST[username]' and password='$_POST[password]'");
	$row = mysql_num_rows($sqladm);
	$radm = mysql_fetch_array($sqladm);
	if($row > 0){
		session_start();
		$_SESSION["namaadm"]=$radm["username"];
		$_SESSION["passadm"]=$radm["password"];
		header("location:index.php");
	}else{
		header("location:login.php");
	}
?> 