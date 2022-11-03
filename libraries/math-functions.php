<?php
$number = 1;
function calculateMyNumbers(int $numberA, int $numberB): string {
    return "You summary is " . $numberA + $numberB;
}

function calculateFactorial(int $factorialOf): int|float {
    $factorialNumber = $factorialOf;
    
    for($n = $factorialOf; $n >= 1; $n--) {
        if(($n - 1) > 0) {
            $factorialNumber *= $n - 1;
        }
    }

    return $factorialNumber;
}