<?php

//Find number from string

fscanf(STDIN, " %s ", $s);

function findNumber($string){

    for($i = 0; $i < strlen($string); $i++){

        if(is_numeric($string[$i])){

            return $string[$i];

        }

    }

}

echo findNumber($s);