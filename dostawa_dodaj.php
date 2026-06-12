<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Dodaj nową dostawę</title>
    <style>
        body {
            background-color: darkgray;
        }

        table {
            border-collapse: collapse;
            background-color: lightgray;
            width: 450px;
        }

        td {
            border: 1px dashed gray;
            padding: 10px;
        }

        input {
            width: 100%;
            box-sizing: border-box;
        }

        .btn {
            width: auto;
        }

        h4 {
            color: lime;
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

    $dodano = false;

    if (isset($_POST['dodaj'])) {
        $nazwa = $_POST['nazwa'];
        $ilosc = $_POST['ilosc'];
        $data = $_POST['data'];

        $sql = "INSERT INTO dostawy(nazwa, ilosc, data)
            VALUES('$nazwa', '$ilosc', '$data')";

        mysqli_query($conn, $sql);

        $dodano = true;
    }
    ?>

    <h1>Dodaj nową dostawę</h1>

    <?php if (!$dodano) { ?>

        <form method="post">
            <table>
                <tr>
                    <td>ID</td>
                    <td><input type="text" disabled></td>
                </tr>

                <tr>
                    <td>Nazwa</td>
                    <td><input type="text" name="nazwa" required></td>
                </tr>

                <tr>
                    <td>Ilość</td>
                    <td><input type="number" name="ilosc" required></td>
                </tr>

                <tr>
                    <td>Data</td>
                    <td><input type="date" name="data" required></td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input class="btn" type="submit" name="dodaj" value="Dodaj">
                    </td>
                </tr>
            </table>
        </form>

    <?php } else { ?>

        <h4>Nowe dane zostały dodane.</h4>

    <?php } ?>

    <br>

    <a href="lista.php">Powrót do listy dostaw</a>

    <?php mysqli_close($conn); ?>

</body>

</html>