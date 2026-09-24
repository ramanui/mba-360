<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/auth.php';

startSecureSession();
logOutUser();

header('Location: ' . appRedirectPath('/'), true, 302);
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Pragma: no-cache');
exit;
