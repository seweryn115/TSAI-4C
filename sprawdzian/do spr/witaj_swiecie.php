<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            
        }
        tr,td{
            border: 4px double magenta;
            padding: 15px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <?php $powitanie = "¡Hola Mundo!";
          $cos = mb_str_split($powitanie,1);
          foreach($cos as $litera) {
            echo  "<td> $litera</td> ";
          }
          ?>
        </tr>
    </table>
    
    
</body>
</html>