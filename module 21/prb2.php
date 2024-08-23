<?php

//Triplet Sum

fscanf(STDIN, " %d ", $size);

$arr = explode(' ', trim(fgets(STDIN)));

fscanf(STDIN, " %d ", $target);

function tripletNumbers($arrSize, $array, $targetedNumber)
{

    sort($array);

    for ($i = 0; $i < $arrSize - 2; $i++) {

        for ($j = $i + 1; $j < $arrSize - 1; $j++) {

            for ($k = $j + 1; $k < $arrSize; $k++) {

                if ($array[$i] + $array[$j] + $array[$k] === $targetedNumber) {

                    return $array[$i]." ".$array[$j]." ".$array[$k];

                }

            }

        }

    }

    return false;

}

echo tripletNumbers($size, $arr, $target);
