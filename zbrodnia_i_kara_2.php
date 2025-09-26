<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$string = "Nie ma nic trudniejszego na świecie niż szczerość i nie ma nnic łatwiejszego niż pochlebstwo."
?>
<p><?=$string ?></p>
<blockquote><?= ucwords($string) ?></blockquote>
</body>
</html>