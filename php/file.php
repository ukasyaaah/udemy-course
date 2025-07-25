
<?php

$kalimat = "halo random" . PHP_EOL;
file_put_contents('file.txt', $kalimat, FILE_APPEND);

$data = serialize($kalimat);
$isi = file_get_contents('file.txt',);
echo $isi;
echo $data;