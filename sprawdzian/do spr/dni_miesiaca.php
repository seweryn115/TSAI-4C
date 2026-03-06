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
           border: solid 2px black; 
        }
        tr{
            border-collapse: collapse;
           margin: 10px;
           border: solid 1px black;
        }
        td{
            border-collapse: collapse;
           margin: 10px;
           border: solid 1px black;
        }
    </style>
</head>
<body>
    <?php $marzec = date("t")?>
    <table>
        <caption><?php echo $marzec?></caption>
     <?php for($i = 1; $i <= 31; $i++) {
        if ($i % 7 == 0) {
            echo "<td> $i</td></tr>";}
            else
            echo "<td> $i</td>";}?>
        
    </table>
</body>
</html>