<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ol {
            list-style: decimal-leading-zero;
        }
    </style>
</head>
<body>
    <?php
$title = "Pierwsza strona z PHP&#9866;em";
$link1 = "https://www.onet.pl/";
$link2 = "https://www.wp.pl/";
$link3 = "https://www.zsi.kielce.pl/";
?>
<h1><?php echo $title ?></h1>
<ol>
<li><a href=" <?= $link1?>">onet</a></li>
<li><a href=" <?= $link2?>">wp</a></li>
<li><a href=" <?= $link3?>">zsi</a></li>


</ol>
</body>
</html>