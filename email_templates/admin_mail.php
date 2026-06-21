<?php
/**
 * Admin notification email – premium enterprise design
 * Variables available:
 * $safe_name, $safe_email, $safe_phone, $safe_company,
 * $safe_service, $nl2br_msg, $submission_time
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Enquiry – <?= COMPANY_NAME ?></title>
</head>
<body style="margin:0; padding:0; background-color:#0a0a0b; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">
  <!-- Outer background -->
  <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#0a0a0b; padding:50px 0;">
    <tr>
      <td align="center">
        <!-- Main container -->
        <table width="640" cellpadding="0" cellspacing="0" style="max-width:640px; background-color:#111114; border-radius:20px; overflow:hidden; border:1px solid rgba(244,243,240,0.08); box-shadow:0 8px 32px rgba(0,0,0,0.4);">
          
          <!-- ========== HEADER ========== -->
          <tr>
            <td style="background-color:#0d1821; background-image:linear-gradient(135deg, #0d1821 0%, #0f1d2e 100%); padding:40px 32px; text-align:center; border-bottom:3px solid #d8b98a;">
              <img src="<?= LOGO_URL ?>" alt="<?= COMPANY_NAME ?>" style="height:64px; margin-bottom:20px; display:block; margin-left:auto; margin-right:auto;">
              <h1 style="margin:0; font-size:28px; font-weight:700; color:#f4f3f0; letter-spacing:-0.5px; line-height:1.2;"><?= COMPANY_NAME ?></h1>
              <p style="margin:8px 0 0; font-size:14px; color:#d8b98a; font-weight:500; text-transform:uppercase; letter-spacing:2px;">Enterprise Workforce Solutions</p>
            </td>
          </tr>
          
          <!-- Status badge -->
          <tr>
            <td style="padding:28px 32px 0; text-align:center;">
              <span style="display:inline-block; background-color:#d8b98a; color:#0a0a0b; font-weight:700; font-size:13px; text-transform:uppercase; letter-spacing:1.5px; padding:10px 28px; border-radius:50px;">🚨 New Enquiry Received</span>
            </td>
          </tr>
          
          <!-- ========== CUSTOMER DETAILS CARDS ========== -->
          <tr>
            <td style="padding:28px 32px 20px;">
              <!-- Card: Customer Info -->
              <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#1a1a1e; border-radius:14px; border:1px solid rgba(255,255,255,0.06); margin-bottom:16px;">
                <tr>
                  <td style="padding:24px;">
                    <!-- Table of fields -->
                    <table width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                        <td style="padding:8px 0; width:32px; vertical-align:middle;">
                          <span style="font-size:18px;">👤</span>
                        </td>
                        <td style="padding:8px 0; font-size:15px; color:rgba(244,243,240,0.5); width:90px; font-weight:600;">Name</td>
                        <td style="padding:8px 0; font-size:16px; color:#f4f3f0; font-weight:600;"><?= $safe_name ?></td>
                      </tr>
                      <tr>
                        <td style="padding:8px 0;">
                          <span style="font-size:18px;">📧</span>
                        </td>
                        <td style="padding:8px 0; font-size:15px; color:rgba(244,243,240,0.5); font-weight:600;">Email</td>
                        <td style="padding:8px 0; font-size:16px; color:#f4f3f0; font-weight:600;">
                          <a href="mailto:<?= $safe_email ?>" style="color:#d8b98a; text-decoration:none;"><?= $safe_email ?></a>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding:8px 0;">
                          <span style="font-size:18px;">📱</span>
                        </td>
                        <td style="padding:8px 0; font-size:15px; color:rgba(244,243,240,0.5); font-weight:600;">Phone</td>
                        <td style="padding:8px 0; font-size:16px; color:#f4f3f0; font-weight:600;">
                          <a href="tel:<?= $safe_phone ?>" style="color:#f4f3f0; text-decoration:none;"><?= $safe_phone ?></a>
                        </td>
                      </tr>
                      <?php if (!empty($safe_company)): ?>
                      <tr>
                        <td style="padding:8px 0;">
                          <span style="font-size:18px;">🏢</span>
                        </td>
                        <td style="padding:8px 0; font-size:15px; color:rgba(244,243,240,0.5); font-weight:600;">Company</td>
                        <td style="padding:8px 0; font-size:16px; color:#f4f3f0; font-weight:600;"><?= $safe_company ?></td>
                      </tr>
                      <?php endif; ?>
                      <tr>
                        <td style="padding:8px 0;">
                          <span style="font-size:18px;">🛠</span>
                        </td>
                        <td style="padding:8px 0; font-size:15px; color:rgba(244,243,240,0.5); font-weight:600;">Service</td>
                        <td style="padding:8px 0; font-size:16px; color:#d8b98a; font-weight:700;"><?= $safe_service ?></td>
                      </tr>
                      <tr>
                        <td style="padding:8px 0;">
                          <span style="font-size:18px;">🕒</span>
                        </td>
                        <td style="padding:8px 0; font-size:15px; color:rgba(244,243,240,0.5); font-weight:600;">Time</td>
                        <td style="padding:8px 0; font-size:16px; color:rgba(244,243,240,0.7);"><?= $submission_time ?></td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              
              <!-- Requirement details card -->
              <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#1e1e23; border-radius:14px; border:1px solid rgba(216,185,138,0.2);">
                <tr>
                  <td style="padding:24px;">
                    <p style="margin:0 0 12px; font-size:14px; color:#d8b98a; text-transform:uppercase; letter-spacing:1px; font-weight:700;">💬 Requirement Details</p>
                    <p style="margin:0; font-size:15px; color:rgba(244,243,240,0.85); line-height:1.6;"><?= $nl2br_msg ?></p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          
          <!-- ========== ACTION BUTTONS ========== -->
          <tr>
            <td style="padding:0 32px 28px;">
              <!-- Buttons table -->
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="padding:6px;">
                    <!-- Reply button (mailto) -->
                    <a href="mailto:<?= $safe_email ?>" style="display:block; background-color:#f4f3f0; color:#0a0a0b; text-decoration:none; padding:14px 18px; border-radius:12px; font-weight:700; font-size:14px; text-align:center; margin-bottom:6px;">↩️ Reply to Customer</a>
                  </td>
                  <td width="8"></td>
                  <td style="padding:6px;">
                    <!-- Call button -->
                    <a href="tel:<?= $safe_phone ?>" style="display:block; background-color:#d8b98a; color:#0a0a0b; text-decoration:none; padding:14px 18px; border-radius:12px; font-weight:700; font-size:14px; text-align:center; margin-bottom:6px;">📞 Call Customer</a>
                  </td>
                </tr>
                <tr>
                  <td style="padding:6px;">
                    <!-- WhatsApp button -->
                    <a href="https://wa.me/<?= COMPANY_WHATSAPP ?>" style="display:block; background-color:#25D366; color:#ffffff; text-decoration:none; padding:14px 18px; border-radius:12px; font-weight:700; font-size:14px; text-align:center;">💬 WhatsApp</a>
                  </td>
                  <td width="8"></td>
                  <td style="padding:6px;">
                    <!-- Website button -->
                    <a href="<?= SITE_URL ?>" style="display:block; background-color:#1a1a1e; color:#f4f3f0; border:1px solid rgba(255,255,255,0.15); text-decoration:none; padding:14px 18px; border-radius:12px; font-weight:700; font-size:14px; text-align:center;">🌐 Visit Website</a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          
          <!-- ========== FOOTER ========== -->
          <tr>
            <td style="background-color:#0a0a0b; padding:30px 32px; text-align:center; border-top:1px solid rgba(255,255,255,0.06);">
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="padding-bottom:16px;">
                    <img src="<?= LOGO_URL ?>" alt="<?= COMPANY_NAME ?>" style="height:36px; margin-bottom:12px;">
                    <h3 style="margin:0 0 4px; font-size:16px; color:#f4f3f0; font-weight:700;"><?= COMPANY_NAME ?></h3>
                    <p style="margin:0; font-size:12px; color:rgba(244,243,240,0.5);">Enterprise Workforce Solutions</p>
                  </td>
                </tr>
                <tr>
                  <td style="padding-bottom:16px;">
                    <hr style="border:none; border-top:1px solid rgba(255,255,255,0.08); margin:0 0 16px;">
                    <p style="margin:0 0 8px; font-size:12px; color:rgba(244,243,240,0.4);">📧 <?= COMPANY_EMAIL ?> &nbsp;|&nbsp; 📞 <?= COMPANY_PHONE ?></p>
                    <p style="margin:0; font-size:12px; color:rgba(244,243,240,0.4);">🌐 <a href="<?= SITE_URL ?>" style="color:rgba(244,243,240,0.4); text-decoration:none;"><?= SITE_URL ?></a></p>
                  </td>
                </tr>
                <tr>
                  <td style="font-size:11px; color:rgba(244,243,240,0.3);">
                    &copy; <?= date('Y') ?> <?= COMPANY_NAME ?>. All rights reserved.
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          
        </table>
      </td>
    </tr>
  </table>
</body>
</html>