<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="$_POST">
<label for="name"> Usuń "białe" znaki</label>
<input type="text" name="name"><br>
<label for="adres">Usuń ukośniki</label>
<input type="text" name="adres"><br>
<label for="city">Zmień znaki HTML na tzw encje</label>
<input type="text" name="city"><br>
<input type="submit" value="wyślij">
    </form>
    <br>
    <br>
    <hr>
    <br>
    <br>
<?phpif ($_SERVER["REQUEST_METHOD"] == "POST") {

    $puste = $_POST["puste_znaki"];
    $ukosniki = $_POST["ukosniki"];
    $html = $_POST["encje_html"];

    echo "<h3>BEZ funkcji:</h3>";
    echo "Tekst z pola puste_znaki: ";
    var_dump($puste);
    echo "<br>";

    echo "Tekst z pola ukosniki: ";
    var_dump($ukosniki);
    echo "<br>";

    echo "Tekst z pola encje_html: ";
    var_dump($html);
    echo "<br><br>";

    echo "<h3>Z zastosowaniem funkcji:</h3>";

    echo "trim(): ";
    var_dump(trim($puste));
    echo "<br>";

    echo "stripslashes(): ";
    var_dump(stripslashes($ukosniki));
    echo "<br>";

    echo "htmlspecialchars(): ";
    var_dump(htmlspecialchars($html));
    echo "<br>";
}
?>
</body>
</html>