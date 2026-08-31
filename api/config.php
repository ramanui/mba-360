<?php

$host = 'localhost';
$dbname = 'mba_discovery';
$username = 'root';
$password = '';

try {

    $pdo = new PDO(
        "mysql:host={$host};dbname={$dbname};charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

} catch (PDOException $e) {

    http_response_code(500);

    header('Content-Type: application/json');

    echo json_encode([
        'success' => false,
        'message' => 'Database connection failed'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| App settings
|--------------------------------------------------------------------------
*/

define('APP_BASE_URL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http')
    . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . '/mba-html-discovery');