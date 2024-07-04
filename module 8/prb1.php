<?php

fscanf(STDIN,"%s %s", $firstName, $lastName);

$fullName = $lastName.",".$firstName;

echo sprintf("%s", $fullName);