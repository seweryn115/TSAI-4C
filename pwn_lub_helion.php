<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Książki PWN i Helion</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        td:last-child {
            text-align: right;
        }
    </style>
</head>

<body>

    <?php

    $servername = "localhost";
    $username = "glogowski";
    $password = "12345";
    $database = "glogowski";


    $conn = mysqli_connect($servername, $username, $password, $database);


    if (!$conn) {
        die("Błąd połączenia: " . mysqli_connect_error());
    }


$sql = "SELECT sygnatura, tytul, imie, nazwisko, wydawnictwo, rok_wyd, cena
        FROM ksiazki
        WHERE wydawnictwo IN ('PWN', 'Helion')
        AND rok_wyd > 1990
        AND rok_wyd < 2011
        ORDER BY rok_wyd ASC";

    $result = mysqli_query($conn, $sql);


    echo "<table>";

    echo "<tr>
        <th>Sygnatura</th>
        <th>Tytuł</th>
        <th>Autor</th>
        <th>Wydawnictwo</th>
        <th>Rok wydania</th>
        <th>Cena</th>
      </tr>";


    while ($row = mysqli_fetch_assoc($result)) {


        $cena = explode(".", number_format($row['cena'], 2, '.', ''));

        $zl = $cena[0];
        $gr = $cena[1];

        echo "<tr>";

        echo "<td>" . $row['sygnatura'] . "</td>";
        echo "<td>" . $row['tytul'] . "</td>";

        echo "<td>" . $row['imie'] . " " . $row['nazwisko'] . "</td>";
        echo "<td>" . $row['wydawnictwo'] . "</td>";
        echo "<td>" . $row['rok_wyd'] . "</td>";
        echo "<td>" . $zl . " zł " . $gr . " gr</td>";

        echo "</tr>";
    }

    echo "</table>";


    mysqli_close($conn);

    ?>

</body>

</html>