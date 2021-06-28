<?php

function capitalize(&$name) {
    $name = strtoupper($name);
}

$name = 'Paul';
capitalize($name);

echo $name;


