<?php

session_start();

header('Content-Type: application/json');

require_once '../config.php';


/*
|--------------------------------------------------------------------------
| Get email
|--------------------------------------------------------------------------
*/

$data = json_decode(
    file_get_contents('php://input'),
    true
);

$email = trim($data['email'] ?? '');


/*
|--------------------------------------------------------------------------
| Validate email
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


/*
|--------------------------------------------------------------------------
| Find user
|--------------------------------------------------------------------------
*/

$stmt = $pdo->prepare(
    "SELECT id, name, email
     FROM users
     WHERE email = ?
     AND status = 1
     LIMIT 1"
);

$stmt->execute([$email]);

$user = $stmt->fetch();


/*
|--------------------------------------------------------------------------
| Don't reveal whether email exists
|--------------------------------------------------------------------------
*/

if (!$user) {

    echo json_encode([
        'success' => true,
        'message' =>
            'If this email is registered, a 4 digit code has been sent.'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Generate 4 digit OTP
|--------------------------------------------------------------------------
*/

$otp = (string) random_int(1000, 9999);

$otpHash = password_hash(
    $otp,
    PASSWORD_DEFAULT
);


/*
|--------------------------------------------------------------------------
| OTP expires in 10 minutes
|--------------------------------------------------------------------------
*/

$expiresAt = date(
    'Y-m-d H:i:s',
    time() + 600
);


/*
|--------------------------------------------------------------------------
| Remove previous active OTPs
|--------------------------------------------------------------------------
*/

$stmt = $pdo->prepare(
    "DELETE FROM password_reset_otps
     WHERE user_id = ?
     AND verified_at IS NULL"
);

$stmt->execute([
    $user['id']
]);


/*
|--------------------------------------------------------------------------
| Save OTP
|--------------------------------------------------------------------------
*/

$stmt = $pdo->prepare(
    "INSERT INTO password_reset_otps
    (
        user_id,
        email,
        otp_hash,
        expires_at
    )
    VALUES (?, ?, ?, ?)"
);

$stmt->execute([
    $user['id'],
    $user['email'],
    $otpHash,
    $expiresAt
]);


/*
|--------------------------------------------------------------------------
| Send email
|--------------------------------------------------------------------------
*/

require_once '../includes/mailer.php';

$emailSent = sendPasswordResetOtpEmail($user['email'], $user['name'], $otp);

if (!$emailSent) {
    error_log("Failed to send password reset OTP to {$user['email']} (user id {$user['id']})");
}


/*
|--------------------------------------------------------------------------
| Response
|--------------------------------------------------------------------------
*/

echo json_encode([
    'success' => true,
    'message' =>
        'A 4 digit code has been sent to your email address.'
]);