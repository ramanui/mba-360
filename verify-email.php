<?php
declare(strict_types=1);

session_start();

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/database.php';
require_once __DIR__ . '/includes/helpers.php';

$pageTitle = 'Email Verification | MBA 360';
$metaDescription = 'Verify your MBA 360 email address.';

$token = trim((string)($_GET['token'] ?? ''));

$success = false;
$message = '';

$authenicationRequired = false;

if ($token === '' || !preg_match('/^[a-f0-9]{64}$/i', $token)) {
    $message = 'This verification link is invalid.';
} else {
    $stmt = $pdo->prepare(
        'SELECT
            id,
            email,
            email_verified,
            email_verification_expires
         FROM users
         WHERE email_verification_token = ?
         LIMIT 1'
    );

    $stmt->execute([$token]);
    $user = $stmt->fetch();

    if (!$user) {
        $message = 'This verification link is invalid or has already been used.';
    } elseif (!empty($user['email_verified'])) {
        $success = true;
        $message = 'Your email address has already been verified.';
    } elseif (
        empty($user['email_verification_expires']) ||
        strtotime($user['email_verification_expires']) < time()
    ) {
        $message = 'This verification link has expired. Please request a new verification email.';
    } else {
        $stmt = $pdo->prepare(
            'UPDATE users
             SET
                email_verified = 1,
                email_verification_token = NULL,
                email_verification_expires = NULL
             WHERE id = ?'
        );

        $stmt->execute([(int)$user['id']]);

        $success = true;
        $message = 'Your email address has been successfully verified.';
    }
}
?>

<main class="authPage">
    <section class="authPage__success">
        <h1>
            <?= $success ? 'Email Verified' : 'Verification Failed' ?>
        </h1>

        <p><?= e($message) ?></p>

        <a href="<?= e(APP_BASE_PATH) ?>/member-login.php">
            Continue to Login
        </a>
    </section>
</main>

