<?php
require_once('../../vendor/autoload.php');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// Collect data from the $_POST array.
$formData = $_POST;

$pdf = new FPDM('AQ10.pdf'); // Path to your PDF template file

$pdf->Load($formData, false);

$pdf->Merge();

$pdf->Output()
?>

