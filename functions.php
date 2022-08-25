<?php
$myVariable;

function myFirstFunction() {
    return "This is my first function";
}

function calculateMyNumbers(int $numberA, int $numberB): string {
    return "You summary is " . $numberA + $numberB;
}

echo myFirstFunction() . " whatever else \n\n";
echo calculateMyNumbers(10, 89);