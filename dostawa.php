<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Dostawa</title>
    <style>
        body {
            background-color: palevioletred;
        }

        ul {
            list-style-type: square;
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

    $id = $_GET['id'];

    $sql = "SELECT * FROM dostawy WHERE id = $id";
    $wynik = mysqli_query($conn, $sql);

    $dostawa = mysqli_fetch_assoc($wynik);
    ?>

    <h1>Informacje o dostawie</h1>

    <ul>
        <li>Id: <?= $dostawa['id']; ?></li>
        <li>Nazwa: <?= $dostawa['nazwa']; ?></li>
        <li>Ilość: <?= $dostawa['ilosc']; ?></li>
        <li>Data: <?= $dostawa['data']; ?></li>
    </ul>

    <a href="lista.php">Powrót do listy dostaw</a>

    <?php mysqli_close($conn); ?>

</body>

</html>