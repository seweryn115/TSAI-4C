<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            margin-bottom: 10px;
        }
        strong{
            background-color: orange;
            border-radius: 80px 0px 100px 10px; 
            border: solid;
            border-color: orangered;
        }
    </style>
</head>
<body>
<?php 
define("DOBRA_RADA","Bez chleba, to się nie najesz.");
?>
<h3 style="background-color: red; text-align:right">Stała ma wartość: <?=DOBRA_RADA ?></h3><br>
<div>Do stałej DOBRA_RADA stosuje funkcje <strong>strlen</strong>: <?php echo strlen(DOBRA_RADA)?></div>
<div>Do stałej DOBRA_RADA stosuje funkcje <strong>str_word_count</strong>: <?php echo str_word_count(DOBRA_RADA)?></div>
<div>Do stałej DOBRA_RADA stosuje funkcje <strong>strrev</strong>: <?php echo strrev(DOBRA_RADA)?></div>
<div>Do stałej DOBRA_RADA stosuje funkcje <strong>strpos</strong>: <?php echo strpos(DOBRA_RADA, "to")?><br></div>
<div>Do stałej DOBRA_RADA stosuje funkcje <strong>str_replace</strong>: <?php echo str_replace("chleba","mięsa","Bez chleba, to się nie najesz.")?><br></div>
<div>Do stałej DOBRA_RADA stosuje funkcje <strong>strtolower</strong>: <?php echo strtolower(DOBRA_RADA)?><br></div>
<div>Do stałej DOBRA_RADA stosuje funkcje <strong>strtoupper</strong>: <?php echo strtoupper(DOBRA_RADA)?><br></div>
<div>Do stałej DOBRA_RADA stosuje funkcje <strong>ucwords</strong>: <?php echo ucwords(DOBRA_RADA)?><br></div>
<div>Do stałej DOBRA_RADA stosuje funkcje <strong>trim</strong>: <?php echo trim(DOBRA_RADA)?><br></div>
<div>Do stałej DOBRA_RADA stosuje funkcje <strong>strstr</strong>: <?php echo strstr(DOBRA_RADA, "nie")?><br></div>
<div>Do stałej DOBRA_RADA stosuje funkcje <strong>substr</strong>: <?php echo substr(DOBRA_RADA, offset:10, length:5)?><br></div>
<div>Do stałej DOBRA_RADA stosuje funkcje <strong>str_pad</strong>: <?php echo str_pad(DOBRA_RADA, length:41, pad_string:" -_-", pad_type: STR_PAD_BOTH)?><br></div>
</body>
</html>