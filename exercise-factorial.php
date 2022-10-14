<?php 
/**
 * Given an integer number, calculate the factorial of it
 * 
 * e.g.: f = 5 => 5 x 4 x 3 x 2 x 1 = 120
 * 
 * ((((5*4) * 3) * 2) * 1)
 * 
*/

function calculateFactorial(int $factorialOf): int|float {
    $factorialNumber = $factorialOf;
    
    for($n = $factorialOf; $n >= 1; $n--) {
        if(($n - 1) > 0) {
            $factorialNumber *= $n - 1;
        }
    }

    return $factorialNumber;
}

$number = (int) readline("What is the number that you want to calculate: ");
$result = calculateFactorial($number);

echo "The factorial of {$number} is: {$result}";
