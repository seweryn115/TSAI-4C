<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
    <style>
        th ,td {
            border: dashed 2px deeppink;
            padding: 10px;
            
        }
        table{
            border-collapse: collapse ;
        }
    </style>
</head>
<body>
    <?php
     
      $pierwiastki = array(
        "1774" => "chlor",
        "1894" => 'argon',
        "1807" => "potas",
        "1808" => "wapÅ„",
        "1879" => "skand");

       
        ?>
        <pre><?php print_r($pierwiastki)?></pre>

        <table>
            <th>Pierwiastek</th>
            <th>Rok odkrycia</th>
           <?php
           asort($pierwiastki);
        foreach ($pierwiastki as $rok => $nazwa) {
            echo "<tr><td> $nazwa </td><td>$rok</td></tr>";
        }?>
        </table>
</body>
</html>
