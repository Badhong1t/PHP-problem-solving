<?php


fscanf(STDIN,"%d", $arrLength);

    $arrValues = trim(fgets(STDIN));

    $toArr = explode(" ", $arrValues);

    function cmp($x,$y){

        return strlen($x) - strlen($y);

    }

    usort($toArr,'cmp');

    foreach($toArr as $toStr){

        echo $toStr." ";

    }