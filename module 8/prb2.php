<?php


fscanf(STDIN,"%d", $seconds);

function secondsToHourMinute($seconds){

    $hour = floor($seconds / 3600);
    $minute = floor(($seconds % 3600) / 60);

    return $hour.":".$minute;

}

echo secondsToHourMinute($seconds);