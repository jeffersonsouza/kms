<?php

$dayName = readline ('Week day name in english: ');

$weekdays = [
    'Monday' => 'Montag',
    'Tuesday' => 'Dienstag',
    'Wednesday' => 'Mittwoch',
    'Thursday' => 'Donnerstag',
    'Friday' => 'Freitag',
    'Saturday' => 'Samstag',
    'Sunday' => 'Sonntag',
];

if(array_key_exists($dayName, $weekdays)) {
    echo $weekdays[$dayName];
} else {
    echo 'This day is not valid.';
}

