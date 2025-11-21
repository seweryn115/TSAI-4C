<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>date()</legend>
        <p>Aktualna godzina: <?= date("H:i:s") ?></p>
        <p>Dzisziejsza data: <?= date("j.m.Y") ?></p>
        <p>Dzień roku: <?= date("z") + 1 ?></p>
        <p>Jest godzina <?= date("H:i:s") ?> dnia <?= date("j.m.Y") ?>, jest to <?= date("z") + 1 ?> tego roku.</p>
    </fieldset>
    <fieldset>
        <legend>time()</legend>
        <p><?= time() ?></p>
        <p>Jutrzejsza data: <?= date("j M Y", time() + 86400) ?></p> <!-- Szybkie info "86400 sekund = 1 dzień" - Olek -->
        <p>Wczorajsza data: <?= date("j.m.Y", time() - 86400) ?></p>
        <p>Osiem godzin później: <?= date("H:i:s", time() + 28800) ?></p>
    </fieldset>
    <fieldset>
        <legend>strtotime()</legend>
        <p>Wiglia w roku 2222 wypada w <?= date('N', strtotime("24 December 2222")) ?>. dniu tygodnia </p>
        <p>Data za 200 dni: <?= date("j.m.Y", strtotime("+200 days")) ?></p>
    </fieldset>
    <fieldset>
        <legend>mktime()</legend>
        <p><?= mktime(12, 12, 12, 12, 12, 2012) ?></p>
        <p><?= date("H:i:s j.m.Y ", mktime( 12, 12, 12, 12, 12, 2012)) ?></p>
    </fieldset>

</body>

</html>