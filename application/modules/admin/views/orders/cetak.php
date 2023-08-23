<?php

require_once('dompdf/dompdf_config.inc.php');
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$html =
	'<html><body>' .
	'Terimaksih <b>' .$nama. '</b> telah mendaftar.' .

	'<p>Alamat anda di <b>' .$alamat. '</b></p>'.

	'</body></html>';

$dompdf = new dompdf();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('Data_'.$nama.'.pdf');


?>