<?php

class ActivityTracker
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function track(
        int $userId,
        string $entityType,
        string $entitySlug,
        string $entityName,
        string $activityType,
        string $action,
        ?string $sourceUrl = null,
        ?string $targetUrl = null,
        ?array $metadata = null
    ): bool {

        $ipAddress =
            $_SERVER['REMOTE_ADDR'] ?? null;

        $userAgent =
            $_SERVER['HTTP_USER_AGENT'] ?? null;


        $stmt = $this->pdo->prepare(
            "INSERT INTO student_activities
            (
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
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );


        return $stmt->execute([
            $userId,
            $entityType,
            $entitySlug,
            $entityName,
            $activityType,
            $action,
            $sourceUrl,
            $targetUrl,
            $metadata
                ? json_encode($metadata)
                : null,
            $ipAddress,
            $userAgent
        ]);
    }
}