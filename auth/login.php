<?php
require 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Поиск пользователя в базе данных
    $user = $collection->findOne(['username' => $username]);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); // Перенаправление на защищенную страницу
        exit;
    } else {
        echo "Неверный логин или пароль.";
    }
}
?>
