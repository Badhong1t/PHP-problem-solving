<?php

//Repdigit or not

fscanf(STDIN, " %s ", $num);

function isRepDigit($num)
{

    $firstNum = $num[0];

    for ($i = 1; $i < strlen($num); $i++) {

        if ($num[$i] !== $firstNum) {

            return 'false';

        }

    }

    return 'true';

}

echo isRepDigit($num);