<?php
$name = 'Misha Ryabov';
   $a = array (
        'квадрат' => 1,
        'треугольник' => 2,
        'круг' => 3,
        'овал' => 4,
        'прямоугольник' => 5,
        'параллелограмм' => 6,
        'куб' => 7,
        'шар' => 8,
        'пирамида' => 9,
        'параллепипед' => 10,
);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>art3mis homework</title>
</head>
<body>
    <div class="text">
        <p><?= $name ?></p>
    </div>

    <?php foreach ($a as $b => $v)  { ?>
        <div><?php echo "$b => $v. \n"; ?></div>

    <?php } ?>
</body>
</html>