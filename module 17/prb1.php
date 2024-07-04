<?php

//Sum of natural numbers

fscanf(STDIN, " %d ", $n);

function sumOfNaturalNum($num){

    $result = 0;

    for($i = 0; $i<=$num; $i++){

        $result += $i;

    }

    return $result;

}

echo sumOfNaturalNum($n);