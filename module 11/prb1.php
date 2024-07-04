<?php
    # Write your PHP code from here

    fscanf(STDIN,"%s %s", $s, $t);

for ($i = 0; $i <= strlen($s); $i++){

    $s = substr($s,1).substr($s,0,1);
    // echo $s."\n";

    if(strcmp($s,$t) === 0){

        echo "True";

        break;

    }

    if($i === strlen($s)){

        echo "False";

    }

}