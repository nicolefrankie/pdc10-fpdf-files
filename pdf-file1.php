<?php
require('vendor/autoload.php');

use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Nicole Frankie Capuno', 0, 1);
$pdf->Cell(40,10,'BSIT', 0, 1);
$pdf->Cell(40,10,'capuno.nicolefrankie@auf.edu.ph', 0, 1);
$pdf->Cell(40,10,'20-1445-568', 0, 1);
$pdf->Output();
?>