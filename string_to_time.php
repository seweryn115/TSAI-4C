<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-size: 20px;
        }
        p{
            padding 5px:
        }
        #pierwszy{
            color: yellowgreen;
            border: dotted 4px green;
        }
        p#drugi{
            color: maroon;
            border: dashed maroon 2px;
            border-radius: 5px;
        }
        p#trzeci{
            color: darkcyan;
            border-left: solid 3px cyan;
        }
    </style>
</head>
<body>
    <p id="pierwszy">Data za 10 tygodni<?= date("d,n,Y", strtotime("+ 10 weeks")) ?></p>
    <p id="drugi">Wigilia 2222 wypada <?= date("N", strtotime("24 december 2222")) ?> dniu tygodnia</p>
    <p id="trzeci">Stan wojenny w polsce wprowadzono w 13 grudnia 1981 i była to <?=  date("l", strtotime("13 december 1981"))?></p>
</body>
</html>