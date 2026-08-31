<?php

require_once '../includes/auth.php';
require_once '../config.php';

header('Content-Type: application/json');


if (!isAuthenticated()) {

    echo json_encode([
        'success' => true,
        'authenticated' => false
    ]);

    exit;
}


$stmt = $pdo->prepare(
    "SELECT id, name, email, email_verified
     FROM users
     WHERE id = ?
     LIMIT 1"
);

$stmt->execute([getAuthenticatedUserId()]);

$user = $stmt->fetch();

if (!$user) {

    $_SESSION = [];

    session_destroy();

    echo json_encode([
        'success' => true,
        'authenticated' => false
    ]);

    exit;
}


echo json_encode([
    'success' => true,
    'authenticated' => true,
    'user' => [
        'id' => (int) $user['id'],
        'name' => $user['name'],
        'email' => $user['email'],
        'email_verified' => (bool) $user['email_verified']
    ]
]);