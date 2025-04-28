<?php
require_once('../../vendor/autoload.php');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// Collect data from the $_POST array.
$formData = $_POST;

$pdf = new FPDM('WHODAS.pdf'); // Path to your PDF template file


# TOTALS
$formData['D1TOTAL'] = (String)($formData['d1_1'] + $formData['d1_2'] + $formData['d1_3'] + $formData['d1_4'] + $formData['d1_5'] + $formData['d1_6']);
$formData['D2TOTAL'] = (String)($formData['d2_1'] + $formData['d2_2'] + $formData['d2_3'] + $formData['d2_4']  + $formData['d2_5']);
$formData['D3TOTAL'] = (String)($formData['d3_1'] + $formData['d3_2'] + $formData['d3_3'] + $formData['d3_4']);
$formData['D4TOTAL'] = (String)($formData['d4_1'] + $formData['d4_2'] + $formData['d4_3'] + $formData['d4_4'] + $formData['d4_5']);
$formData['D51TOTAL'] = (String)($formData['d5_1'] + $formData['d5_2'] + $formData['d5_3'] + $formData['d5_4']);
$formData['D52TOTAL'] = (String)($formData['d5_5'] + $formData['d5_6'] + $formData['d5_7'] + $formData['d5_8']);
$formData['D6TOTAL'] = (String)($formData['d6_1'] + $formData['d6_2'] + $formData['d6_3'] + $formData['d6_4'] + $formData['d6_5'] + $formData['d6_6'] + $formData['d6_8'] + $formData['d6_8']);
$formData['TOTAL'] = (String)($formData['D1TOTAL'] + $formData['D2TOTAL'] + $formData['D3TOTAL'] + $formData['D4TOTAL'] + $formData['D51TOTAL']  + $formData['D52TOTAL'] + $formData['D6TOTAL']);


# AVG
$formData['D1AVG'] = (String)round(($formData['D1TOTAL'] / 6), 2);
$formData['D2AVG'] = (String)round(($formData['D2TOTAL'] / 5), 2);
$formData['D3AVG'] = (String)round(($formData['D3TOTAL'] / 4), 2);
$formData['D4AVG'] = (String)round(($formData['D4TOTAL'] / 5), 2);
$formData['D51AVG'] = (String)round(($formData['D51TOTAL'] / 4), 2);
$formData['D52AVG'] = (String)round(($formData['D52TOTAL'] / 4), 2);
$formData['D6AVG'] = (String)round(($formData['D6TOTAL'] / 8), 2);
$formData['total5'] = (String)round(($formData['TOTAL'] / 36), 2);

$pdf->Load($formData, false);

$pdf->Merge();

$pdf->Output()
?>
