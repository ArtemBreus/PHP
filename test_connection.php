<?php
// Параметри підключення
$host = 'monorail.proxy.rlwy.net';
$port = '51824';
$dbname = 'railway';
$user = 'postgres';
$password = 'zGNPNOihMwiWOyWcwugQXOgIWwQypTKh';

try {
    // Створення нового підключення PDO
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    echo "З'єднання встановлено успішно<br>";

    // Виконання простого SQL запиту
    $query = "SELECT 1";
    $stmt = $pdo->query($query);

    if ($stmt) {
        echo "Запит виконано успішно<br>";
    } else {
        echo "Помилка при виконанні запиту<br>";
    }

} catch (PDOException $e) {
    echo "З'єднання не вдалося: " . $e->getMessage() . "<br>";
}
?>
