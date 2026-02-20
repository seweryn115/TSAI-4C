<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $tydzien = ["poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota", "niedziela"]
    ?> 
    <table style="border-collapse: collapse";>
<?php 
foreach ($tydzien as $tyg) {
    $kolor_tla = $tyg == 'piątek' ? 'sandybrown' : 'white';
?>
<tr>
    <td style="background-color: <?=$kolor_tla?>; border: solid 3px rosybrown; padding: 10px"><?=$tyg?></td>
</tr>    
<?php
}
?>
    </table>
</body>
</html>