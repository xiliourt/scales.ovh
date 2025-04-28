<?php
require_once('../../vendor/autoload.php');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// Collect data from the $_POST array.
$formData = $_POST;

$pdf = new FPDM('LSP-16.pdf'); // Path to your PDF template file

$formData['Withdrawal'] = (String)($formData['Question1'] + $formData['Question2'] + $formData['Question3'] + $formData['Question8']);
$formData['Self-care'] = (String)($formData['Question4'] + $formData['Question5'] + $formData['Question6'] + $formData['Question9']  + $formData['Question16']);
$formData['Compliance'] = (String)($formData['Question10'] + $formData['Question11'] + $formData['Question12']);
$formData['Anti-social'] = (String)($formData['Question7'] + $formData['Question13'] + $formData['Question14'] + $formData['Question15']);
$formData['Total'] = (String)($formData['Withdrawal'] + $formData['Self-care'] + $formData['Compliance'] + $formData['Anti-social']);

$pdf->Load($formData, false);

$pdf->Merge();

$pdf->Output()
?>

