<?php
// That's our first variable
$title = 'Hotelbird is the best software company in the world!'; // string
$year = 2022; // integer

/* $youAcceptTheTerms = true; // boolean
$price = 22.5; // float
$hasInformation = null; */
$price = 23.0;
$person = ['Jefferson', 35, 'Munich', true, $price];

// $year = (string) $year;

$output = [$year, (integer) $year];

var_dump($output);

