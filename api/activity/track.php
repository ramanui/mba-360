<?php

require_once '../config.php';
require_once '../includes/auth.php';
require_once '../services/ActivityTracker.php';

header('Content-Type: application/json');


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

requireAuthentication();


/*
|--------------------------------------------------------------------------
| Request
|--------------------------------------------------------------------------
*/

$data = json_decode(
    file_get_contents('php://input'),
    true
);


$entityType =
    trim($data['entity_type'] ?? '');

$entitySlug =
    trim($data['entity_slug'] ?? '');

$entityName =
    trim($data['entity_name'] ?? '');

$activityType =
    trim($data['activity_type'] ?? '');

$action =
    trim($data['action'] ?? '');

$sourceUrl =
    trim($data['source_url'] ?? '');

$targetUrl =
    trim($data['target_url'] ?? '');

$metadata =
    $data['metadata'] ?? null;


/*
|--------------------------------------------------------------------------
| Validate
|--------------------------------------------------------------------------
*/

$allowedActivities = [
    'exam' => [
        'view_details',
        'download_syllabus'
    ],

    'college' => [
        'view_details',
        'download_information',
        'view_fees',
        'view_placements'
    ]
];


if (!array_key_exists($entityType, $allowedActivities)) {

    http_response_code(400);

    echo json_encode([
        'success' => false,
        'message' => 'Invalid entity type'
    ]);

    exit;
}


if ($entitySlug === '') {

    http_response_code(400);

    echo json_encode([
        'success' => false,
        'message' => 'Entity slug is required'
    ]);

    exit;
}


if ($activityType === '') {

    http_response_code(400);

    echo json_encode([
        'success' => false,
        'message' => 'Activity type is required'
    ]);

    exit;
}


if ($action === '') {

    http_response_code(400);

    echo json_encode([
        'success' => false,
        'message' => 'Action is required'
    ]);

    exit;
}


if (!in_array($action, $allowedActivities[$entityType], true)) {

    http_response_code(400);

    echo json_encode([
        'success' => false,
        'message' => 'Action is not allowed for this entity type'
    ]);

    exit;
}

if ($entityName === '') {

    http_response_code(400);

    echo json_encode([
        'success' => false,
        'message' => 'Entity name is required'
    ]);

    exit;
}


/*
|--------------------------------------------------------------------------
| Track activity
|--------------------------------------------------------------------------
*/

$userId =
    getAuthenticatedUserId();


$tracker =
    new ActivityTracker($pdo);


$success = $tracker->track(
    $userId,
    $entityType,
    $entitySlug,
    $entityName,
    $activityType,
    $action,
    $sourceUrl ?: null,
    $targetUrl ?: null,
    $metadata
);


echo json_encode([
    'success' => $success
]);