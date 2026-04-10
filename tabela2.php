<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>table{
border-collapse:collapse;
}
td,th{
    border: dotted green 1px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 12px;
    padding:5px;
}
.help{
    color:red;
    background-color: yellow;
}</style>
</head>
<body>
    
    <table>

    <?php 

        for($a=0;$a<=9;$a++){
            echo "<tr>";
            for($b=0;$b<=9;$b++)
                if($a - $b == 3 || $b - $a == 3)
                    echo "<td class='help'>$a|$b</td>";
                else
                    echo "<td>$a|$b</td>";
            
            echo "</tr>";
        }

    ?>

    </table>

</body>
</html>
