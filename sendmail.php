<?php
/**
 * Western Ridge – Enquiry Form Handler
 */
session_start();

require_once __DIR__ . '/config.php';
require_once VENDOR_AUTOLOAD;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

/* ─────────────────────────────
   Input
───────────────────────────── */
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$company = trim($_POST['company'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

/* Safe versions for HTML emails */
$safe_name    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safe_email   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safe_phone   = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$safe_company = htmlspecialchars($company, ENT_QUOTES, 'UTF-8');
$safe_service = htmlspecialchars($service, ENT_QUOTES, 'UTF-8');
$safe_message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
$nl2br_msg    = nl2br($safe_message);

/* Clean version for SUBJECT (fix for &amp;) */
$clean_service = html_entity_decode($service, ENT_QUOTES, 'UTF-8');

/* Validation */
$errors = [];

if ($name === '') $errors[] = 'Full name';
if ($email === '') $errors[] = 'Email';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email';
if ($phone === '') $errors[] = 'Phone';
if ($service === '') $errors[] = 'Service';
if ($message === '') $errors[] = 'Message';

if (!empty($errors)) {
    $_SESSION['msg'] = 'Fill required fields: ' . implode(', ', $errors);
    $_SESSION['msg_type'] = 'error';
    header('Location: index.php#contact');
    exit;
}

$submission_time = date('d M Y, h:i A');

/* ─────────────────────────────
   Mail setup
───────────────────────────── */
$mail = new PHPMailer(true);

$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';

try {
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USERNAME;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = SMTP_ENCRYPTION === 'ssl'
        ? PHPMailer::ENCRYPTION_SMTPS
        : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = SMTP_PORT;

    $mail->setFrom(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);

    /* ───────── ADMIN EMAIL ───────── */
    $mail->clearAddresses();
    $mail->clearReplyTos();

    $mail->addAddress(COMPANY_EMAIL, COMPANY_NAME);
    $mail->addReplyTo($email, $name);

    ob_start();
    include __DIR__ . '/email_templates/admin_mail.php';
    $adminBody = ob_get_clean();

    $mail->isHTML(true);
    $mail->Subject = "New Enquiry: $clean_service - from $safe_name";
    $mail->Body    = $adminBody;

    $mail->AltBody =
        "New Enquiry\n\nName: $name\nEmail: $email\nPhone: $phone\nCompany: $company\nService: $service\nMessage:\n$message\n\nSubmitted: $submission_time";

    $mail->send();

    /* ───────── CUSTOMER EMAIL ───────── */
    $mail->clearAddresses();
    $mail->clearReplyTos();

    $mail->addAddress($email, $name);
    $mail->addReplyTo(COMPANY_EMAIL, COMPANY_NAME);

    ob_start();
    include __DIR__ . '/email_templates/customer_mail.php';
    $customerBody = ob_get_clean();

    $mail->Subject = "Thank you, $safe_name – We received your enquiry";
    $mail->Body    = $customerBody;

    $mail->AltBody =
        "Dear $name,\n\nWe received your enquiry for $service.\nWe will respond within 4 business hours.\n\nRegards,\n" .
        COMPANY_NAME . "\n" . COMPANY_PHONE;

    $mail->send();

    $_SESSION['msg'] = "Thank you, $safe_name! Your enquiry has been sent.";
    $_SESSION['msg_type'] = 'success';

} catch (Exception $e) {
    error_log('Mailer Error: ' . $mail->ErrorInfo);

    $_SESSION['msg'] = 'Unable to send enquiry right now. Try again later.';
    $_SESSION['msg_type'] = 'error';
}

header('Location: index.php#contact');
exit;