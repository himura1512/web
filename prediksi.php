<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqlinput = mysql_query("select * from perkiraan order by iddata asc");
	echo "<a href='cetak.php'><h3>Cetak Hasil </h3></a> ";
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>No</th>";
		echo "<th>Kurs(Rp)</th>";
		echo "<th>JUB (Miliaran)</th>";
		echo "<th>Inflansi (%)</th>";
		echo "<th>IHSG</th>";
		echo "<th>Prediksi BI Rate (%) </th>";
		echo "<th>Aksi</th>";
	echo "</tr>";
	$no = 1;
	while($rinput=mysql_fetch_array($sqlinput)){
	$sqlhasil = mysql_query("select * from data where iddata='$rinput[iddata]' order by iddata asc");
	$rhasil=mysql_fetch_array($sqlhasil);
		echo "<tr>";
			echo "<td>$no</td>";
			echo "<td>$rhasil[kurs]</td>";
			echo "<td>$rhasil[uang]</td>";
			echo "<td>$rhasil[inflansi]</td>";
			echo "<td>$rhasil[ihsg]</td>";
			echo "<td>$rinput[predik]</td>";
			echo "<td><a href='?p=olahdelprediksi&idd=$rinput[iddata]'>Delete</a></td>";
		echo "</tr>";
		$no++;
	}
	echo "</table>";

?>
</fieldset>
</div>