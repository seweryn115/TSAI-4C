<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $miesiac = rand(1, 15)
    ?>
    <h1 style="border-top: 4px dotted pink ; border-bottom: 4px dotted pink; text-align:center"><?php echo $miesiac ?></h1>
    <h3 style="border-top: 4px dashed pink ; border-bottom: 4px dashed pink; text-align:center">
        <?php
        switch ($miesiac) {
            case "1":
            case "2":
            case "3":
                echo "I kwartał";
                break;
            case "4":
            case "5":
            case "6":
                echo "II kwartał";
                break;
            case "7":
            case "8":
            case "9":
                echo "III kwartał";
                break;
            case "10":
            case "11":
            case "12":
                echo "IV kwartał";
                break;
            default:
                echo "błędny nr miesiąca";
        }
        ?>
    </h3>
</body>
</html>