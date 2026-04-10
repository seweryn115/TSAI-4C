<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    fieldset {
        border: solid 4px yellowgreen
    }

    span {
        color: red;
    }
</style>

<body>
    <?php
    $imie = '';
    $nazwisko = '';
    $opcje = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty(trim($_POST["imie"]))) {
            $imie = "Imie jest wymagane";
        } else {
            echo $imie;
        }

        if (empty(trim($_POST["nazwisko"]))) {
            $nazwisko = "Nazwisko jest wymagane";
        } else {
            echo $nazwisko;
        }

        if (empty($_POST["opcja"])) {
            $opcje = "Wybierz jedną opcję:";
        } else {
            echo $opcje;
        }


    }

    ?>
    <fieldset>
        <legend>Ankieta</legend>
        <form method="post">
            <label for="imie">Imię: <span>* <?= $imie ?></span></label><br>
            <input type="name" name="imie"><br>
            <label for="nazwisko">Nazwisko: <span>* <?= $nazwisko ?></span></label><br>
            <input type="name" name="nazwisko"><br>
            <label>Wybierz jedną opcję: <span>* <?= $opcje ?></span></label><br>
            <input type="radio" name="opcja" value="uczeń">
            <label for="uczeń">Uczeń</label><br>
            <input type="radio" name="opcja" value="absolwent">
            <label for="absolwent">Absolwent</label><br>
            <input type="radio" name="opcja" value="nauczyciel">
            <label for="nauczyciel">Nauczyciel</label><br>
            <input type="radio" name="opcja" value="Pracownik administracji">
            <label for="Pracownik administracji">Pracownik administracji</label><br><br>
            <input type="submit" name="send" value="Wyślij">
    </fieldset>
    </pre>

    <?php print_r($_POST)
        ?>
</body>

</html>