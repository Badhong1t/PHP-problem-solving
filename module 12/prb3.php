<?php

fscanf(STDIN, " %d ", $arraySize);

$input = trim(fgets(STDIN));

$arr = array_map("intval",explode(" ",$input));

function binarySearch($array){

    $minNum = min($array);

    return $minNum;

}

$result = binarySearch($arr);

echo $result;