<?php
// ── Fashion page configuration — edit these to personalize ───────────
$name = "JCL";

// 3 fits per month. Put photos in an images/ folder, e.g. "images/fit1.jpg"
$outfits = [
    [
        "title"       => "TODO — Outfit 1",
        "month"       => "November 2026",
        "description" => "The pieces and why this combo works.",
        "image"       => "",
        "link"        => "https://www.instagram.com/quintisjcl/",
    ],
    [
        "title"       => "TODO — Outfit 2",
        "month"       => "November 2026",
        "description" => "The pieces and why this combo works.",
        "image"       => "",
        "link"        => "https://www.instagram.com/quintisjcl/",
    ],
    [
        "title"       => "TODO — Outfit 3",
        "month"       => "November 2026",
        "description" => "The pieces and why this combo works.",
        "image"       => "",
        "link"        => "https://www.instagram.com/quintisjcl/",
    ],
];

$marquee_items = ["JCL", "Fashion", "Fits", "Style"];

$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Favorite outfit combinations by <?= htmlspecialchars($name) ?>" />
  <title><?= htmlspecialchars($name) ?> — Fashion</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg:        #0a0a0a;
      --border:    #232323;
      --text:      #f4f4f2;
      --muted:     #7d7d7d;
      --sans:      'Space Grotesk', 'Helvetica Neue', Arial, sans-serif;
      --mono:      'DM Mono', 'Courier New', monospace;
      --transition: 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    }

    html { scroll-behavior: smooth; }
    body {
      background: var(--bg);
      color: var(--text);
      font-family: var(--sans);
      font-size: 16px;
      line-height: 1.6;
      overflow-x: hidden;
    }
    a { color: inherit; text-decoration: none; }
    ::selection { background: var(--text); color: var(--bg); }

    nav {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 100;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1.3rem 4rem;
      border-bottom: 1px solid var(--border);
      background: rgba(10, 10, 10, 0.8);
      backdrop-filter: blur(12px);
    }
    .nav-logo { font-family: var(--mono); font-size: 0.8rem; letter-spacing: 0.2em; text-transform: uppercase; }
    .nav-back {
      font-family: var(--mono);
      font-size: 0.72rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--muted);
      transition: color var(--transition);
    }
    .nav-back:hover { color: var(--text); }

    header.page-head {
      position: relative;
      min-height: 55vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 9rem 4rem 4rem;
      max-width: 1200px;
      margin: 0 auto;
      overflow: hidden;
    }
    .bg-word {
      position: absolute;
      top: 2rem; left: 0;
      font-size: 20vw;
      font-weight: 700;
      line-height: 1;
      text-transform: uppercase;
      white-space: nowrap;
      color: transparent;
      -webkit-text-stroke: 1px #1b1b1b;
      pointer-events: none;
      z-index: 0;
      will-change: transform;
    }
    .head-inner { position: relative; z-index: 1; }
    .section-label {
      font-family: var(--mono);
      font-size: 0.7rem;
      letter-spacing: 0.3em;
      text-transform: uppercase;
      color: var(--muted);
      margin-bottom: 1rem;
    }
    h1 {
      font-size: clamp(2.4rem, 6vw, 5rem);
      font-weight: 500;
      letter-spacing: -0.02em;
      line-height: 1.05;
      margin-bottom: 1.5rem;
    }
    h1 .outline { color: transparent; -webkit-text-stroke: 1.2px var(--text); }
    .head-note { color: var(--muted); max-width: 520px; font-size: 0.95rem; }

    .marquee {
      overflow: hidden;
      border-top: 1px solid var(--border);
      border-bottom: 1px solid var(--border);
      padding: 1.2rem 0;
    }
    .marquee-track { display: flex; width: max-content; animation: marquee 22s linear infinite; }
    .marquee-track span {
      font-size: clamp(1.2rem, 2.6vw, 2rem);
      font-weight: 500;
      text-transform: uppercase;
      white-space: nowrap;
      padding-right: 3rem;
    }
    .marquee-track span.outline { color: transparent; -webkit-text-stroke: 1px var(--muted); }

    section { padding: 5rem 4rem 7rem; max-width: 1200px; margin: 0 auto; }

    .rows { border-top: 1px solid var(--border); }
    .row {
      display: grid;
      grid-template-columns: 4rem auto 2fr auto 3rem;
      gap: 2rem;
      align-items: center;
      padding: 1.6rem 1rem;
      border-bottom: 1px solid var(--border);
      transition: background var(--transition), color var(--transition);
    }
    a.row:hover { background: var(--text); color: var(--bg); }
    .row-num { font-family: var(--mono); font-size: 0.7rem; color: var(--muted); transition: color var(--transition); }
    .fit-img {
      width: 84px; height: 84px;
      object-fit: cover;
      border: 1px solid var(--border);
      filter: grayscale(1);
      transition: filter var(--transition);
      display: block;
    }
    .fit-img-empty { background: var(--surface, #101010); }
    a.row:hover .fit-img { filter: none; }
    .row-title { display: block; font-size: clamp(1.3rem, 2.4vw, 1.9rem); font-weight: 500; letter-spacing: -0.01em; margin-bottom: 0.4rem; }
    .row-desc { display: block; color: var(--muted); font-size: 0.9rem; line-height: 1.6; transition: color var(--transition); }
    a.row:hover .row-num, a.row:hover .row-desc { color: var(--bg); }
    .month-tag {
      justify-self: start;
      font-family: var(--mono);
      font-size: 0.65rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      border: 1px solid var(--border);
      padding: 0.25rem 0.8rem;
      color: var(--muted);
      white-space: nowrap;
      transition: color var(--transition), border-color var(--transition);
    }
    a.row:hover .month-tag { color: var(--bg); border-color: #0a0a0a; }
    .row-arrow { font-size: 1.4rem; text-align: right; transition: transform var(--transition); }
    a.row:hover .row-arrow { transform: translateX(6px); }

    footer {
      border-top: 1px solid var(--border);
      padding: 2rem 4rem;
      display: flex;
      justify-content: space-between;
      font-family: var(--mono);
      font-size: 0.68rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--muted);
    }

    @keyframes marquee { to { transform: translateX(-50%); } }
    .reveal { opacity: 0; transform: translateY(26px); transition: opacity 0.8s ease, transform 0.8s ease; }
    .reveal.visible { opacity: 1; transform: none; }

    @media (max-width: 900px) {
      nav { padding: 1.1rem 1.5rem; }
      header.page-head { padding: 8rem 1.5rem 3rem; }
      section { padding: 4rem 1.5rem 5rem; }
      .row { grid-template-columns: 1fr; gap: 0.8rem; padding: 1.8rem 0.5rem; }
      .row-arrow { display: none; }
      .fit-img { width: 100%; height: auto; aspect-ratio: 4 / 5; }
      footer { flex-direction: column; gap: 0.5rem; text-align: center; padding: 2rem 1.5rem; }
    }
  </style>
  <noscript>
    <style>.reveal { opacity: 1 !important; transform: none !important; }</style>
  </noscript>
</head>
<body>

<nav>
  <span class="nav-logo"><?= htmlspecialchars($name) ?> — fashion</span>
  <a class="nav-back" href="index.php">← back to site</a>
</nav>

<header class="page-head">
  <div class="bg-word" data-slide="110" aria-hidden="true">Style</div>
  <div class="head-inner">
    <p class="section-label">// 3 fits a month</p>
    <h1>Outfits &amp;<br><span class="outline">combinations.</span></h1>
    <p class="head-note">My favorite outfit combinations — about three a month. Click a fit to see it on Instagram.</p>
  </div>
</header>

<div class="marquee" aria-hidden="true">
  <div class="marquee-track">
    <?php for ($loop = 0; $loop < 2; $loop++): ?>
      <?php foreach ($marquee_items as $i => $item): ?>
        <span class="<?= $i % 2 === 1 ? 'outline' : '' ?>"><?= htmlspecialchars($item) ?>&nbsp;&nbsp;—</span>
      <?php endforeach; ?>
    <?php endfor; ?>
  </div>
</div>

<section>
  <div class="rows reveal">
    <?php foreach ($outfits as $i => $outfit): ?>
      <a href="<?= htmlspecialchars($outfit['link']) ?>" class="row" target="_blank" rel="noopener">
        <span class="row-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
        <?php if (!empty($outfit['image'])): ?>
          <img class="fit-img" src="<?= htmlspecialchars($outfit['image']) ?>" alt="<?= htmlspecialchars($outfit['title']) ?>" loading="lazy">
        <?php else: ?>
          <span class="fit-img fit-img-empty" aria-hidden="true"></span>
        <?php endif; ?>
        <span>
          <span class="row-title"><?= htmlspecialchars($outfit['title']) ?></span>
          <span class="row-desc"><?= htmlspecialchars($outfit['description']) ?></span>
        </span>
        <span class="month-tag"><?= htmlspecialchars($outfit['month']) ?></span>
        <span class="row-arrow">→</span>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<footer>
  <span>&copy; <?= $year ?> <?= htmlspecialchars($name) ?> — fashion</span>
  <a class="nav-back" href="index.php">main site →</a>
</footer>

<script>
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  const sliders = document.querySelectorAll('[data-slide]');
  function update() {
    const vh = window.innerHeight;
    sliders.forEach(el => {
      const r = el.getBoundingClientRect();
      let p = (vh - r.top) / (vh + r.height);
      p = Math.min(1, Math.max(0, p));
      el.style.transform = 'translateX(' + ((p - 0.5) * parseFloat(el.dataset.slide || '80')) + 'px)';
    });
  }
  let ticking = false;
  window.addEventListener('scroll', () => {
    if (!ticking) {
      ticking = true;
      requestAnimationFrame(() => { update(); ticking = false; });
    }
  }, { passive: true });
  window.addEventListener('resize', update);
  update();
</script>

</body>
</html>
