<?php
require('vendor/autoload.php');

use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddFont('seguisbi','','seguisbi.php');
$pdf->AddFont('SNAP____','','SNAP____.php');
$pdf->AddFont('Sono-VariableFont_MONO,wght','','Sono-VariableFont_MONO,wght.php');

$pdf->AddPage();
$pdf->SetFont('seguisbi','',20);
$pdf->Write(11,'"When Granted Everything, You Can`t Do Anything"');
$pdf->ln(10);
$pdf->Write(10,'- Gojo Satoru');
$pdf->ln(15);

$pdf->SetFont('SNAP____','',20);
$pdf->Write(11,'"It`s Not About Whether I Can. I Have To Do It."');
$pdf->ln(10);
$pdf->Write(10,'- Fushiguro Megumi');
$pdf->ln(15);

$pdf->SetFont('Sono-VariableFont_MONO,wght','',20);
$pdf->Write(11,'"I Don`t Know How I`ll Feel When I`m Dead, But I Don`t Want To Regret The Way I Lived."');
$pdf->ln(10);
$pdf->Write(10,'- Itadori Yuji');
$pdf->Output();
?>