<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
        p{
            background-color: lightsteelblue;
            border: 2px dotted blueviolet;
            border-radius: 5px;
            font-style: italic;
            padding: 15px;
        }
    </Style>
</head>
<body>
    <p>Rozpocęcie tego roku szkolnego odbyło się w <?= date("l", mktime(0,0,0,9,1,25))?> i był to <?= date("z", mktime(0,0,0,9,1+1,25))?> dzień roku</p>
</body>
</html>
