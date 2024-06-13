<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $expirince = 100;

    // Проверка, существует ли уже пользователь с таким логином
    $existingUser = $collection->findOne(['username' => $username]);
    if ($existingUser) {
        echo "Пользователь с таким логином уже существует.";
        exit;
    }

    // Проверка длины пароля
    if (strlen($password) < 4) {
        echo "Пароль должен содержать не менее 6 символов.";
        exit;
    }

    // Генерация хэша пароля
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Вставка нового пользователя в базу данных
    $result = $collection->insertOne([
        'username' => $username,
        'password' => $passwordHash,
        'expirince' => $expirince
    ]);

    if ($result->getInsertedCount() == 1) {
        echo "Регистрация прошла успешно!";
        header('Location: ../login.html'); // Перенаправление на страницу входа
        exit;
    } else {
        echo "Ошибка регистрации.";
    }
}
?>
