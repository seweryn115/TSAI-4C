<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>sekundy parzyste i nieparzyste</title>
</head>
<body>
<?php
$sekundy = (int) date("s");
 
if ($sekundy % 2 === 0)
    {$kolor = "red";} 
else {$kolor = "blue";}
?>
<p style="
    font-size: 220px;
    font-weight: bold;
    text-align: center;
    border: 20px solid <?= $kolor ?>;
    color: <?= $kolor ?>;">
<?= date("H:i:s") ?>
</p>
</body>
</html>
