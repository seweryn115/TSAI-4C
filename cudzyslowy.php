<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    p {
        font-size: larger;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
    </style>

</head>
<body>
<?php
$poczatek = 'Ala ma ';
$liczba = 4;
$koniec = ' koty'; 
?>
<p> <?php echo '$poczatek $liczba $koniec a chce mieć jescze dwa'; ?> </p> <br>
<p> <?php echo "$poczatek $liczba $koniec a chce mieć jeszcze dwa"?> </p>
</body>
</html>