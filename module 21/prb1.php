<?php

//Stair Climbing

fscanf(STDIN, " %d ", $N );

function stairClimbing($N)
{

    if ($N == 0){

        return 1;//If there is no stairs, there is only 1 way to climb by nothing

    }
    if ($N == 1){

        return 1;//if there is 1 stair, there is only 1 way to climb it.

    }

    $previous = 1;//ways to climb 1 stair
    $current = 1;//ways to climb no stair

    for ($i = 2; $i <= $N; $i++) {

        $new = $previous + $current;
        $current = $previous;
        $previous = $new;

    }

    return $previous;

}

echo stairClimbing($N);