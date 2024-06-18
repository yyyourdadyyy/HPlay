<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../login.html');
    exit;
}
$isUserLoggedIn = isset($_SESSION['username']);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/media.css">
    <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">
    <script defer src="js/app.js"></script>
    <title>Личный профиль</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="logo">
                    <img src="../img/logo.svg" alt="Logo">
                    <p class="logo-text">HAPPY <span>PLAYLAND</span></p>
                </div>
                <div class="link-nav-login">
                    <a class="link-nav" href="../metods.php">Методики</a>
                    <a class="link-nav" href="../task.php">Задания</a>
                    <a class="link-nav " href="../work.php">Работа с детьми</a>
                    <a class="link-nav" href="../cartoons.php">Мультфильмы</a>
                    <div class="login">
                    <?php
                    if (!$isUserLoggedIn) {
                echo '<a href="login.php" class="login-button">Войти</a>';
            }else {
                echo '<a href="logout.php" class="login-button">Выйти</a>';
            }
            ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main class="main">
    <div class="container">
      <div class="main-profiles">
        <div class="bg-profile-img">
            <img src="../img/cover.svg" alt="bg profile">
        </div>
        <?php
        require 'db.php';

        // Получение всех пользователей из базы данных
        
        $username = $_SESSION['username'];
        $user = $collection->findOne(['username' => $username]);
        

        // Вывод данных на страницу
        
            $level = round((($user['expirince']-100) / 100) +1);
            echo '<div class="profile-date">';
            echo '<img src="../img/men-ava.svg" alt="Avatar">';
            echo '<div class="date-profiles">';
            echo '<p class="name-date">' . $user['username'] . '</p>';
            echo '<p class="decr-date">' . $user['description'] . '</p>'; // Предполагается, что у пользователя есть поле 'description'
            echo '<p class="level-date">Уровень ' . $level . '</p>'; // Предполагается, что у пользователя есть поле 'level'
            echo '</div>';
            echo '</div>';
            
        
        ?>
      </div>
      <div class="container">
            
        </div>
      <div class="favorites-game">
        <h2 class="favorites-title">Любимые игры</h2>
        
        <div class="rows-task">
            <div class="card-task fav-card">
                <p class="title-card-task">Выбери одинаковые предметы</p>
                <img class="card-img-one" src="../img/icon-card-task(1).svg" alt="">
                <a class="link-task" href="../game/game.php">ИГРАТЬ</a>
            </div>
            <div class="card-task fav-card">
                <p class="title-card-task">Учим буквы</p>
                <img class="card-img-two" src="../img/letters.svg" alt="">
                <a class="link-task" href="../game-letters/gl.php">ИГРАТЬ</a>
            </div>
            <div class="card-task fav-card">
                <p class="title-card-task">Домашнее задание</p>
                <img class="card-img-center" src="../../img/book.svg" alt="">
                <a class="link-task" href="../book.php">Выполнить</a>
            </div>
            
           </div>
      </div>
    </div>
</main>
    <footer class="footer">
        
    </footer>
</body>
</html>
