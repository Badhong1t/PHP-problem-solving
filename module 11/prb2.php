<?php
    # Write your PHP code from here

    fscanf(STDIN, " %s %s ", $s ,$t);
    $count = 0;

    for($i = 0; $i < strlen($s); $i++){

        $j = strlen($t);
    
        $strCompare = substr($s,$i,$j);

        if(strcmp($strCompare,$t) === 0){

            $count = $count + 1;

        }
        $j += 1;
    }

echo $count;

