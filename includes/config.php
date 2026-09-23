<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Database Configuration
|--------------------------------------------------------------------------
*/

const DB_HOST = 'localhost';
const DB_NAME = 'mba_discovery';
const DB_USER = 'root';
const DB_PASS = '';


/*
|--------------------------------------------------------------------------
| Application Path Configuration
|--------------------------------------------------------------------------
|
| config.php location:
|
| discover-mba/
| ├── member-registration.php
| ├── index.php
| └── includes/
|     └── config.php
|
| __DIR__ points to:
| C:/wamp64/www/discover-mba/includes
|
| __DIR__ . '/..' points to:
| C:/wamp64/www/discover-mba
|
*/

// Physical project directory
$projectDir = realpath(__DIR__ . '/..');

// Document root
$documentRoot = realpath($_SERVER['DOCUMENT_ROOT'] ?? '');

// Normalize Windows paths
$projectDir = $projectDir
    ? str_replace('\\', '/', $projectDir)
    : '';

$documentRoot = $documentRoot
    ? str_replace('\\', '/', $documentRoot)
    : '';


// Calculate project URL path
if (
    $projectDir !== '' &&
    $documentRoot !== '' &&
    strpos($projectDir, $documentRoot) === 0
) {
    $projectRoot = substr(
        $projectDir,
        strlen($documentRoot)
    );
} else {
    $projectRoot = '';
}


// Normalize URL path
$projectRoot = '/' . trim($projectRoot, '/');

// If project is directly inside document root
if ($projectRoot === '/') {
    $projectRoot = '';
}


/*
|--------------------------------------------------------------------------
| Application Constants
|--------------------------------------------------------------------------
*/

// Browser-visible application path
const APP_BASE_PATH_PLACEHOLDER = '';

define('APP_BASE_PATH', $projectRoot);


/*
|--------------------------------------------------------------------------
| Application Base URL
|--------------------------------------------------------------------------
|
| Local example:
| http://localhost/discover-mba
|
| Production example:
| https://www.example.com/discover-mba
|
*/

$isHttps = (
    !empty($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] !== 'off'
);

$scheme = $isHttps ? 'https' : 'http';

$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

define(
    'APP_BASE_URL',
    $scheme . '://' . $host . APP_BASE_PATH
);


/*
|--------------------------------------------------------------------------
| SMTP / Mail Configuration
|--------------------------------------------------------------------------
*/

const SMTP_HOST = 'host.designawebsite.in';
const SMTP_PORT = 465;
const SMTP_USERNAME = 'noreply@grandprintsindia.com';
const SMTP_PASSWORD = 'VzG_(!#RBYq)I]=q';
const SMTP_ENCRYPTION = 'ssl'; // ssl or tls

const SMTP_FROM_EMAIL = 'noreply@grandprintsindia.com';
const SMTP_FROM_NAME = 'MBA 360';


/*
|--------------------------------------------------------------------------
| Security / Application Settings
|--------------------------------------------------------------------------
*/

// Email verification token validity: 24 hours
const VERIFICATION_TOKEN_TTL = 86400;

// Set true when production is running on HTTPS
const SESSION_COOKIE_SECURE = false;

const SESSION_COOKIE_HTTPONLY = true;

const SESSION_COOKIE_SAMESITE = 'Lax';