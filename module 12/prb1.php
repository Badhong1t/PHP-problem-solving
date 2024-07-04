<?php

fscanf(STDIN, " %d ", $num);

function binarySearch($numToRoot){

    $result = sqrt($numToRoot);
    $floor = floor($result);

    return intval($floor);

}

$rootedNumber = binarySearch($num);

echo $rootedNumber;