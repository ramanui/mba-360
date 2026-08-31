<?php

session_start();

header('Content-Type: application/json');

require_once '../config.php';

$data = json_decode(
    file_get_contents('php://input'),
    true
);

$name = trim($data['name'] ?? '');
$email = trim($data['email'] ?? '');
$phone = trim($data['phone'] ?? '');
$educationLevel = trim($data['education_level'] ?? '');
$password = $data['password'] ?? '';
$confirmPassword = $data['confirm_password'] ?? '';
$communicationConsent = !empty($data['communication_consent']) ? 1 : 0;


/*
|--------------------------------------------------------------------------
| Validation
|--------------------------------------------------------------------------
*/

if ($name === '') {

    echo json_encode([
        'success' => false,
        'field' => 'name',
        'message' => 'Please enter your full name'
    ]);

    exit;
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo json_encode([
        'success' => false,
        'field' => 'email',
        'message' => 'Please enter a valid email address'
    ]);

    exit;
}

if ($phone !== '' && !preg_match('/^[6-9][0-9]{9}$/', $phone)) {

    echo json_encode([
        'success' => false,
        'field' => 'phone',
        'message' => 'Please enter a valid 10-digit phone number starting with 6, 7, 8, or 9'
    ]);

    exit;
}


if ($educationLevel === '') {

    echo json_encode([
        'success' => false,
        'field' => 'education_level',
        'message' => 'Please select your education level'
    ]);

    exit;
}


if ($password === '') {

    echo json_encode([
        'success' => false,
        'field' => 'password',
        'message' => 'Please enter a password'
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


if (!$communicationConsent) {

    echo json_encode([
        'success' => false,
        'field' => 'terms',
        'message' => 'Please accept the communication consent'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Check existing email
|--------------------------------------------------------------------------
*/

$stmt = $pdo->prepare(
    "SELECT id
     FROM users
     WHERE email = ?
     LIMIT 1"
);

$stmt->execute([$email]);

if ($stmt->fetch()) {

    echo json_encode([
        'success' => false,
        'field' => 'email',
        'message' => 'Email already registered'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Hash password
|--------------------------------------------------------------------------
*/

$passwordHash = password_hash(
    $password,
    PASSWORD_DEFAULT
);


/*
|--------------------------------------------------------------------------
| Generate email verification token
|--------------------------------------------------------------------------
*/

$verificationToken = bin2hex(random_bytes(32));
$verificationExpires = date('Y-m-d H:i:s', time() + 86400);


/*
|--------------------------------------------------------------------------
| Create user
|--------------------------------------------------------------------------
*/

$stmt = $pdo->prepare(
    "INSERT INTO users
    (
        name,
        email,
        phone,
        education_level,
        password,
        communication_consent,
        email_verification_token,
        email_verification_expires
    )
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
);

$stmt->execute([
    $name,
    $email,
    $phone !== '' ? $phone : null,
    $educationLevel,
    $passwordHash,
    $communicationConsent,
    $verificationToken,
    $verificationExpires
]);


$userId = (int) $pdo->lastInsertId();


/*
|--------------------------------------------------------------------------
| Send verification email
|--------------------------------------------------------------------------
*/

require_once '../includes/mailer.php';

$verifyUrl = APP_BASE_URL . '/api/auth/verify-email.php?token=' . $verificationToken;

$emailSent = sendVerificationEmail($email, $name, $verifyUrl);

if (!$emailSent) {
    error_log("Failed to send verification email to {$email} (user id {$userId})");
}


echo json_encode([
    'success' => true,
    'email_sent' => $emailSent,
    'message' => $emailSent
        ? 'Registration successful. A verification email has been sent to your registered email address. Please check your inbox and verify your email address.'
        : 'Registration successful, but we were unable to send the verification email right now. Please contact support or try verifying again later.'
]);