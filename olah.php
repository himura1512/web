<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqlinput = mysql_query("select * from data order by iddata asc");
	echo "<br><a href='?p=add'><h3>Tambah Data</a></h3>";
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>No</th>";
		echo "<th>Kurs(Rp)</th>";
		echo "<th>JUB (Miliaran)</th>";
		echo "<th>Inflansi (%)</th>";
		echo "<th>IHSG</th>";
		echo "<th>Aksi</th>";
	echo "</tr>";
	$no = 1;
	while($rinput=mysql_fetch_array($sqlinput)){
		echo "<tr>";
			echo "<td>$no</td>";
			echo "<td>$rinput[kurs]</td>";
			echo "<td>$rinput[uang]</td>";
			echo "<td>$rinput[inflansi]</td>";
			echo "<td>$rinput[ihsg]</td>";
			echo "<td><a href='?p=olahedit&idd=$rinput[iddata]'>Edit</a> | 
					  <a href='?p=olahkelo&idd=$rinput[iddata]'>Kelola</a> |
			          <a href='?p=olahdel&idd=$rinput[iddata]'>Delete</a></td>";
		echo "</tr>";
		$no++;
	}
	echo "</table>";
?>
</fieldset>
</div>