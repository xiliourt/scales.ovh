<?php
require_once('../../vendor/autoload.php');
// Collect data from the $_POST array.
$formData = $_POST;

$pdf = new FPDM('HoNOS.pdf'); // Path to your PDF template file
if (array_key_exists("Disorders", $formData) )
    $formData['Disorders'] = implode(", ", $_POST['Disorders']);
$formData['Total'] = (String)($formData['1'] + $formData['2'] + $formData['3'] + $formData['4'] + $formData['5'] + $formData['6'] + $formData['7'] + $formData['8'] + $formData['9'] + $formData['10'] + $formData['11'] + $formData['12']);
 
$pdf->Load($formData, false);

$pdf->Merge();

$pdf->Output()
?>

