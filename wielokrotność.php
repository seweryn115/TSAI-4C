<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
    border-collapse: collapse;

}
td {
    border: dashed purple 10px;
    width: 10px;
    color:blue;  
    font-size: 80px;
text-shadow: 4px 4px 4px violet;
padding: 100px;

}
        </style>
</head>
<body>
    <?php 
    $liczba = 77;
    ?>
    <table>
<tr>
    <td><?= $liczba ?></td>
    <td><?= $liczba *2?></td>
    <td><?= $liczba *3?></td>
    <td><?= $liczba *4?></td>
    </table>
</body>
</html>