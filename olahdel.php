<?php
	session_start();
	include "koneksi.php";
	
	$sqldel = mysql_query("delete from data where iddata='$_GET[idd]'");
	
	if($sqldel){
		echo "Data berhasil Dihapus";
	}else{
		echo "Gagal Menghapus";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=olah'>";
?>