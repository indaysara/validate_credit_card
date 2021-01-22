<?php
function validateCC($bin) { //Check if the cc is valid
        $stack = 0; 
        $number = str_split(strrev($bin));
        foreach ($number as $key => $value) {
            if ($key % 2 == 0) {
                $value = array_sum(str_split($value * 2));
            }
            //even 
            $stack += $value;
        }
        $stack %= 10;
        if ($stack != 0) {
            $stack -= 10;
            $stack = abs($stack); // absolute specify the value of $stack
        }
        $number = implode('', array_reverse($number)); //combine the $number
        $number = $number . strval($stack);
        return $number;
}

