<?php

// basic function
function sayHello()
{
    echo "Hello";
    echo " World\n";
}

// paramter
function sayName($nama)
{
    echo "my name is {$nama}\n";
}

// Default parameter
function sayNameAndAge($nama, $umur = 10)
{
    echo "my name is {$nama}\n";
    echo "and my age is {$umur}";
}

// rest parameter
function perhitungan(...$angka)
{
    $result = 0;
    foreach ($angka as $nilai) {
        $result += $nilai;
    }

    echo $result;
}

// Data type parameter
function sum(int $a,  int $b)
{
    var_dump($a, $b);
    $result = $a + $b;
    echo $result;
}
