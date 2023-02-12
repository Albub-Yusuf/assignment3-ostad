<?php

function isEven(int $number){

    $result = ($number %2 == 0) ? "Even Number" : "Odd Number"; 
    return $result;

}

echo isEven(15);