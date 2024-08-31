<?php

//Number to string

fscanf(STDIN, " %d ", $num);

$digitToString = [

    '0' => 'zero',
    '1' => 'one',
    '2' => 'two',
    '3' => 'three',
    '4' => 'four',
    '5' => 'five',
    '6' => 'six',
    '7' => 'seven',
    '8' => 'eight',
    '9' => 'nine',

];

$numToStr = strval($num);

$output = [];

foreach(str_split($numToStr) as $digit) {

    $output[] = $digitToString[$digit];

}

$finalResult = implode(' ', $output);

echo $finalResult;
