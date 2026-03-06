<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
           margin: 20px;
           border: dotted 1px green; 
        }
        tr{
            border-collapse: collapse;
           margin: 10px;
           border: dotted 1px green;
           font-family: Verdana;
           font-size: 12px;
        }
        td{
            border-collapse: collapse;
           margin: 10px;
           border: dotted 1px green;
           font-family: Verdana;
           font-size: 12px;
        }
    </style>
</head>
<body> <?php $j = 0 ?> 
    <table>
        <?php for ($i = 0; $i <= 9; $i++) {
            echo "<tr>";
            echo "<th> $i|$j</th>";
            for($j = 1; $j <= 9; $j++){
                echo "<td> $i|$j</td>";
            }
            echo "</tr>";
            } ?>
    </table>
</body>
</html>