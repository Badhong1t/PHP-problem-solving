<?php

//Remove Trailing zeroes

fscanf(STDIN, " %s ", $strNum);

function rmvTrailingZeroes($strNum) {

    if(strpos($strNum, '.') !== false){

        $strNum = rtrim($strNum, '0');

        if (substr($strNum, -1) == '.') {

            $strNum = rtrim($strNum, '.');

        }

    }

    return $strNum;

}

echo rmvTrailingZeroes($strNum);
