<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
            border-collapse: collapse;
            border: 2px dashed deeppink;
            font-family: Verdana;
            font-size: large;
        }

        th,td {
            border: 2px dashed deeppink;
            padding: 10px;
}



    </style>
</head>
<body>
        <table>
        <tr>
            <?php
            for ($poziom = 'a~A'; $poziom <= 'a~Z'; $poziom++) {
                echo "<th>$poziom</th>";
            }
            ?>
        </tr>





        
         <?php
        for ($pion = 'a~A'; $pion <= 'z~A'; $pion++) {
            echo "<tr><th>$pion</th>";
            }for ($poziom = 'a~A'; $poziom <= 'a~Z'; $poziom++)
               
            echo "</tr>";
        
        ?>
    </table>
</body>
</html>