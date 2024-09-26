<?php

// 1. String
$karakter = "Hello";
$karakter_juga = 'Hello';

// 2. Number
$bulat = 16;
$desimal = 3.14;

// 3. Boolean --> true / false
$flag = true;

// 4. Array --> Bisa menampung banyak data 
// Indexing Array
$warna = ["biru", "abu-abu", "merah", 123, false, [111, 222, 333]];
// echo $warna[2];
// $warna[1] = "putih";
// $warna[] = "hijau";
// var_dump($warna);
// unset($warna[1]);
// var_dump($warna);

// Associative Array
$data_diri = [
    "nama" => "Hilmy",
    "umur" => 22,
    "alamat" => [
        "kota" => "bekasi",
        "jalan" => "sukamakmur"
    ]
];

// var_dump($data_diri);

// 5. NULL
$kosong = null;
echo $kosong;
var_dump($kosong);
