<?php

//Fibonacci series

fscanf(STDIN, '%d', $num);

function fibonacciSeries($num)
{

    $fib = [0,1];

    for ($i = 2; $i<$num; $i++){

        $fib[$i] = $fib[$i-1] + $fib[$i-2];

    }

    for ($i = 0; $i < $num; $i++){

        echo $fib[$i]." ";

    }

}

fibonacciSeries($num);

