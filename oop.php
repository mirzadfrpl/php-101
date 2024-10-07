<?php

class Animals{
    public string $Name;
    public string $Color;

    public function jump(){
        echo "iam jumping";
    }

    public function sound(string $type){
        echo "I'm $type}";
    }
}

$dog = new Animals();
$dog->Name = "Bulldog";
$dog->Color = "Black";

$cat = new Animals();
$cat->Name = "Kitty";
$cat ->Color = "Orange";


var_dump($dog);
echo "\n";
var_dump($cat);
