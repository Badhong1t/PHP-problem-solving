<?php

fscanf(STDIN," %s ", $numbers);

// $numbers = 123;

$numArr = str_split($numbers);

// var_dump($numArr);

$result = 0;

foreach($numArr as $arr){

    // echo intval($arr)."\n";
    // $num = $arr;
    $intVal = intval($arr);
    $result +=  $intVal;

}

if($result % 2 == 0){

    echo "Even";

}
else{

    echo "Odd";

}
