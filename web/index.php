<?php

$students = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Teste</title>
</head>
<body>
    <h1>Students</h1>
    <dl>
        <?php foreach ($students as $name => $age) { ?>
        <dt>Name: <?= $name ?></dt>
        <dl>Age: <?= $age ?></dl>
        <?php } ?>
    </dl>
</body>
</html>
