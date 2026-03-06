<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><pre>
<?php 
$parzyste = range(0, 12, 2);
$dzesiatki = range(-10, 100, 10);
$polowki = range(-5.5, 5.5, 0.5);
$litery_od_em = range('m', 'u');
$litery_wstecz = range('X', 'E');

print_r($parzyste)

?>
<p><?php
foreach ($parzyste as $parzysta) {
    print_r($parzysta . " ");
}?></p>

<p><?php
foreach ($dzesiatki as $dzesiatke) {
    print_r($dzesiatke . " ");
}?></p>

<p><?php
foreach ($polowki as $polowke) {
    print_r($polowke . " ");
}?></p>

<p><?php
foreach ($litery_od_em as $litery_od_eme) {
    print_r($litery_od_eme . " ");
}?></p>

<p><?php
foreach ($litery_wstecz as $litery_wstecze) {
    print_r($litery_wstecze . " ");
}?></p>










<!-- <?php
echo implode(', ', range(0, 12, 2)), PHP_EOL;

echo implode(', ', range(-10, 100, 10)), PHP_EOL;

echo implode(', ', range(-5.5, 5.5, 0.5)), PHP_EOL;

echo implode(', ', range('m', 'u')), PHP_EOL;

echo implode(', ', range('X', 'E')), PHP_EOL;?> -->
</pre></body>
</html>