<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span{
            color: pink;
        }
        h1{
            color: purple;
            text-shadow: 10px 10px 3px;
        }
        div{
            background-color: lightgoldenrodyellow;
            border-radius: 10px 10px 10px 10px;
        }
    </style>
</head>
<body>
<?php
  $data1 = strtotime("12.01.2025");
  $data2 = strtotime("20.02.2025");
  $data3 = date_create("12.01.2025");
  $data4 = date_create("20.02.2025");
  $dni = date_diff($data3, $data4)->days;
  $wat = 0.23;
  $cena = 85;
  $wartość = $dni * ((1 + $wat) * $cena)
  ?>
<div>
  <h1>Wynajem</h1>
  <h3>Od <span><?= date("d.m.Y", $data1) ?></span> do <span><?= date("d.m.Y", $data2) ?></span> </h3>
  <h4>Liczba dni najmu: <span><?= $dni ?></span></h4>
  <p>Cena najmu <span id="cena"><?= $cena ?> zł </span> (Netto/Dzień) </p>
  <p>Całkowity koszt najmu <span id="koszt"><?= number_format($wartość, 2, ",", " ") ?></span> zł (Brutto | VAT = 23%) </p>
</div>
</body>
</html>
