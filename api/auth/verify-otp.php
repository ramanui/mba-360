<?php

session_start();

header('Content-Type: application/json');

require_once '../config.php';


$data = json_decode(
    file_get_contents('php://input'),
    true
);

$email = trim($data['email'] ?? '');
$otp = trim($data['otp'] ?? '');


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo json_encode([
        'success' => false,
        'message' => 'Invalid email address'
    ]);

    exit;
}


if (!preg_match('/^[0-9]{4}$/', $otp)) {

    echo json_encode([
        'success' => false,
        'message' => 'Please enter a valid 4 digit code'
    ]);

    exit;
}


$stmt = $pdo->prepare(
    "SELECT *
     FROM password_reset_otps
     WHERE email = ?
     AND verified_at IS NULL
     ORDER BY id DESC
     LIMIT 1"
);

$stmt->execute([$email]);

$reset = $stmt->fetch();


if (!$reset) {

    echo json_encode([
        'success' => false,
        'message' => 'Invalid or expired code'
    ]);

    exit;
}


if (strtotime($reset['expires_at']) < time()) {

    echo json_encode([
        'success' => false,
        'message' => 'This code has expired'
    ]);

    exit;
}


if (!password_verify($otp, $reset['otp_hash'])) {

    echo json_encode([
        'success' => false,
        'message' => 'Invalid verification code'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Mark OTP verified
|--------------------------------------------------------------------------
*/

$stmt = $pdo->prepare(
    "UPDATE password_reset_otps
     SET verified_at = NOW()
     WHERE id = ?"
);

$stmt->execute([
    $reset['id']
]);


/*
|--------------------------------------------------------------------------
| Store temporary password reset authorization
|--------------------------------------------------------------------------
*/

$_SESSION['password_reset_user_id'] =
    (int) $reset['user_id'];

$_SESSION['password_reset_verified'] = true;

$_SESSION['password_reset_verified_at'] =
    time();


echo json_encode([
    'success' => true,
    'message' => 'Code verified successfully'
]);