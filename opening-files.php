<?php
$filename = 'files/greeting.txt';
$file = fopen($filename, 'r');
$text = fread($file, filesize($filename));
fclose($file);

echo $text;