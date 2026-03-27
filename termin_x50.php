<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
    border-collapse: collapse;
    border: 1px solid lightgray;
}
td{
    padding: 5px;
    border: 1px solid lightgray;
}
    </style>
</head>
<body>
    <table>
<caption>termin</caption>
<tr>
    <?php for($n=1; $n<=50; $n++) {
        echo "<tr>
        <td>Termin $n:</td>
        <td><form>
            <input type='date' name='date' placeholder='date'>
    </form></td> </tr>";
    }
    ?>
<tr style="text-align: center;">
    <td colspan="2"><input type="submit" value="zatwierdź">
</tr>

    </table>
</body>
</html>