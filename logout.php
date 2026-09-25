<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/database.php';
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/helpers.php';

startSecureSession();
$user = currentAuthenticatedUser();

if ($user !== null) {
    trackAuthenticatedActivity($pdo, 'logout', [
        'user_email' => $user['email'] ?? null,
        'source_url' => $_SERVER['HTTP_REFERER'] ?? $_SERVER['REQUEST_URI'] ?? '/',
        'logout_time' => date('c'),
    ]);
}

logOutUser();

header('Location: ' . appRedirectPath('/'), true, 302);
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Pragma: no-cache');
exit;
