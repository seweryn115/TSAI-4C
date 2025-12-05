<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            font-family: Arial, Helvetica, sans-serif;
            table-layout: fixed;
            width: 100%;
        }

        td,
        th {
            border: medium double black;
            padding: 10px;
        }

        #jeden,#dwa {
            border: none;
        }

        time {
            box-shadow: 0 0 5px red;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
        }

        strong {
            background-color: lightskyblue;
            border-radius: 5px;
            font-weight: bold;
            padding: 2px;
        }
    
    </style>
</head>
<?php
$pn1 = date_create("12:00");
$pn2 = date_create("15:30");
$wt1 = date_create("08:05");
$wt2 = date_create("10:15");
$śr1 = date_create("06:45");
$śr2 = date_create("11:25");
$cz1 = date_create("09:55");
$cz2 = date_create("10:35");
$pt1 = date_create("13:50");
$pt2 = date_create("16:10");
$so1 = date_create("20:05");
$so2 = date_create("22:35");
$nd1 = date_create("16:00");
$nd2 = date_create("18:50");


$g1 = date_diff($pn2, $pn1)->h;
$g2 = date_diff($wt2, $wt1)->h;
$g3 = date_diff($śr2, $śr1)->h;
$g4 = date_diff($cz2, $cz1)->h;
$g5 = date_diff($pt2, $pt1)->h;
$g6 = date_diff($so2, $so1)->h;
$g7 = date_diff($nd2, $nd1)->h;


$m1 = date_diff($pn2, $pn1)->i;
$m2 = date_diff($wt2, $wt1)->i;
$m3 = date_diff($śr2, $śr1)->i;
$m4 = date_diff($cz2, $cz1)->i;
$m5 = date_diff($pt2, $pt1)->i;
$m6 = date_diff($so2, $so1)->i;
$m7 = date_diff($nd2, $nd1)->i;

$gm1 = $g1 * 60 + $m1;
$gm2 = $g2 * 60 + $m2;
$gm3 = $g3 * 60 + $m3;
$gm4 = $g4 * 60 + $m4;
$gm5 = $g5 * 60 + $m5;
$gm6 = $g6 * 60 + $m6;
$gm7 = $g7 * 60 + $m7;
?>

<body>
    <table>
        <tr>
            <th id="jeden"></th>
            <th>Poniedziałek</th>
            <th>Wtorek</th>
            <th>Sroda</th>
            <th>Czwartek</th>
            <th>Piątek</th>
            <th>Sobota</th>
            <th>Niedziela</th>
        </tr>
        <tr>
            <td>Godziny przy komputerze</td>
            <td>od <time><?= date_format($pn1, "H:i") ?></time> do <time><?= date_format($pn2, " H:i") ?></time></td>
            <td>od <time><?= date_format($wt1, "H:i") ?></time> do <time><?= date_format($wt2, " H:i") ?></time></td>
            <td>od <time><?= date_format($śr1, "H:i") ?></time> do <time><?= date_format($śr2, " H:i") ?></time></td>
            <td>od <time><?= date_format($cz1, "H:i") ?></time> do <time><?= date_format($cz2, " H:i") ?></time></td>
            <td>od <time><?= date_format($pt1, "H:i") ?></time> do <time><?= date_format($pt2, " H:i") ?></time></td>
            <td>od <time><?= date_format($so1, "H:i") ?></time> do <time><?= date_format($so2, " H:i") ?></time></td>
            <td>od <time><?= date_format($nd1, "H:i") ?></time> do <time><?= date_format($nd2, " H:i") ?></time></td>
        </tr>
        <tr>
            <td>różnica [h:m]</td>
            <td><time> <?= $g1 . ":" . $m1 ?> (<strong><?= $gm1 ?></strong>minut)</time></td>
            <td><time> <?= $g2 . ":" . $m2 ?> (<strong><?= $gm2 ?></strong>minut)</time></td>
            <td><time> <?= $g3 . ":" . $m3 ?> (<strong><?= $gm3 ?></strong>minut)</time></td>
            <td><time> <?= $g4 . ":" . $m4 ?> (<strong><?= $gm4 ?></strong>minut)</time></td>
            <td><time> <?= $g5 . ":" . $m5 ?> (<strong><?= $gm5 ?></strong>minut)</time></td>
            <td><time> <?= $g6 . ":" . $m6 ?> (<strong><?= $gm6 ?></strong>minut)</time></td>
            <td><time> <?= $g7 . ":" . $m7 ?> (<strong><?= $gm7 ?></strong>minut)</time></td>
        </tr>
        <tr>
            <td id="dwa"></td>
            <td colspan="7">suma:<time><?= intdiv($gmgm,60)</time></td>
        </tr>
    </table>
</body>

</html>