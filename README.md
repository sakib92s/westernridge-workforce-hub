# Western Ridge Workforce Hub

Enterprise workforce management website for **Western Ridge Expert Services LLP**.

A premium, production-ready business website built for lead generation, enquiry handling, and automated email communication with clients.

---

## 🚀 Live Preview
Add your deployed URL here after hosting

---

## ✨ Key Features

### 🧭 Frontend System
- Modern single-page enterprise UI
- Hero section with parallax + animated text
- Smooth scrolling (Lenis)
- GSAP scroll animations (reveal, stagger, counters)
- Preloader animation with branding
- Fully responsive layout (mobile-first)

### 🏢 Business Sections
- Services showcase (industrial manpower, staffing, security, cleaning, technical staff)
- Why Choose Us section (compliance, scale, speed, verification)
- Credentials (ISO, MSME, Startup India, Labour License)
- Client slider (auto-infinite marquee effect)
- Testimonials section (scroll-driven horizontal interaction)

### 📩 Lead & Email System
- PHP enquiry form with validation
- PHPMailer SMTP integration
- Dual email system:
  - Admin notification email (new enquiry alert)
  - Customer auto-reply email (thank you + summary)
- Session-based success/error messages
- Secure input sanitization (XSS protection)
- UTF-8 encoding support for proper email rendering

### 📱 Communication Features
- WhatsApp direct integration
- Click-to-call support
- Email contact integration

---

## 🧰 Tech Stack

**Frontend**
- HTML5
- CSS3
- JavaScript (Vanilla)
- GSAP + ScrollTrigger
- Lenis Smooth Scroll
- Font Awesome

**Backend**
- PHP 8+
- PHPMailer (SMTP email system)

**Email Provider**
- Gmail SMTP (App Password required)

---

## 📁 Project Structure
western-ridge-workforce-hub/
│
├── index.php
├── sendmail.php
├── config.php
├── composer.json
├── composer.lock
├── requirements.txt
│
├── vendor/
│
├── src/
│ ├── logo.png
│ ├── favicon.ico
│ └── images/
│
├── email_templates/
│ ├── admin_mail.php
│ └── customer_mail.php
│
├── css/
│ └── styles.css
│
├── js/
│ └── main.js
│
└── assets/
└── fonts/

---

## ⚙️ Installation & Setup Guide

### 1. Clone Repository
```bash
git clone https://github.com/sakib92s/westernridge-workforce-hub.git
cd westernridge-workforce-hub

2. Install PHPMailer Dependencies

Run Composer:

composer install

This creates /vendor folder automatically.

3. Configure SMTP Settings

Open config.php and update:

define('SMTP_USERNAME', 'yourgmail@gmail.com');
define('SMTP_PASSWORD', 'your-app-password');
define('COMPANY_EMAIL', 'yourcompanyemail@gmail.com');
define('SITE_URL', 'https://yourdomain.com');
🔐 Gmail App Password Setup (Important)

Gmail normal password will NOT work.

Steps:
Go to Google Account → Security
Enable 2-Step Verification
Search: “App Passwords”
Select:
App: Mail
Device: Other (Website)
Generate password
Copy 16-character password
Paste into SMTP_PASSWORD
📧 How Email System Works
Step 1: User submits form

Form → sendmail.php

Step 2: Backend processing
Validates input
Sanitizes data
Loads email templates
Step 3: Emails sent
Admin Email
New enquiry notification
Full customer details
Reply / WhatsApp / Call buttons
Customer Email
Auto thank you message
Enquiry summary
Company branding + contact info

🧠 System Architecture
Static frontend (fast loading landing page)
PHP backend only for email handling
No database dependency
Stateless enquiry system (session-based alerts)
🚀 Future Upgrades (Recommended)
Admin dashboard for enquiry tracking
Database storage (MySQL)
CRM pipeline (lead status tracking)
PDF quotation generator
WhatsApp API automation

## 📜 License

This project is developed for internal use by Western Ridge Expert Services LLP.
All rights reserved.
