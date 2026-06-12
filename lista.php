<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Lista dostaw</title>
    <style>
        body {
            background-color: lightblue;
        }

        table {
            border-collapse: collapse;
            background-color: deepskyblue;
        }

        th,
        td {
            border: 1px solid blue;
            padding: 10px;
        }
    </style>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "magazyn";
    $password = "magazyn";
    $database = "magazyn";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Błąd połączenia");
    }

    $zapytanie = "SELECT * FROM dostawy";
    $wynik = mysqli_query($conn, $zapytanie);

    $liczba = mysqli_num_rows($wynik);
    ?>

    <h1>Dane w tabeli <i>dostawy</i></h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nazwa</th>
            <th>Ilość</th>
            <th>Data</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($wynik)) { ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td>
                    <a href="dostawa.php?id=<?= $row['id']; ?>">
                        <?= $row['nazwa']; ?>
                    </a>
                </td>
                <td><?= $row['ilosc']; ?></td>
                <td><?= $row['data']; ?></td>
            </tr>
        <?php } ?>

        <tr>
            <td colspan="4">
                <a href="dostawa_dodaj.php">dodaj nową dostawę</a>
            </td>
        </tr>
    </table>

    <p>Liczba rekordów: <?= $liczba; ?></p>

    <?php mysqli_close($conn); ?>

</body>

</html>