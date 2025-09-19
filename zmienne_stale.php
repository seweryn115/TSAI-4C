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
    text-shadow: 3px 3px 3px lightpink;
}
b {
    border:solid ;
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
<p>var_dump dla ciągu znaków: <b><?php var_dump($tekst) ?></b></p>
<p>var_dump dla liczby całkowitej: <b><?php var_dump($liczba) ?></b></p>
<p>var_dump dla liczby rzeczywistej: <b><?php var_dump($ulamek) ?></b></p>
<p>var_dump dla wartiości bool'owskiej: <b><?php var_dump($bul) ?></b></p>
<br>
<hr>
<br>
<p>print dla pierwszsej stałej: <b><?=Pierwsza_stała ?></b></p>
<p>print dla drugiej stałej: <b><?=Druga_stała ?></b></p>
<br>
<hr>
<br>
<p>var_export dla pierwszsej stałej : <b><?php var_export(Pierwsza_stała) ?></b> </p>
<p>var_export dla drugiej stałej : <b><?php var_export(Druga_stała) ?> </b></p>
</body>
</html>