<?php 
/**
 * Write a program that will get a number as input that we will use as a limiter 
 * and we should return all the odd numbers until we reach this limit;
 * 
 * e.g.: input: 5, output: 1, 3, 5
 */

$limit = (int) readline('What is the limit for your counter? '); 

$output = [];
for($counter = 1; $counter <= $limit; $counter++) {

    if($counter % 2 != 0) {
        $output[] = $counter;
    }
}

echo join(', ', $output);