<?php 
/**
 * We need to receive a 3 different parameters, wich are:
 * - day of birth;
 * - month of birth;
 * - year of birth;
 * 
 * With this 3 params we should calculate what is the age of the person
 * in days;
 * 
 * e.g. 
 * 10
 * 11
 * 1986
 * 
 * return the sum of all days since the given date.
 */

$dayOfBirth = (int) readline('What is the day that you get born? ');
$monthOfBirth = (int) readline('What is the month that you get born? ');
$yearOfBirth = (int) readline('What is the year that you get born? ');

$todaysYear = date('Y');

$yearsInDays = (($todaysYear - $yearOfBirth) - 1) * 365;
$totalAgeInDays = ($yearsInDays + ($monthOfBirth * 30) + $dayOfBirth);

echo "You born in $dayOfBirth.$monthOfBirth.$yearOfBirth and you lived $totalAgeInDays so far";
