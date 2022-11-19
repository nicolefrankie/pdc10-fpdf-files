<?php
require('vendor/autoload.php');

use Fpdf\Fpdf;

class PDF extends FPDF
{
    // Simple table
    function BasicTable($headers, $data)
    {
        // Header
        foreach($headers as $col)
            $this->Cell(50,7,$col,1);
        $this->Ln();
        // Data
        foreach($data as $row)
        {
            foreach($row as $col)
                $this->Cell(50,6,$col,1);
            $this->Ln();
        }
    }
}

$csv_file = 'countries.csv';
$handle = fopen($csv_file, 'r');
$row_index = 0; // initialize
$headers = [];
$data = [];

while (($row_data = fgetcsv($handle, 1000, ',')) !== FALSE)
{
	if ($row_index++ < 1)
	{
		foreach ($row_data as $col)
		{
			array_push($headers, $col);
		}
		continue;
	}

	$tmp = [];
	for ($index = 0; $index < count($headers); $index++)
	{
		$tmp[$headers[$index]] = $row_data[$index];
	}
	array_push($data, $tmp);
}

fclose($handle);

$pdf = new PDF();
$pdf->SetFont('Arial','',12);
$pdf->AddPage();
$pdf->BasicTable($headers, $data);
$pdf->Output();
?>