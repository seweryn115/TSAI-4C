<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Nazwy stanowisk</title>
    <style>
        table,
        th,
        td {
            +border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        td:nth-child(2) {
            text-align: right;
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


    $sql = "SELECT nazwa FROM stanowiska";
    $result = mysqli_query($conn, $sql);

    echo "<table>";
    echo "<tr><th>Nazwa stanowiska</th><th>Liczba liter</th></tr>";


    while ($row = mysqli_fetch_assoc($result)) {

        $nazwa = $row['nazwa'];


        $liczba = mb_strlen($nazwa);

        echo "<tr>";
        echo "<td>$nazwa</td>";
        echo "<td>$liczba liter</td>";
        echo "</tr>";
    }

    echo "</table>";


    mysqli_close($conn);
    ?>

</body>

</html>