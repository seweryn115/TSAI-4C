<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol type="a">
        <li>oprogramowanie serwera = <?php print_r($_SERVER["SERVER_SOFTWARE"]) ?></li>
        <li>oprogramowanie klienta = <?php print_r($_SERVER["HTTP_USER_AGENT"]) ?></li>
        <li>nazwęi wersje protokołu = <?php print_r($_SERVER["SERVER_PROTOCOL"]) ?></li>
        <li>czas rozpoczęcia bieżącego zadania = <?php print_r($_SERVER["REQUEST_TIME"]) ?></li>
        <li>zmienną środowiskową = <?php print_r($_SERVER["PATH"]) ?></li>
        <li>nazwę serwera = <?php print_r($_SERVER["SERVER_NAME"]) ?></li>
        <li>metodę, jaką zostało obsłużone bieżące żadanie = <?php print_r($_SERVER["REQUEST_METHOD"]) ?></li>
</body>
</html>