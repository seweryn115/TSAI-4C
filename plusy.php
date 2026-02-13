<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plusy</title>
</head>
<body>
    <blockquote>$plusy = <?=  $plusy = rand(0,10);?>    </blockquote>
        

    <?php
    
   
    if($plusy < 1 || $plusy > 9)
        {
            echo"poza przedziałem <1,9>";
        }
    else{
        for($i=1 ; $i<=$plusy ; $i++)
    {
        echo'+';
    }}
    
    
    
    
    
    
    ?>
</body>
</html>