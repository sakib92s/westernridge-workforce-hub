<?php
/**
 * Western Ridge Expert Services LLP – Master Configuration
 * 
 * All reusable values are defined here as constants.
 * Change only this file when moving between environments.
 */

// ──────────────────────────────────────────────
// 1. Company Identity
// ──────────────────────────────────────────────
define('COMPANY_NAME',         'Western Ridge Expert Services LLP');
define('COMPANY_EMAIL',        'admin.westernridge@gmail.com');   // admin recipient
define('COMPANY_PHONE',        '+91 98819 01568');
define('COMPANY_WHATSAPP',     '919881901568');                             // without +, for wa.me link
define('COMPANY_ADDRESS',      'Pune, Maharashtra, India');
define('REPLY_EMAIL',          'admin.westernridge@gmail.com');                    // Reply-To for admin mail

// ──────────────────────────────────────────────
// 2. Website / URLs
// ──────────────────────────────────────────────
define('SITE_URL',             'http://localhost/western-ridge/');                  // no trailing slash
define('LOGO_URL',             SITE_URL . '/src/logo.png');                 // absolute URL for email clients

// ──────────────────────────────────────────────
// 3. SMTP Settings (Gmail with App Password)
// ──────────────────────────────────────────────
define('SMTP_HOST',            'smtp.gmail.com');
define('SMTP_PORT',            587);
define('SMTP_USERNAME',        'admin.westernridge@gmail.com');   // YOUR sending Gmail address
define('SMTP_PASSWORD',        'your-app-data-password');    // 16-char App Password
define('SMTP_ENCRYPTION',      'tls');                       // 'tls' or 'ssl'

// ──────────────────────────────────────────────
// 4. Timezone (for submission timestamps)
// ──────────────────────────────────────────────
date_default_timezone_set('Asia/Kolkata');

// ──────────────────────────────────────────────
// 5. Email Sender Identity
// ──────────────────────────────────────────────
define('MAIL_FROM_ADDRESS',    SMTP_USERNAME);               // must match SMTP username
define('MAIL_FROM_NAME',       COMPANY_NAME . ' Enquiry');

// ──────────────────────────────────────────────
// 6. PHPMailer path (adjust if needed)
// ──────────────────────────────────────────────
define('VENDOR_AUTOLOAD',      __DIR__ . '/vendor/autoload.php');