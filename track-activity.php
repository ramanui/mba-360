<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/database.php';
require_once __DIR__ . '/includes/auth.php';

startSecureSession();

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.'], JSON_UNESCAPED_SLASHES);
    exit;
}

$rawInput = file_get_contents('php://input');
$payload = $rawInput !== false && trim($rawInput) !== ''
    ? json_decode($rawInput, true)
    : [];

if (!is_array($payload)) {
    $payload = [];
}

$user = currentAuthenticatedUser();
$targetUrl = resolveRedirectTarget((string)($payload['target_url'] ?? ''), '/index.php');
$sourceUrl = resolveRedirectTarget((string)($payload['source_url'] ?? ''), '/index.php');
$activityType = trim((string)($payload['activity_type'] ?? 'tracked_action'));
$action = trim((string)($payload['action'] ?? 'click'));
$entityType = trim((string)($payload['entity_type'] ?? 'link'));
$entitySlug = trim((string)($payload['entity_slug'] ?? ''));
$entityName = trim((string)($payload['entity_name'] ?? ''));
$metadata = is_array($payload['metadata'] ?? null) ? $payload['metadata'] : [];

if ($entityType === '') {
    $entityType = 'link';
}

if ($entitySlug === '') {
    $entitySlug = preg_replace('/[^a-z0-9\-]+/i', '-', strtolower(basename($targetUrl !== '' ? $targetUrl : '/')));
    $entitySlug = trim((string)$entitySlug, '-');
    if ($entitySlug === '') {
        $entitySlug = 'tracked-action';
    }
}

if ($entityName === '') {
    $entityName = 'Tracked action';
}

if ($user === null) {
    http_response_code(401);
    echo json_encode([
        'success' => false,
        'requires_login' => true,
        'login_url' => appRedirectPath('/member-login.php') . '?redirect=' . rawurlencode($targetUrl),
    ], JSON_UNESCAPED_SLASHES);
    exit;
}

$metadata = array_filter($metadata, static fn ($value) => $value !== null && $value !== '');
$metadata['target_url'] = $targetUrl;
$metadata['source_url'] = $sourceUrl;

try {
    $pdo->exec(
        'CREATE TABLE IF NOT EXISTS student_activities (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
            user_id INT UNSIGNED NOT NULL,
            entity_type VARCHAR(50) NULL,
            entity_slug VARCHAR(150) NULL,
            entity_name VARCHAR(255) NULL,
            activity_type VARCHAR(100) NOT NULL,
            action VARCHAR(100) NULL,
            source_url VARCHAR(1000) NULL,
            target_url VARCHAR(1000) NULL,
            metadata JSON NULL,
            ip_address VARCHAR(45) NULL,
            user_agent TEXT NULL,
            created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            INDEX student_activities_user_created (user_id, created_at)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4'
    );

    $stmt = $pdo->prepare(
        'INSERT INTO student_activities (
            user_id,
            entity_type,
            entity_slug,
            entity_name,
            activity_type,
            action,
            source_url,
            target_url,
            metadata,
            ip_address,
            user_agent
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)'
    );

    $stmt->execute([
        (int)$user['id'],
        $entityType !== '' ? substr($entityType, 0, 50) : null,
        $entitySlug !== '' ? substr($entitySlug, 0, 150) : null,
        $entityName !== '' ? substr($entityName, 0, 255) : null,
        substr($activityType, 0, 100) !== '' ? substr($activityType, 0, 100) : 'tracked_action',
        $action !== '' ? substr($action, 0, 100) : 'click',
        $sourceUrl !== '' ? substr($sourceUrl, 0, 1000) : null,
        $targetUrl !== '' ? substr($targetUrl, 0, 1000) : null,
        $metadata === [] ? null : json_encode($metadata, JSON_UNESCAPED_SLASHES),
        $_SERVER['REMOTE_ADDR'] ?? null,
        $_SERVER['HTTP_USER_AGENT'] ?? null,
    ]);

    echo json_encode(['success' => true, 'recorded' => true], JSON_UNESCAPED_SLASHES);
} catch (Throwable $e) {
    error_log('Student activity tracking failed: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Activity tracking failed.',
    ], JSON_UNESCAPED_SLASHES);
}
