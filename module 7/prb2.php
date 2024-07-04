<?php declare(strict_types = 1);

fscanf(STDIN,"%d %d %d", $wheels, $carBodies, $figures);

function totalCars(int $wheels, int $carBodies, int $figures) : int {

    $result = min(floor($wheels / 4), $carBodies, floor($figures / 2));

    return $result;

}

totalCars($wheels, $carBodies, $figures);