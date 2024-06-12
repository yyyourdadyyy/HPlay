<?php
session_start();
$score = $_SESSION['score'];

// Сброс игры
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Победа!</title>
</head>
<body>
    <h1>Поздравляем, вы победили!</h1>
    <p>Ваш счет: <?= $score ?> из 5</p>
    <a href="game.php?reset=true">Играть снова</a>
</body>
</html>
