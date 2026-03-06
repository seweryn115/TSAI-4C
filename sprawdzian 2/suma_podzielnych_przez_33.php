<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Liczby dwucyfrowe podzielne przez 33 to: </p>
        <?php
    foreach (range(33,99,) as $liczba) {
if 
    ($liczba % 33 == 0){
    echo "$liczba, ";
} 
    }
?>
<p>Suma liczb dwucyfrowych podzielnych przez 33 jest równa <?php round(33 + 66 + 99, 4)?></p>
</body>
</html>