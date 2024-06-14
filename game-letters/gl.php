<?php
session_start();

$isUserLoggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Учим буквы</title>
<link rel="stylesheet" href="../style/main.css">
<link rel="stylesheet" href="../style/media.css">
<link rel="stylesheet" href="style/game.css">
</head>
<body>
<header class="header">
        <div class="container">
            <nav class="nav">
                <div class="logo">
                    <img src="../img/logo.svg" alt="Logo">
                    <p class="logo-text">HAPPY <span>PLAYLAND</span></p>
                    <p class="main-text-mobilu">Главная</p>
                </div>
                <div class="link-nav-login">
                    <a class="link-nav" href="metods.php">Методики</a>
                    <a class="link-nav" href="task.php">Задания</a>
                    <a class="link-nav" href="work.php">Работа с детьми</a>
                    <a class="link-nav" href="cartoons.php">Мультфильмы</a>
                    <div class="login">
                    <?php
                    if (!$isUserLoggedIn) {
                echo '<a href="login.html" class="login-button">Войти</a>';
            }else {
                echo '<a href="auth/dashboard.php" class="login-button">Профиль</a>';
            }
            ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="container">
        <h1 class="task-title">Назови буквы</h1>
    </div>
<div class="game-container">

<?php

require '../auth/db.php';






if (!isset($_SESSION['round'])) {
    $_SESSION['letters'] = generateRandomLetters();
    $_SESSION['round'] = 1;
    $_SESSION['current_letter_index'] = 0;
} elseif ($_SESSION['current_letter_index'] == 0) {
    $_SESSION['current_letter_index'] = 1;
} else {
    $_SESSION['letters'] = generateRandomLetters();
    $_SESSION['current_letter_index'] = 0;
    $_SESSION['round']++;
}

if ($_SESSION['round'] <= 5) {
    $letter = $_SESSION['letters'][$_SESSION['current_letter_index']];
    $color = generateRandomColor();
    $imagePath = "img/" . strtolower($letter) . ".png";

    echo "<div class='letter' style='color:$color;'>$letter</div>";
    echo "<div class='image-container'><img src='$imagePath' ></div>";
    
?>
</div>
<div class="button-container">
<?php 
echo "<button class='next' onclick='window.location.reload();'>Далее</button>";
} else {
    if (isset($_SESSION['user_id'])) {
        $updateResult = $collection->updateOne(
            ['username' => 'username'],
            ['$inc' => ['expirince' => 50]]
        );
        printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
    printf("Modified %d document(s)\n", $updateResult->getModifiedCount()); // Предполагается, что user_id хранится в сессии
    }
    // Завершаем игру и очищаем только переменные игры
    $_SESSION['game_over'] = true;
    unset($_SESSION['letters']);
    unset($_SESSION['round']);
    unset($_SESSION['current_letter_index']);
    unset($_SESSION['game_over']);
    header('Location: ../task.php');
    exit;}
?>
</div>
</body>
</html>
<?php
function generateRandomLetters() {
    $alphabet = 'абвгдеёжзийклмнопрстуфхцчшщъыьэюя';
    $letters = preg_split('//u', $alphabet, 0, PREG_SPLIT_NO_EMPTY);
    shuffle($letters);
    return $letters;
}

function generateRandomColor() {
    $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    return $color;
}
?>
