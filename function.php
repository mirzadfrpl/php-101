<?php

function sayHello()
{
    echo "Hello";
    echo " World\n";
}

function sayName($nama)
{
    echo "my name is {$nama}\n";
}

function sayNameAndAge($nama, $umur = 10)
{
    echo "my name is {$nama}\n";
    echo "and my age is {$umur}";
}

function perhitungan(...$angka) // rest parameter
{
    $result = 0;
    foreach ($angka as $nilai) {
        $result += $nilai;
    }

    echo $result;
}

perhitungan(4, 5, 6, 7, 8);
