<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>

  <input type="text" name="login" placeholder="login"><br>

  <input type="password" name="haslo" placeholder="haslo"><br>
  <input type="submit" name="send" value="Wyślij">
</form><br>
<pre>
    <?php
    print_r($_GET)
    ?>
</pre>
</body>
</html>