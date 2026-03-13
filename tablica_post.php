<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="email" name="email" placeholder="email"><br>
    <input type="date" name="date" placeholder="date"><br>
    <input type="month" name="month" placeholder="month"><br>
    <input type="time" name="time" placeholder="time"><br>
    <input type="week" name="week" placeholder="week"><br>
    <input type="submit" name="send" value="Wyślij"><br>
</form>
<br>
<pre>
<?php

print_r($_POST)

?></pre>
</body>
</html>