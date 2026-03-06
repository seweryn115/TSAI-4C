<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><h2>
    <?php
    foreach (range(-9,9) as $liczba) {
if 
    ($liczba % 3 == 0){
    echo "<span style='color:limegreen'>$liczba</span>";
} else {
    echo "$liczba";
}
if ($liczba != 9){
    echo "|";
}
// foreach (range(-9,9) as $liczba) {
//     echo $liczba % 3 == 0 ? "<span style='color:limegreen'>$liczba</span>|" : "$liczba|";
// }
}
?></h2>
</body>
</html>