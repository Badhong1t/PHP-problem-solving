<?php

fscanf(STDIN, " %d ", $arrSize);

// print($targetNum);

$input = trim(fgets(STDIN));

fscanf(STDIN, " %d ", $targetNum);

$arr = array_map("intval",explode(" ",$input));

// var_dump($arr);

function binarySearch($array,$target,$arraySize){

    // $arraySize = count($array);
    $left = 0;
    $right = $arraySize - 1;

    while($left <= $right){

        if($array[$left] === $target){

            return $left;

        }

        else{

            $left += 1; 

        }

    }

    return -1;

}

$result = binarySearch($arr,$targetNum,$arrSize);

if($result != -1){

    echo $result;

}

else{

    echo "Element not found";

}


