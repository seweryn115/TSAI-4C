<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td,
        th{
            border: solid black 1px;
            text-align: center;
            padding: 5px;
        }
        .romb{
            color: blue;
            background-color: orangered;
        }
        </style>
</head>
<body>
        <table>


        <?php
        for ($aa = 0; $aa <= 20; $aa++) {
            echo "<tr>";
            for ($bb = 0; $bb <= 20; $bb++)
                if (($aa+$bb) == 10 || ($bb-$aa == 10) )
                    echo "<td class='romb'> $aa|$bb</td>";
                 elseif (($aa - $bb) == 10 || ($aa + $bb) ==30 ) 
                    echo "<td class='romb'>$aa|$bb</td>";
                    else
                        echo "<td>$aa|$bb</td>";
            
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>