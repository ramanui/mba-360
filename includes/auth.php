<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';

function startSecureSession(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }

    session_set_cookie_params([
        'lifetime' => 0,
        'path' => APP_BASE_PATH !== '' ? APP_BASE_PATH : '/',
        'secure' => IS_PRODUCTION || SESSION_COOKIE_SECURE,
        'httponly' => SESSION_COOKIE_HTTPONLY,
        'samesite' => SESSION_COOKIE_SAMESITE,
    ]);
    ini_set('session.use_strict_mode', '1');
    session_start();
}

function currentAuthenticatedUser(): ?array
{
    $user = $_SESSION['authenticated_user'] ?? null;

    return is_array($user) && isset($user['id'], $user['name'], $user['email'])
        ? $user
        : null;
}

function isUserAuthenticated(): bool
{
    return currentAuthenticatedUser() !== null;
}

function appRedirectPath(string $path): string
{
    $normalized = '/' . ltrim($path, '/');

    if (APP_BASE_PATH === '') {
        return $normalized === '/' ? '/' : $normalized;
    }

    return APP_BASE_PATH . $normalized;
}

function requireAuthentication(string $redirectPath = '/member-login.php'): void
{
    if (!isUserAuthenticated()) {
        header('Location: ' . appRedirectPath($redirectPath));
        exit;
    }
}

function logInUser(array $user): void
{
    session_regenerate_id(true);
    $_SESSION['authenticated_user'] = [
        'id' => (int)$user['id'],
        'name' => (string)$user['name'],
        'email' => (string)$user['email'],
    ];
}

function logOutUser(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        return;
    }

    $_SESSION = [];
    unset($_SESSION['authenticated_user']);
    session_unset();
    session_destroy();

    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', [
            'expires' => time() - 42000,
            'path' => $params['path'],
            'domain' => $params['domain'],
            'secure' => $params['secure'],
            'httponly' => $params['httponly'],
            'samesite' => $params['samesite'] ?? 'Lax',
        ]);
    }
}


