<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabliczka</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
            font-family: Verdana;
            font-size: large;
        }

        th,td {
            border: 1px dotted black;
            padding: 5px;
        }

        th {
            background-color: burlywood;
        }

        td {
            background-color: beige;
            text-align: center;
            vertical-align: middle;
        }
        
        .przekatna {
            background-color: bisque;
        }
    </style>
</head>

<body>
    <table>
        <caption>Tabliczka mnożenia</caption>
        <tr>
            <th>x</th>

            <?php
            for ($poziom = 1; $poziom <= 10; $poziom++) {
                echo "<th>$poziom</th>";
            }
            ?>
        </tr>

        <?php
        for ($pion = 1; $pion <= 10; $pion++) {
            echo "<tr><th>$pion</th>";
            for ($poziom = 1; $poziom <= 10; $poziom++)
                if ($pion == $poziom) {
                    echo "<td class='przekatna'>" . ($pion * $poziom) . "</td>";
                } else {
                    echo "<td>" . ($pion * $poziom) . "</td>";
                }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
    
    
    