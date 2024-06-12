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
                    <a class="link-nav" href="../metods.html">Методики</a>
                    <a class="link-nav" href="../task.php">Задания</a>
                    <a class="link-nav " href="../work.html">Работа с детьми</a>
                    <a class="link-nav" href="../cartoons.html">Мультфильмы</a>
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
        $users = $collection->find();
        

        // Вывод данных на страницу
        foreach ($users as $user) {
            $level = round((($user['expirince']-100) / 100) +1);
            echo '<div class="profile-date">';
            echo '<img src="../img/men-ava.svg" alt="Avatar">';
            echo '<div class="date-profiles">';
            echo '<p class="name-date">' . $user['username'] . '</p>';
            echo '<p class="decr-date">' . $user['description'] . '</p>'; // Предполагается, что у пользователя есть поле 'description'
            echo '<p class="level-date">Уровень ' . $level . '</p>'; // Предполагается, что у пользователя есть поле 'level'
            echo '</div>';
            echo '</div>';
            
        }
        ?>
      </div>
      <div class="favorites-game">
        <h2 class="favorites-title">Любимые игры</h2>
      </div>
    </div>
</main>
    <footer class="footer">
        
    </footer>
</body>
</html>
