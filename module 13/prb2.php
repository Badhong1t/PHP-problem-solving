<?php

fscanf(STDIN, " %s ", $input);

    $toArray = str_split($input);

    // print_r($toArray);

    sort($toArray);

    $data = implode("",$toArray);

    echo $data;