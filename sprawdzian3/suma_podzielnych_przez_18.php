<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
    <p>Liczby dwucyfrowe podzielne przez 18 to:
    <?php

    $array = [18, 36, 54, 72, 90];
    $i = -1;
    while ($i++ < 4) {
        if ($i <= 3)
            echo (" $array[$i], ");
        else
            echo (" $array[$i].");
    }?>
<br>

    <?php
    echo ("Suma liczb dwycyfrowych podzielnych przez 18 jest równa");
    $suma = 0;
    foreach ($array as $value) {
        $suma = $suma + $value;
    }
    echo (" $suma.")
    ?>
    </p>
</body>
</html>
