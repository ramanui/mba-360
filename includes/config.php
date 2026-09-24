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
| Public Application URL
|--------------------------------------------------------------------------
|
| Set this to the canonical public URL before deploying. Do not derive it
| from the request Host header because it is used in security-sensitive
| email verification links.
|
*/

const APP_PUBLIC_URL = 'http://localhost/discover-mba';

// Set to true in production to enable registration rate limiting.
const IS_PRODUCTION = false;

define('APP_BASE_URL', rtrim(APP_PUBLIC_URL, '/'));


/*
|--------------------------------------------------------------------------
| SMTP / Mail Configuration
|--------------------------------------------------------------------------
*/

const SMTP_HOST = 'sandbox.smtp.mailtrap.io';
const SMTP_PORT = 2525;
const SMTP_USERNAME = '0525c2c7392f52';
const SMTP_PASSWORD = '5420fd6708a8c9';
const SMTP_ENCRYPTION = ''; // Empty matches MAIL_SCHEME=null.

const SMTP_FROM_EMAIL = 'hello@example.com';
const SMTP_FROM_NAME = 'Discover MBA';


/*
|--------------------------------------------------------------------------
| Security / Application Settings
|--------------------------------------------------------------------------
*/

// Email verification token validity: 24 hours
const VERIFICATION_TOKEN_TTL = 86400;

const REGISTRATION_RATE_LIMIT_MAX_ATTEMPTS = 10;
const REGISTRATION_RATE_LIMIT_WINDOW_SECONDS = 300;

const DISPOSABLE_EMAIL_DOMAINS = [
    'yopmail.com', 'yopmail.fr', 'yopmail.net', 'yopmail.org', 'yopmail.co',
    'yopmail.top', 'yopmail.xyz', 'yopmail.me', 'yopmail.guru',
    'mailinator.com', 'mailinator.net', 'mailinator.org', 'mailinator.co',
    'mailinator.xyz',
    '10minutemail.com', '10minutemail.net', '10minutemail.org',
    '10minemail.com', '10minute-mail.com',
    'temp-mail.org', 'temp-mail.io', 'temp-mail.com', 'tempmail.com',
    'tempmail.net', 'tempmail.org', 'tempmail.co', 'tempmail.email',
    'guerrillamail.com', 'guerrillamail.info', 'guerrillamail.net',
    'guerrillamail.org', 'guerrillamail.biz', 'sharklasers.com', 'grr.la',
    'trashmail.com', 'trashmail.de', 'trashmail.net', 'trashmail.me',
    'moakt.com', 'moakt.cc', 'moakt.ws',
    'getnada.com', 'nadaemail.com', 'dropmail.me',
    'maildrop.cc', 'maildrop.cf', 'maildrop.ga',
    'dispostable.com', 'dispostable.org',
    'fakeinbox.com', 'fakeinbox.info',
    'throwawaymail.com', 'throwawaymail.io',
    'mailnesia.com', 'getairmail.com', 'inboxkitten.com', 'burnermail.io',
    'burnermail.com',
];

// Set true when production is running on HTTPS
const SESSION_COOKIE_SECURE = false;

const SESSION_COOKIE_HTTPONLY = true;

const SESSION_COOKIE_SAMESITE = 'Lax';
