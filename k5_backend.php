<?php

if(isset($_POST['submit'])){
$sn=$_POST['sn'];
$fn=$_POST['fn'];
$mn=$_POST['mn'];


require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,10,"Registration Details",1,1,'C');

$pdf->Cell(50,10,"STUDENT NAME:",1,0);
$pdf->Cell(50,10,"Fathers NAME:",1,0);
$pdf->Cell(0,10,"Mothers NAME:",1,1);
$pdf->Cell(50,10,$sn,1,0);
$pdf->Cell(50,10,$fn,1,0);
$pdf->Cell(0,10,$mn,1,0);

$file= time() .'.pdf';

$pdf->output($file,'D');/* D is used for download file*/
}

?>




