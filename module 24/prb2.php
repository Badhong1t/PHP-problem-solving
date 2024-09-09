<?php

//Remove k digits

function removeKDigits($N,$K){

    $stack = [];
    $length = strlen($N);

    for ($i = 0; $i < $length; $i++) {

        $digit = $N[$i];

        while ($K > 0 && !empty($stack) && end($stack) > $digit) {

            array_pop($stack);
            $k--;

        }

        array_push($stack, $digit);

    }

    while ($K > 0) {

        array_pop($stack);
        $k--;

    }

    $result = implode('',$stack);

    return $result === '' ? '0' : $result;

}

fscanf(STDIN, "%d", $T);

for ($i = 0; $i < $T; $i++) {

    fscanf(STDIN, " %s %d ", $N, $K);
    echo removeKDigits($N, $K). PHP_EOL;

}