<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
<li>Pierwszy dzień świąt Bożego Narodzenia wypada w tym roku w: <?= date("l", strtotime("25 december 2025")) ?></li>
<li>Drugi dzień świąt Bożego Narodzenia wypada w tym roku w: <?= date("l", strtotime("26 december 2025")) ?></li>
    </ul>
</body>
</html>