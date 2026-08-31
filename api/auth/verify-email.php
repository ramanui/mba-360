<?php

require_once '../config.php';


function renderVerificationPage(bool $success, string $heading, string $message): void
{
    $color = $success ? '#0c6f56' : '#e11d48';

    echo '<!doctype html><html lang="en"><head><meta charset="utf-8">'
        . '<meta name="viewport" content="width=device-width,initial-scale=1">'
        . '<title>' . htmlspecialchars($heading, ENT_QUOTES, 'UTF-8') . '</title>'
        . '<style>
            body{font-family:Arial,Helvetica,sans-serif;background:#f4f6fb;margin:0;min-height:100vh;display:flex;align-items:center;justify-content:center;}
            .card{background:#fff;padding:40px;border-radius:12px;box-shadow:0 12px 28px rgba(0,0,0,.12);max-width:420px;text-align:center;}
            h1{color:' . $color . ';font-size:1.3rem;margin:0 0 12px;}
            p{color:#4b5563;font-size:.95rem;line-height:1.5;}
            a{display:inline-block;margin-top:16px;background:#0c6f56;color:#fff;text-decoration:none;padding:12px 24px;border-radius:8px;font-weight:600;}
        </style></head><body>'
        . '<div class="card">'
        . '<h1>' . htmlspecialchars($heading, ENT_QUOTES, 'UTF-8') . '</h1>'
        . '<p>' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '</p>'
        . '<a href="' . APP_BASE_URL . '/member-login.html">Go to Login</a>'
        . '</div></body></html>';

    exit;
}


$token = trim($_GET['token'] ?? '');

if ($token === '') {
    renderVerificationPage(
        false,
        'Invalid Verification Link',
        'This verification link is invalid. Please check the link or request a new one.'
    );
}


$stmt = $pdo->prepare(
    "SELECT id, email_verification_expires
     FROM users
     WHERE email_verification_token = ?
     LIMIT 1"
);

$stmt->execute([$token]);

$user = $stmt->fetch();

if (!$user) {
    renderVerificationPage(
        false,
        'Invalid or Expired Link',
        'This verification link is invalid or has already been used. If your email is already verified, you can log in.'
    );
}

if ($user['email_verification_expires'] !== null && strtotime($user['email_verification_expires']) < time()) {
    renderVerificationPage(
        false,
        'Link Expired',
        'This verification link has expired. Please register again or contact support to request a new verification email.'
    );
}


$update = $pdo->prepare(
    "UPDATE users
     SET email_verified = 1,
         email_verification_token = NULL,
         email_verification_expires = NULL
     WHERE id = ?"
);

$update->execute([$user['id']]);


renderVerificationPage(
    true,
    'Email Verified',
    'Your email address has been verified successfully. You can now log in to your account.'
);
