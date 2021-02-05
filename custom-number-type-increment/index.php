<?php
$number = array('9','9');
var_dump(increment($number));

function increment(array $number)
{
    array_unshift($number, 0);
    $index = count($number);

    for($i=$index-1; $i >= 0; $i--){
        $value = $number[$i];
        $increment = $value+1;
        $number[$i] = $increment;
        if($increment == 10){
            $number[$i] = 0;
        } else {
            break;
        }
    }
    if($number[0] == 0){
        array_shift($number);
    }
    return $number;


}