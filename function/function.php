
<?php

function getName($name){

    echo "name:" .$name;
}

function dateToDay(){

    return date("Y/m/d");
}

function clc($a,$b){

    return $a*$b;
}

$n = "ali";

getName($n);


echo dateToDay();

$number1 = 15;
$number2 = 26;

echo clc($number1,$number2);

