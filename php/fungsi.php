<?php

// replace kata pada kalimat
$kalimat = "Saya ingin makan ayam";
echo str_replace('ayam', 'burger', $kalimat);

function cetak()
{

    echo "Pesan dicetak!"  . PHP_EOL;
}

function sapa(string $name = '')
{
    echo "Hallo $name" . PHP_EOL;
}
cetak();
sapa();


// Parameter referensi
function kali(&$angka){
   echo $angka = 2 * $angka . PHP_EOL;
}

$x = 5;
kali($x);
kali($x);
kali($x);
kali($x);
kali($x);