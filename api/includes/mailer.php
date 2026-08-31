<?php

require '../smtp/PHPMailer.php';
require '../smtp/SMTP.php';
require '../smtp/Exception.php';
require_once __DIR__ . '/mail-config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/*
|--------------------------------------------------------------------------
| Send account verification email
|--------------------------------------------------------------------------
|
| Uses PHPMailer for sending emails with more robust functionality.
| Returns true only if the email was sent successfully.
|
*/

function sendVerificationEmail(string $toEmail, string $toName, string $verifyUrl): bool
{
    $subject = 'Verify your email address';

    $safeName = htmlspecialchars($toName, ENT_QUOTES, 'UTF-8');
    $safeUrl = htmlspecialchars($verifyUrl, ENT_QUOTES, 'UTF-8');

    $body = "
        <p>Hi {$safeName},</p>
        <p>Thanks for registering. Please verify your email address to activate your account.</p>
        <p><a href=\"{$safeUrl}\" style=\"display:inline-block;padding:12px 24px;background:#0c6f56;color:#ffffff;text-decoration:none;border-radius:6px;\">Verify Email</a></p>
        <p>Or copy and paste this link into your browser:<br>{$safeUrl}</p>
        <p>This link will expire in 24 hours.</p>
    ";

    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . MAIL_FROM_NAME . ' <' . MAIL_FROM_ADDRESS . '>',
    ];

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = MAIL_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = MAIL_USERNAME;
        $mail->Password = MAIL_PASSWORD;
        $mail->SMTPSecure = MAIL_ENCRYPTION === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = MAIL_PORT;

        $mail->setFrom(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
        $mail->addAddress($toEmail, $toName);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;

        return $mail->send();
    } catch (Exception $e) {
        error_log('Verification email failed: ' . $e->getMessage());
        return false;
    }
}

/*
|--------------------------------------------------------------------------
| Send password reset OTP email
|--------------------------------------------------------------------------
|
| Uses PHPMailer for sending emails with more robust functionality.
| Returns true only if the email was sent successfully.
|
*/

function sendPasswordResetOtpEmail(string $toEmail, string $toName, string $otp): bool
{
    $subject = 'Your password reset code';

    $safeName = htmlspecialchars($toName, ENT_QUOTES, 'UTF-8');
    $safeOtp = htmlspecialchars($otp, ENT_QUOTES, 'UTF-8');

    $body = "
        <p>Hi {$safeName},</p>
        <p>We received a request to reset your password. Use the code below to continue:</p>
        <p style=\"font-size:28px;font-weight:700;letter-spacing:6px;color:#0c6f56;\">{$safeOtp}</p>
        <p>This code expires in 10 minutes.</p>
        <p>If you didn't request a password reset, you can safely ignore this email.</p>
    ";

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = MAIL_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = MAIL_USERNAME;
        $mail->Password = MAIL_PASSWORD;
        $mail->SMTPSecure = MAIL_ENCRYPTION === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = MAIL_PORT;

        $mail->setFrom(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
        $mail->addAddress($toEmail, $toName);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;

        return $mail->send();
    } catch (Exception $e) {
        error_log('Password reset OTP email failed: ' . $e->getMessage());
        return false;
    }
}
