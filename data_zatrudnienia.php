<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
th, tr {
    border: solid black 1px;
    border-collapse: collapse;
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

    $sql = "SELECT imie, nazwisko, data_zatrudnienia
        FROM pracownicy";
 ?>
<table>
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Data zatrudnienia</th>
    </tr>
    <tr>
        <th></th>
    </tr>
</table>
</body>
</html>