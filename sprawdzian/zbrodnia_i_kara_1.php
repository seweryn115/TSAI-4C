<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $string = "Bo cierpienie, proszę pana, to wielka rzecz. W cierpieniu jest pewna idea."
    ?>
    <p><?= $string?></p>
    <blockquote><?=  strtoupper($string)?></blockquote>
</body>
</html>