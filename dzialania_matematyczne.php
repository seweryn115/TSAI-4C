<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $x = 5;
    $y = 15;
    $a = 4;
    $b = 35;
    $r = 16;
    $alfa = 93;
    $R = 3;
    $l = 5;
    ?>
    <fieldset>
        <legend> AD 1. </legend>
        <p>Wynik dodawania <?= $x ?> i <?= $y ?> wynosi <?= ($x + $y) ?></p>
        <p>Wynik odejmowania <?= $x ?> i <?= $y ?> wynosi <?= ($x - $y) ?></p>
        <p>Wynik mnożenia <?= $x ?> i <?= $y ?> wynosi <?= ($x * $y) ?></p>
        <p>Wynik dzielenia <?= $x ?> i <?= $y ?> wynosi <?= ($x / $y) ?></p>
        <p>Reszta z dzielenia <?= $x ?> i <?= $y ?> wynosi <?= ($x % $y) ?></p>
    </fieldset>

    <fieldset>
        <legend> AD 2. </legend>
        <p>Obwód prostokąta o bokach o długości <?= $a ?> i <?= $b ?> jest równy <?= ($a + $a + $b + $b) ?></p>
        <p>Pole prostokąta o bokach <?= $a ?> i <?= $b ?> jest równe <?= ($a * $b) ?> j<sup>2</sup></p>
    </fieldset>

    <fieldset>
        <legend> AD 3. </legend>
        <p>Obwód koła o promieniu <?= $r ?> jest równy <?= round(2 * pi() * $r, 4) ?></p>
        <p>Pole koła o promieniu <?= $r ?> jest równe <?= round(pi() * $r ** 2, 4) ?> j<sup>2</sup></p>
        <p>Pole wycinka koła o promieniu <?= $r ?> i kącie środkowym <?= $alfa ?>&deg; jest równe <?= round($alfa / 360 * pi() * $r ** 2, 4) ?> j<sup>2</sup></p>
    </fieldset>

    <fieldset>
        <legend> AD 4.</legend>
        <p>Pole powierzchni stożka o promieniu podstawy <?= $R ?> i tworzącej <?= $l ?> jest równe <?= round(pi() * $R ** 2 + pi() * $R * $l, 4) ?> j<sup>2</sup></p>
        <p>Objętość stożka o promieniu podstawy <?= $R ?> i wysokości <?= $a ?> jest równa <?= round(1 / 3 * pi() * $R ** 2 * $a, 4) ?> j<sup>2</sup></p>
    </fieldset>


</body>

</html>