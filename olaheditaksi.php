<?php
	session_start();
	include "koneksi.php";
	$sqlinput= mysql_query("update data set kurs='$_POST[kurs]',uang='$_POST[uang]',inflansi='$_POST[inflansi]',ihsg='$_POST[ihsg]',target='$_POST[target]' where iddata='$_POST[idd]'");
	
	if($sqlinput){
		echo "Data berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=olah'>";
?>