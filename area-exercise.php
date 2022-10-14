<?php 
function totalArea (float $height, float $length) {
    return $height * $length;
}

$height = (int) readline ('How high is the line?');
$length = (int) readline (' how long is the line?');

$total = totalArea($height, $length);
echo "The total area is {$total}M2";