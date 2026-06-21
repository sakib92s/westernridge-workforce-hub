/* =========================================================
   Western Ridge Expert Services LLP — Premium Experience
   GSAP ScrollTrigger • Lenis • Photography-led parallax
   ========================================================= */
(() => {
  "use strict";

  /* ---------- 0. SCROLL RESTORATION (always start at Hero on refresh) ----------
     Belt-and-braces backup to the inline <head> script in index.php, which already
     runs this synchronously before first paint. Re-applied here so it also covers
     bfcache restores (Safari/Firefox back-forward navigation). */
  if ("scrollRestoration" in history) {
    history.scrollRestoration = "manual";
  }
  window.scrollTo(0, 0);

  window.addEventListener("beforeunload", () => {
    window.scrollTo(0, 0);
  });

  const prefersReduced = matchMedia("(prefers-reduced-motion: reduce)").matches;
  gsap.registerPlugin(ScrollTrigger);
  gsap.config({ force3D: true });

  /* ---------- 1. LENIS SMOOTH SCROLL ---------- */
  let lenis = null;
  if (!prefersReduced && window.Lenis) {
    lenis = new Lenis({ lerp: 0.08, smoothWheel: true });
    lenis.on("scroll", ScrollTrigger.update);
    gsap.ticker.add((t) => lenis.raf(t * 1000));
    gsap.ticker.lagSmoothing(0);
  }

  // Catches Safari/Firefox bfcache restores (back/forward navigation, some refresh cases)
  window.addEventListener("pageshow", (e) => {
    if (e.persisted) {
      window.scrollTo(0, 0);
      if (lenis) lenis.scrollTo(0, { immediate: true, force: true });
      ScrollTrigger.refresh();
    }
  });

  /* ---------- 2. PRELOADER → HERO ENTRANCE ---------- */
  const preloader = document.getElementById("preloader");
  const intro = gsap.timeline({
    onComplete: () => {
      preloader.remove();
      // Always force scroll to top after preloader
      window.scrollTo(0, 0);
      if (lenis) lenis.scrollTo(0, { immediate: true, force: true });
      ScrollTrigger.refresh();
    },
  });

  intro
    .to(".preloader-word", {
      opacity: 1, letterSpacing: "0.55em",
      duration: 1.1, ease: "power2.out",
    })
    .to(preloader, {
      yPercent: -100, duration: 1, ease: "power4.inOut", delay: 0.2,
    })
    .from(".hero [data-line]", {
      yPercent: 110, duration: 1.2, stagger: 0.12, ease: "power4.out",
    }, "-=0.55")
    .from(".hero-bg img", {
      scale: 1.18, duration: 2.2, ease: "power2.out",
    }, "<")
    .from(".nav", {
      autoAlpha: 0, y: -16, duration: 0.8, ease: "power2.out",
    }, "-=1.4");

  if (prefersReduced) {
    intro.progress(1).kill();
    gsap.set([".hero [data-line]", ".nav"], { clearProps: "all" });
  }

  /* ---------- 3. NAV STATE ---------- */
  // const nav = document.getElementById("nav");
  // ScrollTrigger.create({
  //   start: 60,
  //   onUpdate: (self) => nav.classList.toggle("is-scrolled", self.scroll() > 60),
  // });

  /* ---------- 4. PARALLAX LAYERS ---------- */
  gsap.utils.toArray("[data-parallax]").forEach((el) => {
    const speed = parseFloat(el.dataset.parallax) || 0.2;
    gsap.fromTo(el, { yPercent: -speed * 22 }, {
      yPercent: speed * 22,
      ease: "none",
      scrollTrigger: {
        trigger: el.closest("section") || el,
        start: "top bottom",
        end: "bottom top",
        scrub: true,
      },
    });
  });

  /* ---------- 5. STATEMENT — word-by-word scrub ---------- */
  const statement = document.querySelector("[data-words]");
  if (statement) {
    statement.innerHTML = statement.textContent
      .trim()
      .split(/\s+/)
      .map((w) => `<span class="w">${w}</span>`)
      .join(" ");
    gsap.to(statement.querySelectorAll(".w"), {
      opacity: 1,
      stagger: 0.06,
      ease: "none",
      scrollTrigger: {
        trigger: statement,
        start: "top 75%",
        end: "bottom 45%",
        scrub: true,
      },
    });
  }

  /* ---------- 6. GENERIC REVEALS ---------- */
  gsap.utils.toArray("[data-reveal]").forEach((el) => {
    gsap.from(el, {
      y: 50, autoAlpha: 0, duration: 1.1, ease: "power3.out",
      scrollTrigger: { trigger: el, start: "top 86%" },
    });
  });

  gsap.utils.toArray("[data-stagger]").forEach((group) => {
    gsap.from(group.children, {
      y: 40, autoAlpha: 0, duration: 0.9, stagger: 0.1, ease: "power2.out",
      scrollTrigger: { trigger: group, start: "top 82%" },
    });
  });

  /* ---------- 7. IMAGE REVEAL ---------- */
  gsap.utils.toArray("[data-reveal-img]").forEach((row) => {
    const media = row.querySelector(".service-media");
    const img = media.querySelector("img");
    const tl = gsap.timeline({
      scrollTrigger: { trigger: row, start: "top 75%" },
    });
    tl.from(media, {
      clipPath: "inset(0 0 100% 0)",
      duration: 1.3, ease: "power4.inOut",
    }).from(img, {
      scale: 1.3, duration: 1.6, ease: "power3.out",
    }, "<");
  });

  /* ---------- 8. STAT COUNTERS ---------- */
  gsap.utils.toArray("[data-count]").forEach((el) => {
    const target = +el.dataset.count;
    const obj = { v: 0 };
    ScrollTrigger.create({
      trigger: el,
      start: "top 85%",
      once: true,
      onEnter: () =>
        gsap.to(obj, {
          v: target, duration: 1.8, ease: "power2.out",
          onUpdate: () => (el.textContent = Math.round(obj.v).toLocaleString("en-IN")),
        }),
    });
  });

  /* ---------- 9. TESTIMONIALS — premium horizontal scrub (pin + cards fade/scale) ----------
     Fully scroll-driven, Apple/Awwwards-style: no drag, no overflow-x, no scrollbar,
     no snapping, no infinite loop. Vertical scroll position alone drives the
     horizontal translateX on the track via a pinned, scrubbed ScrollTrigger.

     Scoped with ScrollTrigger.matchMedia() to min-width:601px — this matches the
     CSS breakpoint where testimonials stack vertically on mobile (max-width:600px).
     Without this guard the pin would still fire on mobile and fight the stacked
     layout (which forces transform:none), effectively locking vertical scroll.
     matchMedia also auto-reverts everything (transforms, ScrollTriggers) when the
     viewport crosses the breakpoint, so resizing/rotating never leaves a stuck state. */
  ScrollTrigger.matchMedia({
    "(min-width: 601px)": function () {
      const testimonialsSection = document.querySelector(".testimonials");
      const track = document.getElementById("tTrack");
      const cards = gsap.utils.toArray(".t-card");

      if (!testimonialsSection || !track || !cards.length) return;

      // How far the track needs to travel left so the last card's edge
      // lands flush with the section's edge. Clamped to 0 so on very wide
      // viewports (where every card already fits) nothing shifts the wrong way.
      const getDistance = () => {
        const sectionWidth = testimonialsSection.clientWidth;
        const trackScrollWidth = track.scrollWidth;
        return Math.min(0, -(trackScrollWidth - sectionWidth));
      };

      const horizontalTween = gsap.to(track, {
        x: getDistance,
        force3D: true,
        ease: "none",
        scrollTrigger: {
          trigger: testimonialsSection,
          start: "top top",
          end: () => `+=${Math.abs(getDistance())}`,
          scrub: 1.2,
          pin: true,
          anticipatePin: 1,
          invalidateOnRefresh: true,
        },
      });

      // Subtle fade/scale as each card enters, peaks, and leaves — tied to the
      // horizontal containerAnimation so it stays perfectly in sync with the scrub.
      cards.forEach((card) => {
        gsap.fromTo(
          card,
          { opacity: 0.55, scale: 0.95 },
          {
            keyframes: [
              { opacity: 0.55, scale: 0.95, duration: 0.35 },
              { opacity: 1, scale: 1, duration: 0.3 },
              { opacity: 0.55, scale: 0.95, duration: 0.35 },
            ],
            ease: "none",
            scrollTrigger: {
              trigger: card,
              containerAnimation: horizontalTween,
              start: "left 100%",
              end: "right 0%",
              scrub: true,
            },
          }
        );
      });

      // Recalculate the dynamic distance/end on resize (debounced so continuous
      // window resizing never spams ScrollTrigger.refresh and causes jitter).
      let resizeTimer;
      const onResize = () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => ScrollTrigger.refresh(), 200);
      };
      window.addEventListener("resize", onResize);

      // Cleanup when leaving this breakpoint (matchMedia reverts the GSAP/ScrollTrigger
      // state automatically; this just removes the plain DOM listener it doesn't own).
      return () => {
        window.removeEventListener("resize", onResize);
        clearTimeout(resizeTimer);
      };
    },
  });

  /* ---------- 10. ANCHOR NAVIGATION ---------- */
  document.querySelectorAll('a[href^="#"]').forEach((a) => {
    a.addEventListener("click", (e) => {
      const el = document.querySelector(a.getAttribute("href"));
      if (!el) return;
      e.preventDefault();
      lenis
        ? lenis.scrollTo(el, { offset: -70, duration: 1.4 })
        : el.scrollIntoView({ behavior: "smooth" });
    });
  });
})();
  /* ---------- 11. MOBILE NAV TOGGLE ---------- */
  const hamburger = document.getElementById("hamburger");
  const navLinks = document.getElementById("navLinks");
  if (hamburger && navLinks) {
    hamburger.addEventListener("click", () => {
      navLinks.classList.toggle("open");
    });

    // Close mobile nav when a link is clicked
    navLinks.querySelectorAll("a").forEach(link => {
      link.addEventListener("click", () => {
        navLinks.classList.remove("open");
      });
    });
  }