
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$result = $db_handle->runQuery("SELECT * FROM third_result");
$header = $db_handle->runQuery("SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='aigsonlinedb' 
    AND `TABLE_NAME`='third_result'");

require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',3);		
foreach($header as $heading) {

	foreach($heading as $column_heading)
	
	$pdf->Cell(11,10,$column_heading,1);

}
foreach($result as $row) {
	$pdf->SetFont('Arial','',4);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(11,10,$column,1);
		
}

$pdf->Output();
?>