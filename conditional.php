<?php

$age = 31;
$woman = FALSE;
$vip = TRUE;

if(($age >= 18 && $woman) || $vip) {
    echo "You can entry.";
} else {
    echo "You can't entry.";
}