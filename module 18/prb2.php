<?php

fscanf(STDIN," %s %d ", $string, $shiftNum);

function caesarCipher($str, $shift) {
    $result = '';

    // Iterate through each character in the string
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        $char = $str[$i];

        // Shift alphabetic characters
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $offset = ord(ctype_upper($char) ? 'A' : 'a');
            $shiftedAscii = (($ascii - $offset + $shift) % 26) + $offset;
            $result .= chr($shiftedAscii);
        } else {
            // Non-alphabetic characters remain unchanged
            $result .= $char;
        }
    }

    return $result;
}

echo caesarCipher($string, $shiftNum);
