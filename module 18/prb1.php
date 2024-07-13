<?php

fscanf(STDIN, " %s ", $string);

$replace = "";

$pattern = "/[^a-zA-Z0-9]/";

$freshString = preg_replace($pattern, $replace, $string);

echo $freshString;