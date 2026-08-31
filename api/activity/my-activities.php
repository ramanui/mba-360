<?php

require_once '../config.php';
require_once '../includes/auth.php';

header('Content-Type: application/json');

requireAuthentication();

$userId =
    getAuthenticatedUserId();


$stmt = $pdo->prepare(
    "SELECT
        id,
        entity_type,
        entity_slug,
        entity_name,
        activity_type,
        action,
        source_url,
        target_url,
        metadata,
        created_at
     FROM student_activities
     WHERE user_id = ?
     ORDER BY created_at DESC"
);

$stmt->execute([
    $userId
]);


$activities =
    $stmt->fetchAll();

foreach ($activities as &$activity) {
    $activity['metadata'] = $activity['metadata']
        ? json_decode($activity['metadata'], true)
        : null;
}
unset($activity);


echo json_encode([
    'success' => true,
    'activities' => $activities
]);