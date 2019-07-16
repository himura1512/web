<?php
   include "koneksi.php";
   include "fpdf/fpdf.php";
   
    $pdf = new FPDF();

    $pdf->addPage();
    $pdf->setFont('Arial','B',14);
	$pdf->Ln(5);
    $pdf->CELL(0,2,'LAPORAN HASIL PREDIKSI BI RATE ', '0','1','C',false);
    $pdf->Line(10,20,200,20);
    $pdf->setFont('Arial','',9);
    $pdf->setFillColor(222,222,222);
    $pdf->Ln(7);
		
    $pdf->CELL(10,8,'NO',1,0,'C',1);
    $pdf->CELL(25,8,'Kurs (Rp)',1,0,'C',1);
    $pdf->CELL(25,8,'JUB (MIliaran)',1,0,'C',1);
    $pdf->CELL(45,8,'Inflansi (%)',1,0,'C',1);
    $pdf->CELL(50,8,'IHSG',1,0,'C',1);
    $pdf->CELL(35,8,'BI RATE (%)',1,0,'C',1);
	$pdf->Ln(0);
	$no= 0;
	$sqlinput = mysql_query("select * from perkiraan order by iddata asc");
	while($rinput=mysql_fetch_array($sqlinput)){
	$sqlhasil = mysql_query("select * from data where iddata='$rinput[iddata]' order by iddata asc");
    $rhasil=mysql_fetch_array($sqlhasil);
	$no++;
	$pdf->Ln(7);
    $pdf->setFont('arial','',9);
    $pdf->setFillColor(255,255,255);
    $pdf->cell(10,8,$no,1,0,'C',1);
    $pdf->cell(25,8,$rhasil['kurs'],1,0,'L',1);
    $pdf->cell(25,8,$rhasil['uang'],1,0,'C',1);
	$pdf->cell(45,8,$rhasil['inflansi'],1,0,'C',1);
    $pdf->cell(50,8,$rhasil['ihsg'],1,0,'L',1);
    $pdf->cell(35,8,$rinput['predik'],1,0,'L',1);
	}
    $pdf->setFont('Arial','',10);
    $pdf->text(145,200,'PADANG  2017');
    $pdf->text(148,225,'Admin ');
    
    $pdf->output();
    ?>
