<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
    <p>Liczby dwucyfrowe podzielne przez 33 to:
        <?php
        $suma= (33+66+99);
        $liczby = 10;
         do {
            echo $liczby;
            $liczby ++;
        } while ($liczby % 33 == 0);
        if ($liczby <=99);
        ?>
    </p>
    <p>Suma liczb dwucyfrowych podzielmych przez 33 jest równa <?= $suma?>.</p>
</body>
</html>
