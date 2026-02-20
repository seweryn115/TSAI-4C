<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$filmy = [
    "Skazani na Shawshank" => "dramat",
    "Nietykalni" => "biograficzny",
    "Władca Pierścieni: Powrót króla" => "fantasy",
    "Pulp Fiction" => "gangsterski",
    "Siedem" => "kryminał",
    "Podziemny krąg" => "thriller",
    "Django" => "western",
    "Król Lew" => "animacja",
    "Avengers: Wojna bez granic" => "akcja",
    "Dobry, zły i brzydki" => "western"
];

function wyswietlTabele($tablica, $opis) {
    echo "<table style='border-collapse: collapse; margin: 10px;'>";
    echo "<caption><b>$opis</b></caption>";
    echo "<tr>";
    echo "<th style='border:1px solid black; padding:5px;'>Tytuł</th>";
    echo "<th style='border:1px solid black; padding:5px;'>Gatunek</th>";
    echo "</tr>";

    foreach ($tablica as $klucz => $wartosc) {
        echo "<tr>";
        echo "<td style='border:1px solid black; padding:5px;'>$klucz</td>";
        echo "<td style='border:1px solid black; padding:5px;'>$wartosc</td>";
        echo "</tr>";
    }

    echo "</table>";
}


$wgWartosciRosnaco = $filmy;
asort($wgWartosciRosnaco);

$wgKluczyRosnaco = $filmy;
ksort($wgKluczyRosnaco);

$wgWartosciMalejaco = $filmy;
arsort($wgWartosciMalejaco);

$wgKluczyMalejaco = $filmy;
krsort($wgKluczyMalejaco);
?>



<div style="display:flex;">
    <?php
        wyswietlTabele($wgWartosciRosnaco, "Rosnąco wg wartości");
        wyswietlTabele($wgKluczyRosnaco, "Rosnąco wg kluczy");
    ?>
</div>


<div style="display:flex;">
    <?php
        wyswietlTabele($wgWartosciMalejaco, "Malejąco wg wartości");
        wyswietlTabele($wgKluczyMalejaco, "Malejąco wg kluczy");
    ?>
</div>

</body>
</html>
</body>
</html>