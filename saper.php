<?php
session_start();

$rows = 10;
$cols = 10;
$minesCount = 15;

/* ================= NOWA GRA ================= */
if (!isset($_SESSION['board']) || isset($_GET['new'])) {

    $_SESSION['board'] = [];
    $_SESSION['revealed'] = [];
    $_SESSION['flags'] = [];
    $_SESSION['game_over'] = false;
    $_SESSION['win'] = false;

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $_SESSION['board'][$i][$j] = 0;
            $_SESSION['revealed'][$i][$j] = false;
            $_SESSION['flags'][$i][$j] = false;
        }
    }

    // Losowanie min
    $placed = 0;
    while ($placed < $minesCount) {
        $r = rand(0, $rows - 1);
        $c = rand(0, $cols - 1);
        if ($_SESSION['board'][$r][$c] !== 'M') {
            $_SESSION['board'][$r][$c] = 'M';
            $placed++;
        }
    }

    // Liczenie min wokół
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            if ($_SESSION['board'][$i][$j] === 'M') continue;

            $count = 0;
            for ($x = -1; $x <= 1; $x++) {
                for ($y = -1; $y <= 1; $y++) {
                    $ni = $i + $x;
                    $nj = $j + $y;
                    if ($ni >= 0 && $ni < $rows && $nj >= 0 && $nj < $cols) {
                        if ($_SESSION['board'][$ni][$nj] === 'M') {
                            $count++;
                        }
                    }
                }
            }
            $_SESSION['board'][$i][$j] = $count;
        }
    }
}

/* ================= FUNKCJE ================= */

function reveal($r, $c) {
    global $rows, $cols;

    if ($r < 0 || $r >= $rows || $c < 0 || $c >= $cols) return;
    if ($_SESSION['revealed'][$r][$c]) return;
    if ($_SESSION['flags'][$r][$c]) return;

    $_SESSION['revealed'][$r][$c] = true;

    if ($_SESSION['board'][$r][$c] === 0) {
        for ($x = -1; $x <= 1; $x++) {
            for ($y = -1; $y <= 1; $y++) {
                if ($x != 0 || $y != 0) {
                    reveal($r + $x, $c + $y);
                }
            }
        }
    }
}

function revealAll() {
    global $rows, $cols;
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $_SESSION['revealed'][$i][$j] = true;
        }
    }
}

function checkWin() {
    global $rows, $cols, $minesCount;
    $revealedCount = 0;

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            if ($_SESSION['revealed'][$i][$j]) {
                $revealedCount++;
            }
        }
    }

    if ($revealedCount == ($rows * $cols - $minesCount)) {
        $_SESSION['win'] = true;
        $_SESSION['game_over'] = true;
        revealAll();
    }
}

/* ================= AKCJE ================= */

if (isset($_GET['action']) && !$_SESSION['game_over']) {

    $r = (int)$_GET['row'];
    $c = (int)$_GET['col'];

    if ($_GET['action'] === 'reveal') {

        if ($_SESSION['board'][$r][$c] === 'M') {
            $_SESSION['game_over'] = true;
            revealAll();
        } else {
            reveal($r, $c);
            checkWin();
        }
    }

    if ($_GET['action'] === 'flag') {
        if (!$_SESSION['revealed'][$r][$c]) {
            $_SESSION['flags'][$r][$c] = !$_SESSION['flags'][$r][$c];
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Saper PHP</title>
<style>
table { border-collapse: collapse; }
td {
    width: 35px;
    height: 35px;
    text-align: center;
    vertical-align: middle;
    border: 1px solid black;
    font-weight: bold;
    font-size: 18px;
}
.hidden { background-color: lightgray; }
.revealed { background-color: white; }
.mine { background-color: red; color: white; }
.flag { background-color: orange; }
a { text-decoration: none; display: block; width:100%; height:100%; }
.controls { margin: 10px 0; }
</style>
</head>
<body>

<h2>💣 Saper PHP (z flagami)</h2>

<div class="controls">
<a href="?new=1">🔄 Nowa gra</a>
</div>

<table>
<?php
for ($i = 0; $i < $rows; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $cols; $j++) {

        $revealed = $_SESSION['revealed'][$i][$j];
        $value = $_SESSION['board'][$i][$j];
        $flag = $_SESSION['flags'][$i][$j];

        if ($revealed) {
            if ($value === 'M') {
                echo "<td class='mine'>💣</td>";
            } else {
                echo "<td class='revealed'>" . ($value > 0 ? $value : "") . "</td>";
            }
        } else {
            if ($flag) {
                echo "<td class='flag'>
                        <a href='?action=flag&row=$i&col=$j'>🚩</a>
                      </td>";
            } else {
                echo "<td class='hidden'>
                        <a href='?action=reveal&row=$i&col=$j'></a>
                        <a href='?action=flag&row=$i&col=$j' style='position:absolute; font-size:12px;'> </a>
                      </td>";
                echo "<script>
                        document.querySelectorAll('td.hidden').forEach(td=>{
                            td.oncontextmenu = function(e){
                                e.preventDefault();
                                window.location='?action=flag&row=$i&col=$j';
                            }
                        });
                      </script>";
            }
        }
    }
    echo "</tr>";
}
?>
</table>

<?php
if ($_SESSION['game_over']) {
    if ($_SESSION['win']) {
        echo "<h3>🎉 Wygrałeś!</h3>";
    } else {
        echo "<h3>💥 Przegrałeś!</h3>";
    }
}
?>

</body>
</html>