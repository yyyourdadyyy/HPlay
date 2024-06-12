<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login.html");
    exit();
    
}
$isUserLoggedIn = isset($_SESSION['username']);


// Сброс игры
if (isset($_GET['reset'])) {
    session_destroy();
    header("Location: game.php");
    exit();
}

// Инициализация игры
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
    $_SESSION['round'] = 1;
}

// Генерация предметов
function generateItems() {
    $items = ["apple", "banana", "cherry", "grape", "watermelon"];
    $selectedItems = array_rand(array_flip($items), 5);
    
    // Добавление пары одинаковых предметов
    $pairItem = $selectedItems[array_rand($selectedItems)];
    $selectedItems[] = $pairItem;

    // Перемешивание предметов
    shuffle($selectedItems);

    return $selectedItems;
}

// Проверка ответа
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['items']) && count($_POST['items']) == 2) {
        if ($_POST['items'][0] === $_POST['items'][1]) {
            $_SESSION['score']++;
        }

        $_SESSION['round']++;
        if ($_SESSION['score'] == 5) {
            header("Location: win.php");
            exit();
        } elseif ($_SESSION['round'] > 5) {
            header("Location: result.php");
            exit();
        }
    }
}

$items = generateItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Игра на совпадения</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
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
                    <a class="link-nav" href="metods.html">Методики</a>
                    <a class="link-nav" href="task.html">Задания</a>
                    <a class="link-nav" href="work.html">Работа с детьми</a>
                    <a class="link-nav" href="cartoons.html">Мультфильмы</a>
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
    <div class="g-bg">
        <div class="container">
        <form class="game" method="post">
        <?php foreach ($items as $item): ?>
            <label >
                <input type="checkbox" name="items[]" value="<?= $item ?>">
                <div class="game-item"><img src="img/<?= $item ?>.png" alt="<?= $item ?>"></div>
            </label><br>
        <?php endforeach; ?>
        <div class="submit">
            <button class="g-sub" type="submit">ПРОДОЛЖИТЬ</button>
        </div>
        <div class="session-info">
            <h1>Раунд <?= $_SESSION['round'] ?> из 5</h1>
            <p>Текущий счет: <?= $_SESSION['score'] ?></p>
        </div>
        <div class="reset-block">
            <a class="reset" href="game.php?reset=true">
            <span>
                restart_alt
            </span>
            </a>
        </div>
        </form>
        </div>
    </div>

    <script>
        document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                const checkedBoxes = document.querySelectorAll('input[type="checkbox"]:checked');
                if (checkedBoxes.length > 2) {
                    this.checked = false;
                }
            });
        });
    </script>
</body>
</html>
