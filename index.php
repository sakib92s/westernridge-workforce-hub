<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script>
    (function () {
      // Always start every page load/refresh from the Hero section.
      // Runs synchronously, before the rest of the page parses/paints,
      // so there is no visible jump or flicker and the preloader is unaffected.
      if ("scrollRestoration" in history) {
        history.scrollRestoration = "manual";
      }
      if (window.location.hash) {
        history.replaceState(null, document.title, window.location.pathname + window.location.search);
      }
      window.scrollTo(0, 0);
    })();
  </script>
  <title>Western Ridge Expert Services LLP — India's Trusted Workforce Partner</title>
  <link rel="icon" type="image/x-icon" href="src/logo.png">
  <meta name="description" content="Enterprise workforce solutions. ISO certified, MSME registered, Labour licensed manpower partner." />
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700,900&f[]=general-sans@400,500,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="css/styles.css" />     <!-- updated path -->
</head>
<body>
  <!-- Preloader -->
  <div class="preloader" id="preloader">
    <span class="preloader-word">Western Ridge</span>
  </div>

  <!-- Navigation -->
  <header class="nav" id="nav">
    <a href="#hero" class="nav-logo">
      <img src="src/logo.png" alt="Western Ridge" class="nav-logo-img" /> Western Ridge<span>.</span>
    </a>
    <nav class="nav-links" id="navLinks">
      <a href="#services">Services</a>
      <a href="#about">About</a>
      <a href="#trust">Credentials</a>
      <a href="#clients">Clients</a>
      <a href="#testimonials">Testimonials</a>
      <a href="#contact">Contact</a>
      <a href="#contact" class="nav-cta">Get Quote</a>
    </nav>
    <button class="hamburger" id="hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </header>

  <main>

    <!-- HERO -->
    <section class="hero" id="hero">
      <div class="hero-bg" data-parallax="0.3">
        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=2400&auto=format&fit=crop" alt="" />
      </div>
      <div class="hero-overlay"></div>
      <div class="hero-content">
        <p class="hero-eyebrow" data-line>Western Ridge Expert Services LLP</p>
        <h1 class="hero-title">
          <span class="line-mask"><span data-line>India's Trusted</span></span>
          <span class="line-mask"><span data-line>Workforce Partner</span></span>
        </h1>
        <p class="hero-sub" data-line>Enterprise manpower solutions, engineered with the discipline of the mountains we come from.</p>
        <div class="hero-actions" data-line>
          <a href="#services" class="btn btn-light">Explore Services</a>
          <a href="#contact" class="btn btn-ghost">Get in Touch</a>
        </div>
      </div>
    </section>

    <!-- INTRO STATEMENT -->
    <section class="statement">
      <h2 class="statement-text" data-words>
        We deploy skilled, verified and managed workforce for India's most demanding industries — at enterprise scale.
      </h2>
    </section>

    <!-- SERVICES -->
    <section class="services" id="services">
      <div class="section-head">
        <p class="section-eyebrow" data-reveal>What we do</p>
        <h2 class="section-title" data-reveal>Services</h2>
      </div>

      <article class="service-row" data-reveal-img>
        <div class="service-media">
          <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=1800&auto=format&fit=crop" alt="Industrial manpower" />
        </div>
        <div class="service-info">
          <span class="service-index">01</span>
          <h3>Industrial Manpower</h3>
          <p>Skilled and semi-skilled workforce for manufacturing, plants and heavy industry — fully compliant, fully managed.</p>
        </div>
      </article>

      <article class="service-row is-flipped" data-reveal-img>
        <div class="service-media">
          <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1800&auto=format&fit=crop" alt="Facility staffing" />
        </div>
        <div class="service-info">
          <span class="service-index">02</span>
          <h3>Facility &amp; Site Staffing</h3>
          <p>Housekeeping, security support and site operations teams that keep enterprise facilities running without friction.</p>
        </div>
      </article>

      <article class="service-row" data-reveal-img>
        <div class="service-media">
          <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1800&auto=format&fit=crop" alt="Contract workforce" />
        </div>
        <div class="service-info">
          <span class="service-index">03</span>
          <h3>Contract Workforce Management</h3>
          <p>End-to-end payroll, statutory compliance and workforce administration under one accountable partner.</p>
        </div>
      </article>

      <article class="service-row is-flipped" data-reveal-img>
        <div class="service-media">
          <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=1800&auto=format&fit=crop" alt="Security services" />
        </div>
        <div class="service-info">
          <span class="service-index">04</span>
          <h3>Security &amp; Surveillance</h3>
          <p>Trained security guards, CCTV monitoring, and access control for corporate, industrial and residential sites.</p>
        </div>
      </article>

     <article class="service-row" data-reveal-img>
    <div class="service-media">
        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=1800&auto=format&fit=crop"
             alt="Professional Cleaning and Sanitation Services" />
    </div>
    <div class="service-info">
        <span class="service-index">05</span>
        <h3>Cleaning &amp; Sanitation</h3>
        <p>
            Industrial-grade cleaning, disinfection and waste management
            for manufacturing plants, hospitals, offices and commercial
            campuses with trained housekeeping professionals.
        </p>
    </div>
</article>

      <article class="service-row is-flipped" data-reveal-img>
        <div class="service-media">
          <img src="https://images.unsplash.com/photo-1573497620053-ea5300f94f21?q=80&w=1800&auto=format&fit=crop" alt="Technical staffing" />
        </div>
        <div class="service-info">
          <span class="service-index">06</span>
          <h3>Highly Skilled Technical Staff</h3>
          <p>Engineers, supervisors, quality controllers and specialised operators for critical industrial functions.</p>
        </div>
      </article>
    </section>

    <!-- WHY WESTERN RIDGE -->
    <section class="why-section">
      <div class="section-head">
        <p class="section-eyebrow" data-reveal>The Western Ridge Difference</p>
        <h2 class="section-title" data-reveal>Why Choose Us</h2>
      </div>
      <div class="why-grid" data-stagger>
        <div class="glass-card why-card">
          <div class="why-icon"><i class="fa-solid fa-shield-halved"></i></div>
          <h3>100% Statutory Compliance</h3>
          <p>PF, ESIC, Labour Laws, Contract Labour Act — fully managed with zero audit flags since inception.</p>
        </div>
        <div class="glass-card why-card">
          <div class="why-icon"><i class="fa-solid fa-user-check"></i></div>
          <h3>Verified &amp; Trained Personnel</h3>
          <p>Background checks, police clearance, and pre‑deployment skill training for every single worker.</p>
        </div>
        <div class="glass-card why-card">
          <div class="why-icon"><i class="fa-solid fa-rocket"></i></div>
          <h3>Rapid Deployment</h3>
          <p>Large pre‑trained pool enables deployment of 50‑500+ workers within 24‑72 hours across India.</p>
        </div>
        <div class="glass-card why-card">
          <div class="why-icon"><i class="fa-solid fa-map-location-dot"></i></div>
          <h3>Pan‑India Reach</h3>
          <p>Active operations in 18+ states with local relationship managers and uniform national standards.</p>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section class="about" id="about">
      <div class="about-media" data-parallax="0.15">
        <img src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606?q=80&w=1800&auto=format&fit=crop" alt="Western ridgeline at dawn" />
      </div>
      <div class="about-copy">
        <p class="section-eyebrow" data-reveal>Who we are</p>
        <h2 data-reveal>Built on Western Ridge discipline.<br />Run on enterprise standards.</h2>
        <p data-reveal>From Maharashtra's industrial heartland, we partner with enterprises that demand reliability — providing verified manpower, transparent compliance and operational accountability.</p>
        <div class="stats" data-stagger>
          <div class="stat"><span class="stat-num" data-count="1200">0</span><span class="stat-label">Workforce Deployed</span></div>
          <div class="stat"><span class="stat-num" data-count="85">0</span><span class="stat-label">Enterprise Clients</span></div>
          <div class="stat"><span class="stat-num" data-count="12">0</span><span class="stat-label">Industries Served</span></div>
        </div>
      </div>
    </section>

    <!-- STRENGTHS -->
    <section class="strengths">
      <div class="section-head">
        <p class="section-eyebrow" data-reveal>Our DNA</p>
        <h2 class="section-title" data-reveal>Core Strengths</h2>
      </div>
      <div class="strengths-grid" data-stagger>
        <div class="strength-card">
          <span class="strength-num">01</span>
          <h4>Compliance‑First Approach</h4>
          <p>In‑house legal team ensures every engagement meets statutory requirements without shortcuts.</p>
        </div>
        <div class="strength-card">
          <span class="strength-num">02</span>
          <h4>Industry‑Specific Expertise</h4>
          <p>Dedicated verticals for automotive, pharma, infrastructure, IT campuses, and warehousing.</p>
        </div>
        <div class="strength-card">
          <span class="strength-num">03</span>
          <h4>Large Workforce Pool</h4>
          <p>Pre‑verified reserves allow us to scale from 20 to 2000+ workers without compromising quality.</p>
        </div>
        <div class="strength-card">
          <span class="strength-num">04</span>
          <h4>Technology‑Led Management</h4>
          <p>Attendance, payroll, and compliance dashboards provide real‑time transparency to clients.</p>
        </div>
        <div class="strength-card">
          <span class="strength-num">05</span>
          <h4>Dedicated Account Ownership</h4>
          <p>Single point of contact with a seasoned operations manager for every client relationship.</p>
        </div>
        <div class="strength-card">
          <span class="strength-num">06</span>
          <h4>Government Recognised</h4>
          <p>ISO certified, MSME registered, Startup India recognised — our credentials are your assurance.</p>
        </div>
      </div>
    </section>

    <!-- CREDENTIALS -->
    <section class="trust" id="trust">
      <div class="section-head">
        <p class="section-eyebrow" data-reveal>Why enterprises trust us</p>
        <h2 class="section-title" data-reveal>Credentials</h2>
      </div>
      <div class="trust-grid" data-stagger>
        <div class="glass-card"><h3>ISO Certified</h3><p>Process quality audited to international standards.</p></div>
        <div class="glass-card"><h3>MSME Registered</h3><p>Recognized under the Government of India MSME framework.</p></div>
        <div class="glass-card"><h3>Labour Licensed</h3><p>Fully licensed under applicable contract labour regulations.</p></div>
        <div class="glass-card"><h3>Startup India Recognized</h3><p>Certified by DPIIT under the Startup India initiative.</p></div>
      </div>
    </section>

    <!-- CLIENTS -->
    <section class="clients" id="clients">
      <div class="section-head">
        <p class="section-eyebrow" data-reveal>Trusted by</p>
        <h2 class="section-title" data-reveal>Our Clients</h2>
      </div>
      <div class="clients-slider-wrap" data-reveal>
        <div class="clients-track" id="clientsTrack">
          <!-- Set 1 -->
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-landmark"></i></div><div class="name">MSEDCL</div><div class="type">Govt. Utility</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-road"></i></div><div class="name">PWD Maharashtra</div><div class="type">Public Works</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-train-subway"></i></div><div class="name">MahaMetro</div><div class="type">Urban Rail</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-city"></i></div><div class="name">CIDCO</div><div class="type">Civic Dev.</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-water"></i></div><div class="name">Jal Jeevan Mission</div><div class="type">Govt. Scheme</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-bolt"></i></div><div class="name">Tata Power</div><div class="type">Private Utility</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-gear"></i></div><div class="name">Bharat Forge</div><div class="type">Manufacturing</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-flask"></i></div><div class="name">Thermax Ltd</div><div class="type">Industrial</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-truck-ramp-box"></i></div><div class="name">NTPC Logistics</div><div class="type">PSU</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-hospital"></i></div><div class="name">ZP Pune</div><div class="type">District Council</div></div></div>
          <!-- Duplicate set -->
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-landmark"></i></div><div class="name">MSEDCL</div><div class="type">Govt. Utility</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-road"></i></div><div class="name">PWD Maharashtra</div><div class="type">Public Works</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-train-subway"></i></div><div class="name">MahaMetro</div><div class="type">Urban Rail</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-city"></i></div><div class="name">CIDCO</div><div class="type">Civic Dev.</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-water"></i></div><div class="name">Jal Jeevan Mission</div><div class="type">Govt. Scheme</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-bolt"></i></div><div class="name">Tata Power</div><div class="type">Private Utility</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-gear"></i></div><div class="name">Bharat Forge</div><div class="type">Manufacturing</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-flask"></i></div><div class="name">Thermax Ltd</div><div class="type">Industrial</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-truck-ramp-box"></i></div><div class="name">NTPC Logistics</div><div class="type">PSU</div></div></div>
          <div class="client-logo-card"><div class="client-logo-inner"><div class="icon-row"><i class="fa-solid fa-hospital"></i></div><div class="name">ZP Pune</div><div class="type">District Council</div></div></div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="testimonials" id="testimonials">
      <div class="section-head">
        <p class="section-eyebrow" data-reveal>Client voices</p>
        <h2 class="section-title" data-reveal>Testimonials</h2>
        <p class="drag-hint" data-reveal>Keep scrolling ↓</p>
      </div>
      <div class="t-track" id="tTrack">
        <figure class="t-card">
          <blockquote>"Western Ridge transformed our plant staffing. Compliance, attendance, replacements — everything handled."</blockquote>
          <figcaption><strong>Operations Head</strong><span>Manufacturing, Pune</span></figcaption>
        </figure>
        <figure class="t-card">
          <blockquote>"The most professional manpower partner we've worked with. Enterprise-grade reporting and zero surprises."</blockquote>
          <figcaption><strong>HR Director</strong><span>FMCG, Mumbai</span></figcaption>
        </figure>
        <figure class="t-card">
          <blockquote>"Scaled our site workforce from 40 to 300 in eight weeks without a single compliance issue."</blockquote>
          <figcaption><strong>Project Manager</strong><span>Infrastructure, Nashik</span></figcaption>
        </figure>
        <figure class="t-card">
          <blockquote>"Reliable, transparent and accountable. They operate like an extension of our own team."</blockquote>
          <figcaption><strong>Plant Head</strong><span>Automotive, Chakan</span></figcaption>
        </figure>
        <figure class="t-card">
          <blockquote>"Our 2 lakh sq ft campus is managed end‑to‑end by Western Ridge. Hygiene, security, maintenance – all perfect."</blockquote>
          <figcaption><strong>Facility Head</strong><span>IT Campus, Hyderabad</span></figcaption>
        </figure>
        <figure class="t-card">
          <blockquote>"Switched after compliance issues with a previous contractor. Western Ridge cleaned up everything – now we sleep peacefully."</blockquote>
          <figcaption><strong>HR Director</strong><span>Pharmaceuticals, Pune</span></figcaption>
        </figure>
      </div>
    </section>

    <!-- CONTACT -->
    <section class="contact" id="contact">
      <div class="contact-bg" data-parallax="0.2">
        <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2400&auto=format&fit=crop" alt="" />
      </div>
      <div class="contact-inner">
        <h2 data-reveal>Get Your Customised Quote</h2>

        <!-- Alert messages (set by sendmail.php redirect) -->
        <?php if (isset($_SESSION['msg'])): ?>
          <div class="alert <?php echo $_SESSION['msg_type']; ?>">
            <?php echo $_SESSION['msg']; ?>
          </div>
          <?php unset($_SESSION['msg'], $_SESSION['msg_type']); ?>
        <?php endif; ?>

        <div class="contact-grid" data-stagger>
          <!-- Quick contact info (still visible) -->
          <a href="tel:+919881901568" class="contact-item"><span>Phone</span>+91 98819 01568</a>
          <a href="mailto:westernridgeexpertservices@outlook.com" class="contact-item"><span>Email</span>westernridgeexpertservices@outlook.com</a>
          <address class="contact-item"><span>Office</span>Pune, Maharashtra, India</address>
        </div>

        <!-- Quote Request Form -->
        <form action="sendmail.php" method="POST" class="quote-form" data-reveal>
          <div class="form-row">
            <div class="form-group">
              <label for="name">Full Name *</label>
              <input type="text" name="name" id="name" required placeholder="Your full name" />
            </div>
            <div class="form-group">
              <label for="email">Email Address *</label>
              <input type="email" name="email" id="email" required placeholder="you@company.com" />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="phone">Phone Number *</label>
              <input type="tel" name="phone" id="phone" required placeholder="+91 XXXXX XXXXX" />
            </div>
            <div class="form-group">
              <label for="company">Company Name</label>
              <input type="text" name="company" id="company" placeholder="Your organisation" />
            </div>
          </div>
          <div class="form-group">
            <label for="service">Service Required *</label>
            <select name="service" id="service" required>
              <option value="">-- Select a service --</option>
              <option value="Industrial Manpower">Industrial Manpower</option>
              <option value="Facility & Site Staffing">Facility & Site Staffing</option>
              <option value="Contract Workforce Management">Contract Workforce Management</option>
              <option value="Security & Surveillance">Security & Surveillance</option>
              <option value="Cleaning & Sanitation">Cleaning & Sanitation</option>
              <option value="Highly Skilled Technical Staff">Highly Skilled Technical Staff</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">Requirement Details *</label>
            <textarea name="message" id="message" rows="5" required placeholder="Describe your manpower requirement, number of workers, location, and any special needs..."></textarea>
          </div>
          <button type="submit" class="btn btn-light">Send Inquiry — We’ll Respond Within 4 Hours</button>
        </form>

        <!-- WhatsApp fallback -->
        <a href="https://wa.me/919881901568" class="btn btn-light btn-wa" data-reveal>Or Chat on WhatsApp</a>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="footer-top">
      <a href="#hero" class="nav-logo">Western Ridge<span>.</span></a>
      <nav class="footer-links">
        <a href="#services">Services</a>
        <a href="#about">About</a>
        <a href="#trust">Credentials</a>
        <a href="#clients">Clients</a>
        <a href="#testimonials">Testimonials</a>
        <a href="#contact">Contact</a>
      </nav>
    </div>
    <div class="footer-bottom">
      <p>© 2026 Western Ridge Expert Services LLP. All rights reserved.</p>
      <p class="credit">Designed &amp; Developed by <a href="https://www.instagram.com/sakib__.2006" target="_blank">SAKIB</a></p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
 <script src="js/main.js"></script>  
</body>
</html>