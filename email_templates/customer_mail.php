<?php
/**
 * Customer thank-you email – premium enterprise redesign
 * Variables available:
 * $safe_name, $safe_email, $safe_phone, $safe_company,
 * $safe_service, $submission_time
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thank You – <?= COMPANY_NAME ?></title>
</head>
<body style="margin:0; padding:0; background-color:#0a0a0b; font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#0a0a0b; padding:50px 0;">
    <tr>
      <td align="center">
        <table width="640" cellpadding="0" cellspacing="0" style="max-width:640px; background-color:#111114; border-radius:20px; overflow:hidden; border:1px solid rgba(244,243,240,0.08); box-shadow:0 8px 32px rgba(0,0,0,0.4);">
          
          <!-- ========== HEADER ========== -->
          <tr>
            <td style="background-color:#0d1821; background-image:linear-gradient(135deg, #0d1821 0%, #0f1d2e 100%); padding:40px 32px; text-align:center; border-bottom:3px solid #d8b98a;">
              <img src="<?= LOGO_URL ?>" alt="<?= COMPANY_NAME ?>" style="height:64px; margin-bottom:20px; display:block; margin-left:auto; margin-right:auto;">
              <h1 style="margin:0; font-size:28px; font-weight:700; color:#f4f3f0; letter-spacing:-0.5px;">Thank You, <?= $safe_name ?></h1>
              <p style="margin:8px 0 0; font-size:14px; color:#d8b98a; font-weight:500; letter-spacing:1px;">Your enquiry has been successfully received</p>
            </td>
          </tr>
          
          <!-- ========== MESSAGE ========== -->
          <tr>
            <td style="padding:32px 32px 20px;">
              <p style="margin:0 0 20px; font-size:15px; color:rgba(244,243,240,0.85); line-height:1.6;">
                We appreciate your interest in Western Ridge Expert Services LLP. Our team is already reviewing your requirements for <strong style="color:#d8b98a;"><?= $safe_service ?></strong> and will be in touch within <strong style="color:#f4f3f0;">4 business hours</strong>.
              </p>
              
              <!-- ========== PROGRESS TIMELINE ========== -->
              <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:20px;">
                <tr>
                  <td style="padding:16px 20px; background-color:#1a1a1e; border-radius:10px; margin-bottom:8px; border:1px solid rgba(255,255,255,0.06);">
                    <table width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="28" style="font-size:20px; vertical-align:middle;">✅</td>
                        <td style="font-size:14px; color:#f4f3f0; font-weight:600; padding-left:12px;">Enquiry Received</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr><td style="height:6px;"></td></tr>
                <tr>
                  <td style="padding:16px 20px; background-color:#1a1a1e; border-radius:10px; border:1px solid rgba(255,255,255,0.06);">
                    <table width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="28" style="font-size:20px; vertical-align:middle;">⏳</td>
                        <td style="font-size:14px; color:#f4f3f0; font-weight:600; padding-left:12px;">Under Review</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr><td style="height:6px;"></td></tr>
                <tr>
                  <td style="padding:16px 20px; background-color:#1a1a1e; border-radius:10px; border:1px solid rgba(255,255,255,0.06);">
                    <table width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="28" style="font-size:20px; vertical-align:middle;">👥</td>
                        <td style="font-size:14px; color:#f4f3f0; font-weight:600; padding-left:12px;">Team Assignment</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr><td style="height:6px;"></td></tr>
                <tr>
                  <td style="padding:16px 20px; background-color:#1a1a1e; border-radius:10px; border:1px solid rgba(216,185,138,0.2);">
                    <table width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="28" style="font-size:20px; vertical-align:middle;">🚀</td>
                        <td style="font-size:14px; color:#d8b98a; font-weight:700; padding-left:12px;">Response within 4 Business Hours</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          
          <!-- ========== ENQUIRY SUMMARY ========== -->
          <tr>
            <td style="padding:0 32px 20px;">
              <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#1a1a1e; border-radius:14px; border:1px solid rgba(255,255,255,0.06);">
                <tr>
                  <td style="padding:24px;">
                    <p style="margin:0 0 16px; font-size:15px; color:#d8b98a; font-weight:700; text-transform:uppercase; letter-spacing:1px;">📋 Your Enquiry Summary</p>
                    <table width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                        <td style="padding:6px 0; width:32px;">👤</td>
                        <td style="padding:6px 0; font-size:14px; color:rgba(244,243,240,0.5); width:70px;">Name</td>
                        <td style="padding:6px 0; font-size:14px; color:#f4f3f0; font-weight:600;"><?= $safe_name ?></td>
                      </tr>
                      <tr>
                        <td>📧</td>
                        <td style="font-size:14px; color:rgba(244,243,240,0.5);">Email</td>
                        <td style="font-size:14px; color:#f4f3f0;"><?= $safe_email ?></td>
                      </tr>
                      <tr>
                        <td>📱</td>
                        <td style="font-size:14px; color:rgba(244,243,240,0.5);">Phone</td>
                        <td style="font-size:14px; color:#f4f3f0;"><?= $safe_phone ?></td>
                      </tr>
                      <?php if (!empty($safe_company)): ?>
                      <tr>
                        <td>🏢</td>
                        <td style="font-size:14px; color:rgba(244,243,240,0.5);">Company</td>
                        <td style="font-size:14px; color:#f4f3f0;"><?= $safe_company ?></td>
                      </tr>
                      <?php endif; ?>
                      <tr>
                        <td>🛠</td>
                        <td style="font-size:14px; color:rgba(244,243,240,0.5);">Service</td>
                        <td style="font-size:14px; color:#d8b98a; font-weight:700;"><?= $safe_service ?></td>
                      </tr>
                      <tr>
                        <td>🕒</td>
                        <td style="font-size:14px; color:rgba(244,243,240,0.5);">Time</td>
                        <td style="font-size:14px; color:rgba(244,243,240,0.7);"><?= $submission_time ?></td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          
          <!-- ========== WHY CHOOSE US ========== -->
          <tr>
            <td style="padding:0 32px 20px;">
              <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#1a1a1e; border-radius:14px; border:1px solid rgba(255,255,255,0.06);">
                <tr>
                  <td style="padding:24px;">
                    <p style="margin:0 0 16px; font-size:15px; color:#d8b98a; font-weight:700; text-transform:uppercase; letter-spacing:1px;">⭐ Why Choose Western Ridge</p>
                    <table width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                        <td style="padding:6px 0; width:24px; font-size:16px;">✅</td>
                        <td style="font-size:14px; color:#f4f3f0;">Professional Workforce</td>
                        <td width="24" style="padding:6px 0; font-size:16px;">✅</td>
                        <td style="font-size:14px; color:#f4f3f0;">Statutory Compliance</td>
                      </tr>
                      <tr>
                        <td style="padding:6px 0;">✅</td>
                        <td style="font-size:14px; color:#f4f3f0;">Verified Staff</td>
                        <td style="padding:6px 0;">✅</td>
                        <td style="font-size:14px; color:#f4f3f0;">Fast Deployment</td>
                      </tr>
                      <tr>
                        <td style="padding:6px 0;">✅</td>
                        <td style="font-size:14px; color:#f4f3f0;" colspan="3">Transparent Communication</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          
          <!-- ========== CONTACT CARD ========== -->
          <tr>
            <td style="padding:0 32px 20px;">
              <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#1a1a1e; border-radius:14px; border:1px solid rgba(255,255,255,0.06);">
                <tr>
                  <td style="padding:24px;">
                    <p style="margin:0 0 16px; font-size:15px; color:#d8b98a; font-weight:700; text-transform:uppercase; letter-spacing:1px;">📞 Contact Us</p>
                    <table width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                        <td style="padding:6px 0; width:24px;">🌐</td>
                        <td style="padding:6px 0; font-size:14px; color:#f4f3f0;"><a href="<?= SITE_URL ?>" style="color:#f4f3f0; text-decoration:none;"><?= SITE_URL ?></a></td>
                      </tr>
                      <tr>
                        <td>📧</td>
                        <td style="font-size:14px; color:#f4f3f0;"><a href="mailto:<?= COMPANY_EMAIL ?>" style="color:#f4f3f0; text-decoration:none;"><?= COMPANY_EMAIL ?></a></td>
                      </tr>
                      <tr>
                        <td>📞</td>
                        <td style="font-size:14px; color:#f4f3f0;"><a href="tel:<?= COMPANY_PHONE ?>" style="color:#f4f3f0; text-decoration:none;"><?= COMPANY_PHONE ?></a></td>
                      </tr>
                      <tr>
                        <td>💬</td>
                        <td style="font-size:14px; color:#f4f3f0;"><a href="https://wa.me/<?= COMPANY_WHATSAPP ?>" style="color:#f4f3f0; text-decoration:none;">WhatsApp Chat</a></td>
                      </tr>
                      <tr>
                        <td>📍</td>
                        <td style="font-size:14px; color:rgba(244,243,240,0.7);">Pune, Maharashtra, India</td>
                      </tr>
                    </table>
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
                    <p style="margin:0; font-size:11px; color:rgba(244,243,240,0.4); line-height:1.5;">
                      This is an automated acknowledgement. Please do not reply directly to this email.
                    </p>
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