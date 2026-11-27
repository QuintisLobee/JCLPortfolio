<?php
// ── Demo / WIP page configuration — edit these to personalize ────────
$name = "JCL";
// TODO — set this to your public URL after hosting
$site_url = "http://localhost:8000";

// status: e.g. "idea", "WIP", "almost done"
// link:   SoundCloud secret link works fine for private WIP tracks
$demos = [
    [
        "title"       => "TODO — Demo 1",
        "status"      => "WIP",
        "description" => "Something to take of for your journey, again heavy percussions but a lead that will pierce your heart, this was meant to make your night hit harder.",
        "link"        => "TODO — SoundCloud (secret) link",
    ],
    [
        "title"       => "TODO — Demo 2",
        "status"      => "WIP",
        "description" => "heavy percussions with a nice groove to the kick, i wanted to make this track to prove people that techno still has groove to it.",
        "link"        => "TODO — SoundCloud (secret) link",
    ],
    [
        "title"       => "TODO — Demo 3",
        "status"      => "WIP",
        "description" => "A Groovy night starter, something to open your set with.",
        "link"        => "#",
    ],
];

$marquee_items = ["Demos", "WIP", "Experiments", "JCL"];

$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Demos and works in progress by <?= htmlspecialchars($name) ?>" />
  <meta name="theme-color" content="#0a0a0a" />
  <link rel="icon" type="image/svg+xml" href="logo.svg" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?= htmlspecialchars($name) ?> — Demos & WIP" />
  <meta property="og:description" content="Tracks and projects in progress by <?= htmlspecialchars($name) ?>." />
  <meta property="og:url" content="<?= htmlspecialchars($site_url) ?>/demo.php" />
  <meta property="og:image" content="<?= htmlspecialchars($site_url) ?>/og-image.svg" />
  <meta name="twitter:card" content="summary_large_image" />
  <title><?= htmlspecialchars($name) ?> — Demos</title>
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
    .nav-logo { display: flex; align-items: center; gap: 0.6rem; font-family: var(--mono); font-size: 0.8rem; letter-spacing: 0.2em; text-transform: uppercase; }
    .nav-logo-img { height: 34px; width: auto; display: block; }
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
      grid-template-columns: 4rem 2fr 1fr auto 3rem;
      gap: 2rem;
      align-items: center;
      padding: 2rem 1rem;
      border-bottom: 1px solid var(--border);
      transition: background var(--transition), color var(--transition);
    }
    a.row:hover { background: var(--text); color: var(--bg); }
    .row-num { font-family: var(--mono); font-size: 0.7rem; color: var(--muted); transition: color var(--transition); }
    .row-title { display: block; font-size: clamp(1.3rem, 2.4vw, 1.9rem); font-weight: 500; letter-spacing: -0.01em; margin-bottom: 0.4rem; }
    .row-desc { display: block; color: var(--muted); font-size: 0.9rem; line-height: 1.6; transition: color var(--transition); }
    a.row:hover .row-num, a.row:hover .row-desc { color: var(--bg); }
    .status-tag {
      justify-self: start;
      font-family: var(--mono);
      font-size: 0.65rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      border: 1px solid var(--border);
      padding: 0.25rem 0.8rem;
      color: var(--muted);
      transition: color var(--transition), border-color var(--transition);
    }
    a.row:hover .status-tag { color: var(--bg); border-color: #0a0a0a; }
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
      .row { grid-template-columns: 1fr; gap: 0.6rem; padding: 1.8rem 0.5rem; }
      .row-arrow { display: none; }
      footer { flex-direction: column; gap: 0.5rem; text-align: center; padding: 2rem 1.5rem; }
    }
  </style>
  <noscript>
    <style>.reveal { opacity: 1 !important; transform: none !important; }</style>
  </noscript>
</head>
<body>

<nav>
  <a class="nav-logo" href="index.php"><img class="nav-logo-img" src="logo.svg" alt="JCL"><span>— demos</span></a>
  <a class="nav-back" href="index.php">← back to site</a>
</nav>

<header class="page-head">
  <div class="bg-word" data-slide="110" aria-hidden="true">Demo</div>
  <div class="head-inner">
    <p class="section-label">// Work in progress</p>
    <h1>Demos &amp;<br><span class="outline">experiments.</span></h1>
    <p class="head-note">Tracks and projects I'm working on right now — unfinished, unpolished and honest. Some may end up on the main page, some won't.</p>
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
    <?php foreach ($demos as $i => $demo): ?>
      <a href="<?= htmlspecialchars($demo['link']) ?>" class="row" target="_blank" rel="noopener">
        <span class="row-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
        <span>
          <span class="row-title"><?= htmlspecialchars($demo['title']) ?></span>
          <span class="row-desc"><?= htmlspecialchars($demo['description']) ?></span>
        </span>
        <span class="status-tag"><?= htmlspecialchars($demo['status']) ?></span>
        <span class="row-arrow">→</span>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<footer>
  <span>&copy; <?= $year ?> <?= htmlspecialchars($name) ?> — demo page</span>
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
