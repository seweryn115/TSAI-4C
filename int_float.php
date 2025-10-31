<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$l1= 0;
$l2= 5;
$l3= 11.2;
$l4= 10.5;
$dodaj = "59.85" + 100
?>


<fieldset>
    <legend> AD 2. </legend>
<p>Zmienna <?= '$l1'?> ma wartość <?= "$l1"?> a funkcja is_int() zwraca dla niej wynik: <?= var_dump(is_int($l1))?></p>
<p>Zmienna <?= '$l2'?> ma wartość <?= "$l2"?> a funkcja is_int() zwraca dla niej wynik: <?= var_dump(is_int($l2))?></p>
<p>Zmienna <?= '$l3'?> ma wartość <?= "$l3"?> a funkcja is_int() zwraca dla niej wynik: <?= var_dump(is_int($l3))?></p>
<p>Zmienna <?= '$l4'?> ma wartość <?= "$l4"?> a funkcja is_int() zwraca dla niej wynik: <?= var_dump(is_int($l4))?></p>
<hr>
<p>Zmienna <?= '$l1'?> ma wartość <?= "$l1"?> a funkcja is_float() zwraca dla niej wynik: <?= var_dump(is_float($l1))?></p>
<p>Zmienna <?= '$l2'?> ma wartość <?= "$l2"?> a funkcja is_float() zwraca dla niej wynik: <?= var_dump(is_float($l2))?></p>
<p>Zmienna <?= '$l3'?> ma wartość <?= "$l3"?> a funkcja is_float() zwraca dla niej wynik: <?= var_dump(is_float($l3))?></p>
<p>Zmienna <?= '$l4'?> ma wartość <?= "$l4"?> a funkcja is_float() zwraca dla niej wynik: <?= var_dump(is_float($l4))?></p>
</fieldset>
<fieldset>
<legend> AD 3. </legend>
<p>zmienna <?= '$dodaj'?> ma wartość <?= "dodaj"?> a funkcja is_numeric zwraca dla niej wynik: <?= var_dump(is_numeric($dodaj))?></p>
</fieldset>
<fieldset>
<legend> AD 4. </legend>
<p>sala <b><?= 'PHP_INT_MAX'?></b></p>
<p>sala <b><?= 'PHP_INT_MIN'?></b></p>
<p>sala <b><?= 'PHP_INT_SIZE'?></b></p>
<p>sala <b><?= 'PHP_FLOAT_MAX'?></b></p>
<p>sala <b><?= 'PHP_FLOAT_MIN'?></b></p>
<p>sala <b><?= 'PHP_FLOAT_DIG'?></b></p>
<p>sala <b><?= 'PHP_FLOAT_EPSILON'?></b></p>
</fieldset>
</body>
</html>