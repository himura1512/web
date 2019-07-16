<?php
	session_start();
	include "koneksi.php";
	
	$sqlinput = mysql_query("insert into data (iddata,kurs,uang,inflansi,ihsg,target) values ('$rdata[iddata]', '$_POST[kurs]','$_POST[uang]','$_POST[inflansi]',  '$_POST[ihsg]',  '$_POST[target]')");
	
	if($sqlinput){
		echo "Data Berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=olah'>";
?>
