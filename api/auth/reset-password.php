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

$password = $data['password'] ?? '';
$confirmPassword = $data['confirm_password'] ?? '';


/*
|--------------------------------------------------------------------------
| Ensure OTP was verified in this session
|--------------------------------------------------------------------------
*/

$verifiedAt = $_SESSION['password_reset_verified_at'] ?? null;

if (
    empty($_SESSION['password_reset_verified'])
    || empty($_SESSION['password_reset_user_id'])
    || !$verifiedAt
    || (time() - $verifiedAt) > 900
) {

    unset(
        $_SESSION['password_reset_user_id'],
        $_SESSION['password_reset_verified'],
        $_SESSION['password_reset_verified_at']
    );

    echo json_encode([
        'success' => false,
        'message' => 'Your session has expired. Please request a new code.'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Validate password
|--------------------------------------------------------------------------
*/

if ($password === '') {

    echo json_encode([
        'success' => false,
        'field' => 'password',
        'message' => 'Please enter a new password'
    ]);

    exit;
}


if (strlen($password) < 8) {

    echo json_encode([
        'success' => false,
        'field' => 'password',
        'message' => 'Password must contain at least 8 characters'
    ]);

    exit;
}


if ($password !== $confirmPassword) {

    echo json_encode([
        'success' => false,
        'field' => 'confirm_password',
        'message' => 'Passwords do not match'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Update password
|--------------------------------------------------------------------------
*/

$userId = (int) $_SESSION['password_reset_user_id'];

$passwordHash = password_hash(
    $password,
    PASSWORD_DEFAULT
);

$stmt = $pdo->prepare(
    "UPDATE users
     SET password = ?
     WHERE id = ?"
);

$stmt->execute([
    $passwordHash,
    $userId
]);


/*
|--------------------------------------------------------------------------
| Invalidate used OTPs and reset session
|--------------------------------------------------------------------------
*/

$stmt = $pdo->prepare(
    "DELETE FROM password_reset_otps
     WHERE user_id = ?"
);

$stmt->execute([$userId]);

unset(
    $_SESSION['password_reset_user_id'],
    $_SESSION['password_reset_verified'],
    $_SESSION['password_reset_verified_at']
);


echo json_encode([
    'success' => true,
    'message' => 'Your password has been reset successfully. You can now log in.'
]);
