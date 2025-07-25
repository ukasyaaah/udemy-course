<?php

$hasil = false;

if ($hasil) {
    echo "Selamat" . PHP_EOL;
} else if ($hasil === null) {
    echo " Ga" . PHP_EOL;
}

$nilai = 'A';

switch ($nilai) {
    case 'A':
        echo 'Ga lulus';
        break;
    case 'B':
        echo 'Yawes og';
        break;
    default:
        echo 'ra nggenah';
}
