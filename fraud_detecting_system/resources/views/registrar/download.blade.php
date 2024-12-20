<?php
require_once '../vendor/autoload.php';

use Dompdf\Dompdf;

$html = file_get_contents('certificate.blade.php');

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

$output = $dompdf->output();
file_put_contents('certificate.pdf', $output);

echo 'PDF created successfully!';
?>
