<?php

$errors = [];
$success = false;

$full_name = "";
$email_address = "";
$age_range = "";
$message_content = "";
$consent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = trim($_POST["full_name"] ?? "");
    $email_address = trim($_POST["email_address"] ?? "");
    $age_range = $_POST["age_range"] ?? "";
    $message_content = trim($_POST["message_content"] ?? "");
    $consent = isset($_POST["consent"]);

    // Imię i nazwisko
    if (!preg_match('/^\S+\s+\S+.*$/', $full_name)) {
        $errors["full_name"] =
            "To pole musi zawierać conajmniej dwa wyrazy";
    }

    // Email
    if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
        $errors["email_address"] =
            "Podaj poprawny adres email";
    }

    // Wiek
    if ($age_range == "") {
        $errors["age_range"] =
            "Wybierz swój przedział wiekowy";
    }

    // Wiadomość
    $without_spaces = preg_replace('/\s+/', '', $message_content);

    if (strlen($without_spaces) < 10) {
        $errors["message_content"] =
            "Wiadomość musi zawierać conajmniej 10 znaków";
    }

    // Zgoda
    if (!$consent) {
        $errors["consent"] =
            "Potwierdź swoją zgodę";
    }

    // Zapis
    if (empty($errors)) {

        $data = [
            "full_name" => $full_name,
            "email_address" => $email_address,
            "age_range" => $age_range,
            "message_content" => $message_content,
            "consent" => true
        ];

        $content =
            date("Y-m-d H:i:s") .
            PHP_EOL;

        $content .= print_r($data, true);
        $content .= PHP_EOL;

        file_put_contents(
            "formularz_kontaktowy.txt",
            $content,
            FILE_APPEND
        );

        $success = true;
    }
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>

<meta charset="UTF-8">

<title>Formularz kontaktowy</title>

<style>

body{
font-family:Arial;
background:#f5f5f5;
}

.form-box{

width:320px;
padding:20px;
background:#eef3fa;
margin:40px auto;

}

label{

display:block;
margin-top:18px;
font-size:20px;

}

.required{

color:red;

}

input,
select,
textarea{

width:100%;
padding:6px;
font-size:16px;
box-sizing:border-box;

}

textarea{

height:70px;
resize:none;

}

.error{

color:#c40000;
font-size:14px;
margin-top:4px;

}

.invalid{

border:2px solid #c40000;

}

button{

margin-top:25px;
padding:8px 15px;
font-size:16px;

}

.success{

color:#b00000;
margin-top:10px;

}

.checkbox{

margin-top:20px;

}

.checkbox input{

width:auto;

}

</style>

</head>

<body>

<div class="form-box">

<form method="POST">

<label>
Imię i nazwisko
<span class="required">*</span>
</label>

<input
type="text"
name="full_name"
value="<?=htmlspecialchars($full_name)?>"
class="<?=isset($errors['full_name'])?'invalid':''?>"
>

<?php
if(isset($errors["full_name"]))
echo "<div class='error'>{$errors['full_name']}</div>";
?>

<label>
Adres email
<span class="required">*</span>
</label>

<input
type="text"
name="email_address"
value="<?=htmlspecialchars($email_address)?>"
class="<?=isset($errors['email_address'])?'invalid':''?>"
>

<?php
if(isset($errors["email_address"]))
echo "<div class='error'>{$errors['email_address']}</div>";
?>

<label>
Przedział wiekowy
<span class="required">*</span>
</label>

<select
name="age_range"
class="<?=isset($errors['age_range'])?'invalid':''?>"
>

<option value=""></option>

<option value="do 25"
<?=($age_range=="do 25")?"selected":""?>>
do 25
</option>

<option value="25-50"
<?=($age_range=="25-50")?"selected":""?>>
25-50 lat
</option>

<option value="50-75"
<?=($age_range=="50-75")?"selected":""?>>
50-75
</option>

<option value="powyżej 75"
<?=($age_range=="powyżej 75")?"selected":""?>>
powyżej 75
</option>

</select>

<?php
if(isset($errors["age_range"]))
echo "<div class='error'>{$errors['age_range']}</div>";
?>

<label>
Wiadomość
<span class="required">*</span>
</label>

<textarea
name="message_content"
class="<?=isset($errors['message_content'])?'invalid':''?>"
><?=htmlspecialchars($message_content)?></textarea>

<?php
if(isset($errors["message_content"]))
echo "<div class='error'>{$errors['message_content']}</div>";
?>

<div class="checkbox">

<input
type="checkbox"
name="consent"
<?=$consent?"checked":""?>
>

Zgoda na przetwarzanie danych
<span class="required">*</span>

</div>

<?php
if(isset($errors["consent"]))
echo "<div class='error'>{$errors['consent']}</div>";
?>

<button type="submit">
Wyślij
</button>

<?php if($success): ?>

<div class="success">

Dane z formularza zostały zapisane
do pliku formularz_kontaktowy.txt

</div>

<?php endif; ?>

</form>

</div>

</body>
</html>