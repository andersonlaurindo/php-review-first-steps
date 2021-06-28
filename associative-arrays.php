<?php

$student1 = ["name"=>"Peter", "age"=>35];
$student2 = ["name"=>"Joe", "age"=>31];
$student3 = ["name"=>"Ben", "age"=>33];

$students = [$student1, $student2, $student3];

for ($i = 0; $i < count($students); $i++) {
    echo $students[$i]['name'] . PHP_EOL;
}

foreach($students as $student) {
    echo $student['name'] . PHP_EOL;
}

$students = [
    1 => $student1,
    2 => $student2,
    3 => $student3
];

$students[4] = ["name"=>"Mary", "age"=>38];

foreach($students as $id => $student) {
    echo $id . ' - ' . $student['name'] . PHP_EOL;
    echo "$id - $student[name]" . PHP_EOL;
    echo "$id - {$student['name']}" . PHP_EOL;
}

$students2 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
/*
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
*/

foreach($students2 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value . PHP_EOL;
}

unset($students2['Peter']);

foreach($students2 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value . PHP_EOL;
}
