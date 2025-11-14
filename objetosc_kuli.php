<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color: darkred;
            font-size: 22px;
            border: 4px darkred double;
        }
    </style>
</head>
<body>
    <?php
$prom = 1;
?>
<p>Objętość kuli o promieniu <?= $prom?> cm jest równa <?= round(4/3 * pi() * $prom**3 ,4)?> cm<sup>3</sup>.</p>
</body>
</html>