<?php
declare(strict_types=1);

function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

function isPostRequest(): bool
{
    return ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';
}

function jsonResponse(array $data, int $status = 200): never
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data, JSON_UNESCAPED_SLASHES);
    exit;
}

function registrationRateLimitExceeded(PDO $pdo, string $key): bool
{
    $windowSeconds = REGISTRATION_RATE_LIMIT_WINDOW_SECONDS;

    $pdo->exec(
        'CREATE TABLE IF NOT EXISTS registration_rate_limits (
            rate_limit_key CHAR(64) NOT NULL PRIMARY KEY,
            attempts SMALLINT UNSIGNED NOT NULL DEFAULT 0,
            window_started_at DATETIME NOT NULL,
            updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
                ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4'
    );

    $pdo->exec(
        'DELETE FROM registration_rate_limits
         WHERE window_started_at < DATE_SUB(NOW(), INTERVAL 1 DAY)
         LIMIT 100'
    );

    $stmt = $pdo->prepare(
        'INSERT INTO registration_rate_limits
            (rate_limit_key, attempts, window_started_at)
         VALUES (?, 1, NOW())
         ON DUPLICATE KEY UPDATE
            attempts = IF(
                window_started_at <= DATE_SUB(NOW(), INTERVAL ' .
                $windowSeconds . ' SECOND),
                1,
                attempts + 1
            ),
            window_started_at = IF(
                window_started_at <= DATE_SUB(NOW(), INTERVAL ' .
                $windowSeconds . ' SECOND),
                NOW(),
                window_started_at
            )'
    );
    $stmt->execute([$key]);

    $stmt = $pdo->prepare(
        'SELECT attempts
         FROM registration_rate_limits
         WHERE rate_limit_key = ?'
    );
    $stmt->execute([$key]);

    return (int)$stmt->fetchColumn() > REGISTRATION_RATE_LIMIT_MAX_ATTEMPTS;
}

function registrationRateLimitKey(string $type, string $value): string
{
    return hash('sha256', $type . ':' . $value);
}

function isDisposableEmail(string $email): bool
{
    $domain = strrchr($email, '@');

    if ($domain === false) {
        return false;
    }

    return in_array(
        strtolower(substr($domain, 1)),
        DISPOSABLE_EMAIL_DOMAINS,
        true
    );
}

function trackAuthenticatedActivity(PDO $pdo, string $activityType, array $metadata = []): void
{
    $allowedActivities = ['login', 'logout'];

    if (!in_array($activityType, $allowedActivities, true)) {
        return;
    }

    $user = currentAuthenticatedUser();

    if ($user === null && $activityType !== 'logout') {
        return;
    }

    try {
        $pdo->exec(
            'CREATE TABLE IF NOT EXISTS user_activities (
                id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                user_id INT UNSIGNED NOT NULL,
                activity_type VARCHAR(100) NOT NULL,
                metadata JSON NULL,
                created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                INDEX user_activities_user_created (user_id, created_at)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4'
        );

        $column = $pdo->query("SHOW COLUMNS FROM user_activities LIKE 'metadata'")->fetch(PDO::FETCH_ASSOC);
        if ($column && strtoupper((string)$column['Type']) !== 'JSON') {
            $pdo->exec('ALTER TABLE user_activities MODIFY metadata JSON NULL');
        }

        $jsonMetadata = $metadata === []
            ? null
            : json_encode($metadata, JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);

        $stmt = $pdo->prepare(
            'INSERT INTO user_activities (user_id, activity_type, metadata)
             VALUES (?, ?, ?)'
        );

        $stmt->execute([
            (int)($user['id'] ?? 0),
            substr($activityType, 0, 100),
            $jsonMetadata,
        ]);
    } catch (Throwable $e) {
        error_log('User activity tracking failed: ' . $e->getMessage());
    }
}

function csrfToken(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf_token'];
}

function verifyCsrfToken(?string $token): bool
{
    return is_string($token)
        && $token !== ''
        && !empty($_SESSION['csrf_token'])
        && hash_equals($_SESSION['csrf_token'], $token);
}

function old(string $key): string
{
    return e($_SESSION['old'][$key] ?? '');
}

function setOld(array $data): void
{
    $_SESSION['old'] = $data;
}

function clearOld(): void
{
    unset($_SESSION['old']);
}
