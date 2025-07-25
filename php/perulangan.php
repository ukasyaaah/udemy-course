<?php

$warna = ['merah', 'merah', 'kuning', 'Hijau', 'merah'];
$merah = 0;

for ($i = 0; $i < 4; $i++) {
}

foreach ($warna as $urut => $value) {
    echo "indeks no $urut, berisi $value" . PHP_EOL;
    if ($value == 'merah') {
        $merah++;
    }
}

var_dump($merah);
