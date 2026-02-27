<?php
session_start();

$size = 5;
$totalTiles = $size * $size;

/* ================= NOWA GRA ================= */

if (isset($_POST['start'])) {

    $_SESSION['minesCount'] = (int)$_POST['mines'];
    $_SESSION['bet'] = (float)$_POST['bet'];
    $_SESSION['multiplier'] = 1.0;
    $_SESSION['revealed'] = [];
    $_SESSION['game_over'] = false;
    $_SESSION['cashout_available'] = true;

    if (!isset($_SESSION['balance'])) {
        $_SESSION['balance'] = 1000;
    }

    $_SESSION['balance'] -= $_SESSION['bet'];

    // Tworzenie planszy
    $_SESSION['board'] = array_fill(0, $totalTiles, 0);

    $placed = 0;
    while ($placed < $_SESSION['minesCount']) {
        $pos = rand(0, $totalTiles - 1);
        if ($_SESSION['board'][$pos] !== 'M') {
            $_SESSION['board'][$pos] = 'M';
            $placed++;
        }
    }
}

/* ================= ODKRYWANIE ================= */

if (isset($_GET['pick']) && !$_SESSION['game_over']) {

    $index = (int)$_GET['pick'];

    if (!in_array($index, $_SESSION['revealed'])) {

        $_SESSION['revealed'][] = $index;

        if ($_SESSION['board'][$index] === 'M') {
            $_SESSION['game_over'] = true;
            $_SESSION['cashout_available'] = false;
        } else {
            // Prosty wzór mnożnika
            $_SESSION['multiplier'] += 0.3 + ($_SESSION['minesCount'] * 0.05);
        }
    }
}

/* ================= CASHOUT ================= */

if (isset($_POST['cashout']) && $_SESSION['cashout_available'] && !$_SESSION['game_over']) {

    $win = $_SESSION['bet'] * $_SESSION['multiplier'];
    $_SESSION['balance'] += $win;
    $_SESSION['game_over'] = true;
    $_SESSION['cashout_available'] = false;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mines PHP</title>
<style>
body {
    font-family: Arial;
    background: #111;
    color: white;
    text-align: center;
}
.grid {
    display: grid;
    grid-template-columns: repeat(5, 70px);
    gap: 8px;
    justify-content: center;
    margin: 20px;
}
.tile {
    width: 70px;
    height: 70px;
    background: #333;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    cursor: pointer;
}
.safe { background: #2ecc71; }
.mine { background: #e74c3c; }
.info { margin: 10px; }
button { padding: 8px 15px; margin: 5px; }
input { padding: 5px; width: 80px; }
</style>
</head>
<body>

<h2>💣 Mines 5x5 (PHP)</h2>

<?php if (!isset($_SESSION['board']) || $_SESSION['game_over']): ?>

<form method="post">
    <div class="info">Saldo: <?php echo $_SESSION['balance'] ?? 1000; ?> zł</div>
    Zakład: <input type="number" name="bet" value="100" step="1" required>
    Miny (1-10): <input type="number" name="mines" min="1" max="10" value="3" required>
    <br><br>
    <button type="submit" name="start">Start</button>
</form>

<?php else: ?>

<div class="info">
Saldo: <?php echo $_SESSION['balance']; ?> zł |
Mnożnik: x<?php echo number_format($_SESSION['multiplier'], 2); ?>
</div>

<div class="grid">
<?php
for ($i = 0; $i < $totalTiles; $i++) {

    $class = "tile";
    $content = "";

    if (in_array($i, $_SESSION['revealed'])) {

        if ($_SESSION['board'][$i] === 'M') {
            $class .= " mine";
            $content = "💣";
        } else {
            $class .= " safe";
            $content = "💎";
        }

    } else {

        if ($_SESSION['game_over'] && $_SESSION['board'][$i] === 'M') {
            $class .= " mine";
            $content = "💣";
        } else {
            echo "<a href='?pick=$i' style='text-decoration:none;color:white;'>
                    <div class='$class'></div>
                  </a>";
            continue;
        }
    }

    echo "<div class='$class'>$content</div>";
}
?>
</div>

<?php if (!$_SESSION['game_over']): ?>
<form method="post">
    <button type="submit" name="cashout">💰 Cashout</button>
</form>
<?php else: ?>
<h3>
<?php
if ($_SESSION['cashout_available'] == false && in_array('M', $_SESSION['board'])) {
    echo "💥 Przegrałeś!";
} else {
    echo "🎉 Gra zakończona!";
}
?>
</h3>
<a href="">Zagraj ponownie</a>
<?php endif; ?>

<?php endif; ?>

</body>
</html>