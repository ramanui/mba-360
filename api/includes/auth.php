<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once '../config.php';


const SESSION_TIMEOUT = 3600;


/*
 * Check whether session has expired.
 */
function checkSessionTimeout(): void
{
    if (!isset($_SESSION['user_id'])) {
        return;
    }


    if (
        isset($_SESSION['last_activity']) &&
        (time() - $_SESSION['last_activity']) > SESSION_TIMEOUT
    ) {

        $_SESSION = [];

        session_destroy();

        return;
    }


    $_SESSION['last_activity'] = time();
}


checkSessionTimeout();


function isAuthenticated(): bool
{
    return isset($_SESSION['user_id']);
}


function getAuthenticatedUserId(): ?int
{
    return $_SESSION['user_id'] ?? null;
}


function requireAuthentication(): void
{
    if (!isAuthenticated()) {

        http_response_code(401);

        header('Content-Type: application/json');

        echo json_encode([
            'success' => false,
            'authenticated' => false,
            'message' => 'Authentication required'
        ]);

        exit;
    }
}


function isEmailVerified(): bool
{
    global $pdo;

    $userId = getAuthenticatedUserId();

    if ($userId === null) {
        return false;
    }

    $stmt = $pdo->prepare(
        "SELECT email_verified
         FROM users
         WHERE id = ?
         LIMIT 1"
    );

    $stmt->execute([$userId]);

    $user = $stmt->fetch();

    return $user && (int) $user['email_verified'] === 1;
}


/*
 * Use this instead of requireAuthentication() to guard any
 * feature that should stay locked until the user verifies
 * their email address.
 */
function requireVerifiedEmail(): void
{
    requireAuthentication();

    if (!isEmailVerified()) {

        http_response_code(403);

        header('Content-Type: application/json');

        echo json_encode([
            'success' => false,
            'verified' => false,
            'message' => 'Please verify your email address to access this feature'
        ]);

        exit;
    }
}