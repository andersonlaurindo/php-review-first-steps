<?php

//subroutine
function printMessage (string $message) {
    echo $message . PHP_EOL;
}

//function
function withdraw(float $value, float $amount) : float {
    return $value + $amount;
}

$result = withdraw(500, 9);

printMessage($result);