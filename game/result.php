<?php
session_start();
$score = isset($_SESSION['score']) ? $_SESSION['score'] : 0;

// Сброс игры
if (isset($_GET['reset'])) {
    session_destroy();
    header("Location: game.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Результат игры</title>
</head>
<body>
    <h1>Игра окончена!</h1>
    <p>Ваш счет: <?= $score ?> из 5</p>
    <a href="game.php?reset=true">Играть снова</a>
</body>
</html>
