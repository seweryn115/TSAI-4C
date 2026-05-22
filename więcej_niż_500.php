<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Książki powyżej 500 stron</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>

<body>

    <?php

    $servername = 'localhost';
    $username = 'glogowski';
    $password = '12345';
    $database = 'glogowski';

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Błąd połączenia: " . mysqli_connect_error());
    }

    $sql = "SELECT 
                ksiazki.sygnatura,
                ksiazki.tytul,
                ksiazki.imie,
                ksiazki.nazwisko,
                dzialy.nazwa AS dzial,
                ksiazki.wydawnictwo,
                ksiazki.rok_wyd,
                ksiazki.objetosc_ks,
                ksiazki.cena
            FROM ksiazki
            INNER JOIN dzialy
            ON ksiazki.id_dzial = dzialy.id_dzial
            WHERE ksiazki.objetosc_ks > 500
            ORDER BY ksiazki.objetosc_ks ASC";

    $result = mysqli_query($conn, $sql);

    echo "<table>";
    echo "<tr>
            <th>Sygnatura</th>
            <th>Tytuł</th>
            <th>Autor</th>
            <th>Dział</th>
            <th>Wydawnictwo</th>
            <th>Rok wydania</th>
            <th>Liczba stron</th>
            <th>Cena</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";
        echo "<td>" . $row['sygnatura'] . "</td>";
        echo "<td>" . $row['tytul'] . "</td>";

        echo "<td>" . $row['imie'] . " " . $row['nazwisko'] . "</td>";
  
        echo "<td>" . $row['dzial'] . "</td>";
        echo "<td>" . $row['wydawnictwo'] . "</td>";
        echo "<td>" . $row['rok_wyd'] . "</td>";
        echo "<td>" . $row['objetosc_ks'] . "</td>";
        echo "<td>" . $row['cena'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($conn);

    ?>

</body>

</html>