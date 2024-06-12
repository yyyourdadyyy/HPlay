<?php
require '../vendor/autoload.php'; // Подключение автозагрузчика Composer

try {
    $client = new MongoDB\Client("mongodb+srv://admin:admin@cluster0.ucqcryj.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0");
    $collection = $client->mydatabase->users; // Замените 'mydatabase' на имя вашей базы данных и 'users' на имя вашей коллекции
    
} catch (Exception $e) {
    echo "Ошибка подключения к MongoDB: ", $e->getMessage();
}
?>
