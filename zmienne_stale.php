<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
p {
    color: blueviolet;
    font-family: fantasy;
}

    </style>
</head>
<body>
<?php 
$tekst = "ala ma kota"; 
$liczba = 1024;
$ulamek = 65.536;
$bul = false;
define("Pierwsza_stała","1994");
define("Druga_stała","Miramax")
?>
<p>echo dla ciągu znaków: <b><?=$tekst ?></b></p>
<p>echo dla liczby całkowitej: <b><?=$liczba ?></b></p>
<p>echo dla liczby rzeczywistej: <b><?=$ulamek ?></b></p>
<p>echo dla wartości bool'oweskiej: <b><?=$bul ?></b></p>
<br>
<hr>
<br>
<p>var_dump dla ciągu znaków: <?php var_dump($tekst) ?></p>
<p>var_dump dla liczby całkowitej: <?php var_dump($liczba) ?></p>
<p>var_dump dla liczby rzeczywistej: <?php var_dump($ulamek) ?></p>
<p>var_dump dla wartiości bool'owskiej: <?php var_dump($bul) ?></p>
<br>
<hr>
<br>
<p>print dla pierwszsej stałej: <?=Pierwsza_stała ?></p>
<p>print dla drugiej stałej: <?=Druga_stała ?></p>
<br>
<hr>
<br>
<p>var_export dla pierwszsej stałej : <?php var_export(Pierwsza_stała) ?> </p>
<p>var_export dla drugiej stałej : <?php var_export(Druga_stała) ?> </p>
</body>
</html>