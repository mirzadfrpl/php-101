<?php

$warna = ["biru", "merah", "kuning"]; // indexing array

// associative array // key  => value
$data_diri = [
    "nama" => "bayu",
    "umur" => 12,
    "alamat" => "jonggol"
];

foreach ($data_diri as $data => $nilai) {
    echo "{$data} = {$nilai} \n";
}

// for ($index = 0; $index <= count($warna); $index++) {
//     echo "\n"; // new line
//     echo $warna[$index];
// }

// foreach ($warna as $x) {
//     echo "\n"; // new line
//     echo ($x);
// }

// $contoh = "Hello";
// var_dump($contoh);

// $nilai = 10;
// while ($nilai >= 1) {
//     echo "\n{$nilai}";
//     $nilai--;
// }
