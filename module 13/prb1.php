<?php

fscanf(STDIN,"%s", $input);

    $arrData = str_split($input);

    // print_r($arrData);

    sort($arrData);
    rsort($arrData);

    // print_r($arrData);

    $data = implode("",$arrData);

    echo $data;

