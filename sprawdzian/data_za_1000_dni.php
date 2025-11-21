<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
p#pierwszy{
color: lightpink;
padding: 20px;
border: 2px lightpink dashed;
}
p#drugi{
    border: 2px lightcoral dashed;
    color: lightcoral;
    padding: 20px;
}

    </style>
</head>
<body>
    <p id="pierwszy">Dzisiejsza data: <strong><?= date(1) ?></strong></p>
    <p id="drugi">Data za 1000 dni: <?=date(strtotime('21.11.2025'))?></p>
</body>
</html>