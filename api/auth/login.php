<?php

session_start();

header('Content-Type: application/json');

require_once '../config.php';


/*
|--------------------------------------------------------------------------
| Get request data
|--------------------------------------------------------------------------
*/

$data = json_decode(
    file_get_contents('php://input'),
    true
);

$email = trim($data['email'] ?? '');
$password = $data['password'] ?? '';


/*
|--------------------------------------------------------------------------
| Validate input
|--------------------------------------------------------------------------
*/

if ($email === '') {

    echo json_encode([
        'success' => false,
        'message' => 'Please enter your email address'
    ]);

    exit;
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo json_encode([
        'success' => false,
        'message' => 'Please enter a valid email address'
    ]);

    exit;
}


if ($password === '') {

    echo json_encode([
        'success' => false,
        'message' => 'Please enter your password'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Find user
|--------------------------------------------------------------------------
*/

$stmt = $pdo->prepare(
    "SELECT
        id,
        name,
        email,
        password,
        status,
        email_verified
     FROM users
     WHERE email = ?
     LIMIT 1"
);

$stmt->execute([$email]);

$user = $stmt->fetch();


/*
|--------------------------------------------------------------------------
| Check user
|--------------------------------------------------------------------------
*/

if (!$user) {

    echo json_encode([
        'success' => false,
        'message' => 'Invalid email or password'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Check account status
|--------------------------------------------------------------------------
*/

if ((int) $user['status'] !== 1) {

    echo json_encode([
        'success' => false,
        'message' => 'Your account is inactive'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Verify password
|--------------------------------------------------------------------------
*/

if (!password_verify($password, $user['password'])) {

    echo json_encode([
        'success' => false,
        'message' => 'Invalid email or password'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Check email verification
|--------------------------------------------------------------------------
*/

if ((int) $user['email_verified'] !== 1) {

    echo json_encode([
        'success' => false,
        'message' => 'Please verify your email address before logging in. Check your inbox for the verification link.'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Regenerate session ID
|--------------------------------------------------------------------------
*/

session_regenerate_id(true);


/*
|--------------------------------------------------------------------------
| Store authenticated user
|--------------------------------------------------------------------------
*/

$_SESSION['user_id'] = (int) $user['id'];
$_SESSION['user_name'] = $user['name'];
$_SESSION['user_email'] = $user['email'];

$_SESSION['logged_in_at'] = time();
$_SESSION['last_activity'] = time();


/*
|--------------------------------------------------------------------------
| Login successful
|--------------------------------------------------------------------------
*/

echo json_encode([
    'success' => true,
    'message' => 'Login successful'
]);