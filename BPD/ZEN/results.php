<?php
require_once('../../../vendor/autoload.php');
// Collect data from the $_POST array.
$formData = $_POST;

$pdf = new FPDM('ZEN.pdf'); // Path to your PDF template file
$formData['Total'] = (String)($formData['anger'] + $formData['moodiness'] + $formData['emptiness'] + $formData['identity_disturbance'] + $formData['self_destructive_acts'] + $formData['impulsivity'] + $formData['suspiciousness'] + $formData['abandonment_avoidance'] + $formData['unstable_relationships']);
$pdf->Load($formData, false);

$pdf->Merge();

$pdf->Output()
?>

