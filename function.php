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

// Data type declaration
function sum(int $a,  int $b)
{
    $result = $a + $b;
    echo $result;
}

// return value
function hitungAngka(int $a, int $b): string
{
    return $a + $b;
}

function faktorial(int $angka): int
{
    $total = 1;

    for ($i = 1; $angka >= $i; $angka--) {
        $total *= $angka;
    }

    return $total;
}

// recursive function 
function faktorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * faktorialRecursive($value - 1);
    }
}

echo faktorialRecursive(7);
