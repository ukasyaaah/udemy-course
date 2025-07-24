<?php

$array = ['sapi', 'kambing', 'unto'];

$arr = array('GL', 'CB', 'MegaPro');

$array[99] = 'anjing';
echo $array[10] ?? 'Gada';

print_r($arr);
print_r($array);

echo '--------------------------------' . PHP_EOL;
// Array asosiatif
$orang = [
    'nama' => 'Har',
    'gol' => 'B',
    'alamat' => 'Bandung',
];

$nama = 'oyen';
$warna = 'oren';
echo $orang['nama'] . PHP_EOL;

// Compact, ubah var jadi arr asosiatif
$data =  compact('nama', 'warna');
print_r($data);

// array multidimensi
$people = [
    'nama' => 'Har',
    'gol' => 'B',
    'alamat' => 'Bandung',
    'hobi' => ['Masak', 'Baca']
];

$hidup = ["orang" => $orang, "people" => $people];
print_r($people);
print_r($hidup);
