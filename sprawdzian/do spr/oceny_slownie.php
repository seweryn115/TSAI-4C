<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
           margin: 10px;
           border: solid 1px deeppink;
        }
        .hotpink{
            background-color: hotpink;
        }
        tr{
            border-collapse: collapse;
           margin: 10px;
           border: solid 1px deeppink;
        }
        td{
            border-collapse: collapse;
           margin: 10px;
           border: solid 1px deeppink;
        }
    </style>
</head>
<body>
    <?php $oceny = array("niedostateczna" => 1,
                         "dopuszczajaca" => 2,
                         "dostateczna"=> 3,
                         "dobra"=> 4,
                         "bardzo dobra"=> 5,
                         "celująca"=> 6
                         )?>
<table>
    <?php foreach ($oceny as $klucz => $wartosc) {
        if ($klucz == "celująca") {
            
                echo "<tr><td class='hotpink'>$klucz </td></tr>";
            
        }
        else{
            echo "<tr><td>$klucz </td></tr>";
        }
      
        
    } ?></table>


    
                        
</body>
</html>