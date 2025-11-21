<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            border: 4px lightsalmon double;
        }
    </style>
</head>
<body>
    <?php
    $r = 6;
    ?>
    <p>Obwód okręgu o promieniu <?= $r ?> jest równy <?= round(2 * pi() * $r, 2) ?></p>
</body>
</html>