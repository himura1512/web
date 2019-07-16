<div id="kelola">
<?php
	include "koneksi.php";	
	$sqlinput = mysql_query("select * from data where iddata='$_GET[idd]'");
	$rd = mysql_fetch_array($sqlinput);
	$sqlmax = mysql_query("select max(kurs) as max from data");
	$rmax = mysql_fetch_array($sqlmax);
	$sqlmin = mysql_query("select min(inflansi) as min from data");
	$rmin = mysql_fetch_array($sqlmin);
	
  $xk=$rd['kurs'];
  $xm=$rd['uang'];
  $xe=$rd['inflansi'];
  $xp=$rd['ihsg'];
  $xt=$rd['target'];
  $max=$rmax['max'];
  $min=$rmin['min'];

  $x1=(0.8*($xk-$min)/($max-$min))+0.1;
  $x11=number_format($x1,4);

  $x2=(0.8*($xm-$min)/($max-$min))+0.1;
  $x22=number_format($x2,4);

  $x3=(0.8*($xe-$min)/($max-$min))+0.1;
  $x33=number_format($x3,4);

  $x4=(0.8*($xp-$min)/($max-$min))+0.1;
  $x44=number_format($x4,4);
  
  $x5=(0.8*($xt-$min)/($max-$min))+0.1;
  $x55=number_format($x5,4);
  

 $v11=96.4462 ;	$v21= -362.8555 ; $v31=  24.1741  	;$v41=	-60.0215;
 $v12=  97.1047;$v22= 314.0755 ;  $v32= -57.3430  	; $v42= 	 9.945 ;
  
 $voj1=  5.4466;
 $voj2= -147.2846;
  

 
$w1=1.0326;   $w2= 0.6783;


$woj=   -0.4185;
 

$a= 0.95;

$znetj1=$voj1+($x11*$v11)+($x22*$v21)+($x33*$v31)+($x44*$v41);
$znetj11=number_format($znetj1,4);

$znetj2=$voj2+($x11*$v12)+($x22*$v22)+($x33*$v32)+($x44*$v42);
$znetj22=number_format($znetj2,4);

$zj1=1/(1+(EXP(-$znetj1)));
$zj11=number_format($zj1,4);

$zj2=1/(1+(EXP(-$znetj2)));
$zj22=number_format($zj2,4);

$ynet=$woj+($w1*$zj1)+($w2*$zj2);
$ynett=number_format($ynet,4);

$yk=1/(1+(EXP(-$ynet)));
$ykk=number_format($yk,4);



$xtt=(xt);
$hasil=$ynet*($max-$min)+$min;
$hasil4=number_format($hasil,2);

$hasil5=($hasil4);


$e=$x55-$ynet;
$ee=number_format($e,4);

//-----------------------------------

$Nwjk1=$a*$dk*$zj1;
$Nwjk11=number_format($Nwjk1,4);

$Nwjk2=$a*$dk*$zj2;
$Nwjk22=number_format($Nwjk2,4);

//====================================

$dv11=$a*$x1*$dj1;
$dv111=number_format($dv11,4);

$dv12=$a*$x2*$dj1;
$dv122=number_format($dv12,4);

//--
$dv21=$a*$x1*$dj2;
$dv211=number_format($dv21,4);

$dv22=$a*$x2*$dj2;
$dv222=number_format($dv22,4);


//--
$dv31=$a*$x1*$dj3;
$dv311=number_format($dv31,4);

$dv32=$a*$x2*$dj3;
$dv322=number_format($dv32,4);


//--
$dv41=$a*$x1*$dj4;
$dv411=number_format($dv41,4);

$dv42=$a*$x2*$dj4;
$dv422=number_format($dv42,4);


//============================

$dvoj1=$a*$dj1;
$dvoj11=number_format($dvoj1,4);

$dvoj2=$a*$dj2;
$dvoj22=number_format($dvoj2,4);


//-----------------------------

$bv11=$v11+$dv11;
$bv111=number_format($bv11,4);

$bv12=$v12+$dv12;
$bv122=number_format($bv12,4);



//--
$bv21=$v21+$dv21;
$bv211=number_format($bv21,4);

$bv22=$v22+$dv22;
$bv222=number_format($bv22,4);


//--
$bv31=$v31+$dv31;
$bv311=number_format($bv31,4);

$bv32=$v32+$dv32;
$bv322=number_format($bv32,4);



//--
$bv41=$v41+$dv41;
$bv411=number_format($bv41,4);

$bv42=$v42+$dv42;
$bv422=number_format($bv42,4);

//+++++
$bvoj1=$voj1+$dvoj1;
$bvoj11=number_format($bvoj1,4);

$bvoj2=$voj2+$dvoj2;
$bvoj22=number_format($bvoj2,4);
echo"<br></br>";
		echo "<table border='0'>";
		echo "<tr>";
		echo "<th colspan='3'>Kelola Data</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Variable</th>";
		echo "<th>Nilai</th>";
		echo "<th>Transformasi</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Kurs Dollar</td>";
		echo "<td>$rd[kurs]</td>";
		echo "<td>$x11</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Jumlah Uang Beredar</td>";
		echo "<td>$rd[uang]</td>";
		echo "<td>$x22</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Inflansi</td>";
		echo "<td>$rd[inflansi]</td>";
		echo "<td>$x33</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>IHSG</td>";
		echo "<td>$rd[ihsg]</td>";
		echo "<td>$x44</td>";
		echo "</tr>";

		
		
	    echo "</table>";
		echo "<h3>Data Perkiraan BI Rate</h3>";		
		echo "<table border='0'>";
		echo "<tr>";
		echo "<th colspan='5'>Nilai Data Pelatihan</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>X1</th>";
		echo "<th>X2</th>";
		echo "<th>X3</th>";
		echo "<th>X4</th>";
		echo "<th>Target</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>$x11</td>";
		echo "<td>$x22</td>";
		echo "<td>$x33</td>";
		echo "<td>$x44</td>";
		echo "<td>$x55</td>";
		echo "</tr>";

	    echo "</table>";

			echo "<br> </br>";
			echo "<table border='0'>";
		echo "<tr>";
		echo "<th colspan='9'>Nilai Data Pelatihan</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Nilai Znet1</th>
            <th>Nilai Znet2</th>
            <th>Nilai Zj1</th>
            <th>Nilai Zj1</th>
            <th>Nilai Y</th>
			<th>Nilai YK</th>
			<th>Nilai Error</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>$znetj11</td>";
		echo "<td>$znetj22</td>";
		echo "<td>$zj11</td>";
		echo "<td>$zj22</td>";
		echo "<td>$ynett</td>";
		echo "<td>$ykk</td>";
		echo "<td>$ee </td>";
		echo "</tr>";
		
	    echo "</table>";
		
		echo "<br></br>";

		
	echo "<table border='0'>";
	echo "<tr>";
	echo "<th colspan='15'>Nilai Bobot & Bias Baru Dari Input Ke Hidden</th>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>V11 Baru</th>
            <th>V12 Baru</th>
            <th>V21 Baru</th>
            <th>V22 Baru</th>
            <th>V31 Baru</th>
			<th>V32 Baru</th>
			<th>V41 Baru</th>
			<th>V42 Baru</th>
			<th>VoJ1 Baru</th>
			<th>VoJ2 Baru</th>";
		
		echo "</tr>";
		echo "<tr>";
		echo "<td>$bv111</td>";
		echo "<td>$bv122</td>";
		
		echo "<td>$bv211</td>";
		echo "<td>$bv222</td>";
		
		echo "<td>$bv311</td>";
		echo "<td>$bv322</td>";
		
		echo "<td>$bv411</td>";
		echo "<td>$bv422</td>";
		
		echo "<td>$bvoj11</td>";
		echo "<td>$bvoj22</td>";
		
		echo "</tr>";
    echo "</table>";
	echo "<br></br>";
$bwoj1=$Nwjk1+$w1;
$bwoj11=number_format($bwoj1,4);

$bwoj2=$Nwjk2+$w2;
$bwoj22=number_format($bwoj2,4);
	echo "</table>";
		echo "<table border='0'>";
		echo "<tr>";
		echo "<th colspan='3'>NILAI BOBOT & BIAS BARU DARI HIDDEN KE OUTPUT</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>WoJ1 Baru</th>";
		echo "<th>WoJ2 Baru</th>";
		
		echo "</tr>";
		echo "<tr>";
		echo "<td>$bwoj11</td>";
		echo "<td>$bwoj22</td>";
		
		echo "</tr>";
	    echo "</table>";
		

echo"<br></br>";
	echo "</table>";
		echo "<table border='0'>";
		echo "<tr>";
		echo "<th colspan='3'>HASIL PREDIKSI BI RATE  </th>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>HASIL PREDIKSI SISTEM</th>";
		echo "<th>BI RATE REAL</th>";
		echo "</tr>";
		echo "<tr>";

		echo "<td>$hasil5</td>";
		echo "<td>$xt</td>";
		echo "</tr>";
	    echo "</table>";
		
		
echo"<br></br>";
echo "</table>";
echo"<br></br>";

echo "<h2><br>Perkiraan BI Rate = $hasil5 %</h2>";
echo"<form action='' method='POST' enctype='multipart/form-data'>";
echo"<input type='hidden' name='idd' value='$rd[iddata]' />";
echo"<input type='submit' name='predik' value='Simpan Data'>  ";
echo"</form>";
echo"<form action='?p=olah' method='POST'>";
echo"<input type='submit' name='batal' value='BATAL'>  ";
echo"</form>";
echo"<br></br>";
$hasil4=mysql_fetch_array($sqlambil);
	if($_POST["predik"]){
	$sqlambil = mysql_query("select * from perkiraan ");
	$rambil = mysql_fetch_array($sqlambil);
	$iddata= $rambil['iddata'];
	if ($iddata==$rd[iddata]) {
	echo "<script language='JavaScript'>
            alert('Perkiraan telah disimpan sebelumnya');
            document.location='?p=prediksi';
        </script>";
	}
	else {
	
		
		mysql_query("insert into perkiraan (iddata,predik) values ('$rd[iddata]','$hasil5')");
		echo "<script language='JavaScript'>
            alert('Perkiraan berhasil disimpan');
            document.location='?p=prediksi';
        </script>";
	
	}
}

	?>

</div>
