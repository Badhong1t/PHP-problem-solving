<?php

//Lone zeroes

fscanf(STDIN, " %d ", $int);

function loneZeroes($intArr)
{
    $str = (string)$intArr;

    $str = ltrim($str, '0');

    if ($str === '') {

        return 0;

    }

    $count = 0;

    for ($i = 0; $i < strlen($str); $i++) {

            if ($str[$i] == '0'){

                if (($i === 0 || $str[$i-1] !== '0') && ($i === strlen($str) - 1 || $str[$i+1] !== '0')) {

                    $count++;

                }

            }

    }

    return $count;
}

echo loneZeroes($int);