<?php 
$weekDay = 'Friday';
$weather = 'sunny';

if($weekDay == 'Friday' && $weather == 'sunny') {
    echo 'Let\'s have a bier.';
} elseif ($weekDay == 'Friday' && $weather == 'rainny') {
    echo 'Let\'s have a wine.';
} else {
    echo 'Let\'s just chill';
}

echo "\n\n";

$number1 = 5;
$number2 = 4;

$number1++; // equals $number1 += 1 // and equals $number1 = $number1 + 1

$number1 = $number1 + $number2; // now number 1 is 9

$number1 += $number2;

$name = 'Jefferson';
$surname = ' Souza';
$name .= $surname;

echo $number1;

echo "\n\n";

if($number2 <= 5) {
    echo "The number2 is equal 4";
} else {
    echo "The number2 is different than 4";
}