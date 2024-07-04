<?php 

fscanf(STDIN, " %d ", $arrSize);

$arrValues = explode(" ",fgets(STDIN));

$positiveCount = 0;
$negativeCount = 0;

foreach($arrValues as $arrValue){

    intval($arrValue);

    if($arrValue >= 0){

        $positiveCount++;

    }
    else if($arrValue < 0){

        $negativeCount++;

    }

}

if($positiveCount > $negativeCount){

    echo "Positivity";

}
else{

    echo "Negativity";

}