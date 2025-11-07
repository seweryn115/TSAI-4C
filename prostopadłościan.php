<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
p#jeden{
    color: purple;
    font-size: 150%;
    font-weight: 600;
    text-transform: capitalize;
}
p#dwa{
color: pink;
text-decoration: overline;
font-size: 25px;
font-weight: 600;
}
span{
    display: inline-block;
transform:rotate(90deg);
}
span#reka{
    display: inline-block;
transform:rotate(270deg);
}
span#dlon{
    display: inline-block;
transform: scaleX(-1);
}
span#karty{
    display: inline-block;
transform:rotate(0deg);
}
        </style>
</head>

<body>
    <?php
    $a = 5;
    $b = 12;
    $c = 84;
    ?>
    <p id="jeden"><span>☝</span>Przekątna prostopadłościanu o krawędziach długości <?= $a ?>, <?= $b ?> i <?= $c ?> jest równa <?= sqrt($a ** 2 + $b ** 2 + $c ** 2) ?>.<span id="reka">☝</span></p>
    <p id="dwa"><span id="dlon">✍</span> powierzchni tego prostopadłościanu o krawędziach długości <?= $a ?>, <?= $b ?> i <?= $c ?> wynosi <?= 2 * ($a * $b + $a * $c + $b * $c) ?> j<sup>2</sup>.<span id="karty">✍</span></p>
</body>

</html>