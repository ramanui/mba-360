<?php
declare(strict_types=1);

// require_once __DIR__ . '/includes/smtp/PHPMailer.php';
// require_once __DIR__ . '/includes/smtp/PHPMailer.php';
require './includes/smtp/PHPMailer.php';
require './includes/smtp/SMTP.php';
require './includes/smtp/Exception.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function sendVerificationEmail(
    string $email,
    string $name,
    string $verifyUrl
): bool {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USERNAME;
        $mail->Password   = SMTP_PASSWORD;
        $mail->Port       = SMTP_PORT;

        $encryption = strtolower(SMTP_ENCRYPTION);

        if ($encryption === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } elseif ($encryption === 'tls') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        }

        $mail->CharSet = 'UTF-8';

        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress($email, $name);

        $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $safeUrl  = htmlspecialchars($verifyUrl, ENT_QUOTES, 'UTF-8');

        $mail->isHTML(true);
        $mail->Subject = 'Verify your MBA 360 account';

        $mail->Body = <<<HTML
<!doctype html>
<html>
<body style="font-family:Arial,sans-serif;line-height:1.6;color:#222">
    <h2>Welcome to MBA 360</h2>
    <p>Hello {$safeName},</p>
    <p>Thank you for registering. Please verify your email address by clicking the button below.</p>
    <p>
        <a href="{$safeUrl}"
           style="display:inline-block;padding:12px 20px;background:#ff4701;color:#fff;text-decoration:none;border-radius:6px;">
            Verify Email Address
        </a>
    </p>
    <p>This verification link will expire in 24 hours.</p>
    <p>If you did not create this account, you can safely ignore this email.</p>
</body>
</html>
HTML;

        $mail->AltBody =
            "Hello {$name},\n\n" .
            "Please verify your MBA 360 account using this link:\n" .
            $verifyUrl . "\n\n" .
            "This link will expire in 24 hours.";

        return $mail->send();
    } catch (Exception $e) {
        error_log('Verification email failed: ' . $mail->ErrorInfo);
        return false;
    }
}
