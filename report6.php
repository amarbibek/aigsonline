
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$result = $db_handle->runQuery("SELECT * FROM six_result");
$header = $db_handle->runQuery("SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='aigsonlinedb' 
    AND `TABLE_NAME`='six_result'");

require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',4);		
foreach($header as $heading) {

	foreach($heading as $column_heading)
	
	$pdf->Cell(12,10,$column_heading,1);

}
foreach($result as $row) {
	$pdf->SetFont('Arial','',5);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(12,10,$column,1);
		
}

$pdf->Output();
?>