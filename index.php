<?php
// ── Portfolio configuration — edit these to personalize ─────────────
$name     = "JCL";
$title    = "Music Producer & Developer";
$tagline  = "I produce music and build tech around it — my portfolio for HKU Music & Technology.";
$email    = "quintislobee@gmail.com";
$linkedin = "https://www.linkedin.com/in/quintis-lobée-9b8528250";
$instagram = "https://www.instagram.com/quintisjcl/";

$about = "I'm Quintis — aka JCL — a music producer at heart. I spend my days producing tracks, designing sounds and mixing, and I love the technology behind music: DAWs, synths and code. Next to that I design and build for the web, which feeds straight into the tech side of things. That combination is exactly why I'm applying to HKU Music & Technology — and why I don't mind any task, as long as I get to create: new tracks, new sounds, new systems.";

$motivation = "Music has always been my way of thinking. I've been playing instruments since I was 5 years old, and after finding out that digital production was a thing I never wanted anything else with my life. I produce because I love shaping sound into something people feel — and I want to do that professionally. I want to work on unique underground sounds with rhythm from techno and bochka, 2 completely different ways of producing, but I feel like the atmosphere is the same. The music just keeps going, sure there are breaks here and there, but I feel like the music has a certain flow to it. At HKU Music & Technology I want to combine music with the tech side: synthesis, audio programming and interactive sound. I learn fastest when I build real things with real people, so I don't mind the task — I mind not creating. That's why this program fits me: it's where music and engineering meet. And my engineering focus will obviously fall a little short when I start at HKU, but I will use this knowledge for the productions of some sick hardware. Not only do I want to use software to my advantage, but also my passion for creating things for my own use, like own synths, own drumpads, loopstations and effects. I want to teach myself to create these things for myself, because if you create your own sound you use your own gear.";

$motivation_tags = ["Synthesis", "Audio programming", "Interactive sound", "DIY hardware — synths, drum pads, effects", "Underground & techno production"];

$skills = ["PHP", "Python", "HTML", "CSS", "JavaScript", "FL Studio (DAW)", "Guitar", "Piano", "Vocalist"];

$passions = [
    ["title" => "Music production", "description" => "From first beat to final mix — producing tracks is where I switch off and create. I'm planning to study Music & Technology at the HKU to take it further."],
    ["title" => "Fashion", "description" => "Self-expression through clothing — every outfit is a choice that says something about me. The design, the culture, the styling: fashion is a core part of my life, just like my music."],
    ["title" => "Engineering & people", "description" => "New engineering challenges motivate me, and I love building things together with others."],
];

$career = [
    ["period" => "Now", "role" => "Developer & Designer", "place" => "Own projects", "description" => "Designing and building web projects — adding new things to existing systems is my favorite."],
    ["period" => "Now", "role" => "Student — Software Development (MBO, 4-year)", "place" => "Vista College", "description" => "Following a 4-year MBO software development course next to my own projects and music."],
    ["period" => "Upcoming", "role" => "Student — Music & Technology", "place" => "HKU, Utrecht", "description" => "Looking to join the HKU to study Music & Technology — combining code with music."],
];

$tracks = [
    [
        "title"       => "TODO — Track 1",
        "description" => "Genre, vibe and what you did on it, in one or two sentences.",
        "tags"        => ["TODO — genre"],
        "link"        => "TODO — SoundCloud / YouTube / Spotify link",
    ],
    [
        "title"       => "TODO — Track 2",
        "description" => "Genre, vibe and what you did on it, in one or two sentences.",
        "tags"        => ["TODO — genre"],
        "link"        => "TODO — SoundCloud / YouTube / Spotify link",
    ],
];

$marquee_items = ["JCL", "Music", "Fashion", "Beats", "Sound design", "Tech"];

$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Portfolio of <?= htmlspecialchars($name) ?>" />
  <title><?= htmlspecialchars($name) ?> — Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
  <style>
    /* ── Reset & Base ─────────────────────────────────────────── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg:        #0a0a0a;
      --surface:   #101010;
      --border:    #232323;
      --text:      #f4f4f2;
      --muted:     #7d7d7d;
      --dim:       #3a3a3a;
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

    /* ── Nav ──────────────────────────────────────────────────── */
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

    .nav-logo {
      font-family: var(--mono);
      font-size: 0.8rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
    }

    .nav-links {
      display: flex;
      gap: 2.2rem;
      list-style: none;
      font-family: var(--mono);
      font-size: 0.72rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
    }
    .nav-links a { color: var(--muted); transition: color var(--transition); }
    .nav-links a:hover { color: var(--text); }

    /* ── Hero ─────────────────────────────────────────────────── */
    #hero {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 8rem 2rem 6rem;
      position: relative;
      overflow: hidden;
    }

    .hero-eyebrow {
      font-family: var(--mono);
      font-size: 0.72rem;
      letter-spacing: 0.35em;
      text-transform: uppercase;
      color: var(--muted);
      margin-bottom: 2rem;
      animation: fadeUp 0.9s ease both;
    }

    .hero-name {
      font-size: clamp(3.2rem, 12vw, 10rem);
      font-weight: 700;
      line-height: 0.95;
      letter-spacing: -0.03em;
      text-transform: uppercase;
      animation: fadeUp 1s 0.1s ease both;
    }
    .hero-name .line { display: block; }
    .hero-name .outline { color: transparent; -webkit-text-stroke: 2px var(--text); }

    .hero-bg {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      z-index: 0;
      pointer-events: none;
    }
    .hero-bg .bg-word {
      position: static;
      font-size: 40vw;
      -webkit-text-stroke: 1px #262626;
    }
    #hero > *:not(.hero-bg):not(.scroll-hint) { position: relative; z-index: 1; }

    .hero-tagline {
      color: var(--muted);
      max-width: 520px;
      margin: 2rem auto 3rem;
      font-size: 1.05rem;
      animation: fadeUp 1s 0.25s ease both;
    }

    .hero-cta {
      font-family: var(--mono);
      font-size: 0.75rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      border: 1px solid var(--text);
      padding: 0.85rem 2.2rem;
      transition: background var(--transition), color var(--transition);
      animation: fadeUp 1s 0.4s ease both;
    }
    .hero-cta:hover { background: var(--text); color: var(--bg); }

    .scroll-hint {
      position: absolute;
      bottom: 2rem; left: 50%;
      transform: translateX(-50%);
      font-family: var(--mono);
      font-size: 0.65rem;
      letter-spacing: 0.3em;
      text-transform: uppercase;
      color: var(--muted);
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.6rem;
    }
    .scroll-hint::after {
      content: '';
      width: 1px; height: 48px;
      background: var(--muted);
      transform-origin: top;
      animation: drop 1.8s ease-in-out infinite;
    }

    /* ── Marquee (scrolling text strip) ───────────────────────── */
    .marquee {
      overflow: hidden;
      border-top: 1px solid var(--border);
      border-bottom: 1px solid var(--border);
      padding: 1.4rem 0;
    }
    .marquee-track {
      display: flex;
      width: max-content;
      animation: marquee 24s linear infinite;
    }
    .marquee-track span {
      font-size: clamp(1.4rem, 3vw, 2.4rem);
      font-weight: 500;
      text-transform: uppercase;
      white-space: nowrap;
      padding-right: 3rem;
    }
    .marquee-track span.outline { color: transparent; -webkit-text-stroke: 1px var(--muted); }

    /* ── Sections ─────────────────────────────────────────────── */
    section {
      position: relative;
      padding: 7rem 4rem;
      max-width: 1200px;
      margin: 0 auto;
      overflow: hidden;
    }

    .bg-word {
      position: absolute;
      top: 3rem; left: 0;
      font-size: 22vw;
      font-weight: 700;
      line-height: 1;
      text-transform: uppercase;
      letter-spacing: -0.02em;
      white-space: nowrap;
      color: transparent;
      -webkit-text-stroke: 1px #1b1b1b;
      pointer-events: none;
      z-index: 0;
      will-change: transform;
    }

    .section-inner { position: relative; z-index: 1; }

    .section-label {
      font-family: var(--mono);
      font-size: 0.7rem;
      letter-spacing: 0.3em;
      text-transform: uppercase;
      color: var(--muted);
      margin-bottom: 1rem;
    }

    .section-title {
      font-size: clamp(2.2rem, 5vw, 4rem);
      font-weight: 500;
      letter-spacing: -0.02em;
      line-height: 1.05;
      margin-bottom: 3.5rem;
    }
    .section-title .outline { color: transparent; -webkit-text-stroke: 1.2px var(--text); }

    /* ── About ────────────────────────────────────────────────── */
    .about-grid {
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      gap: 5rem;
      align-items: start;
    }

    .about-text {
      font-size: clamp(1.15rem, 1.8vw, 1.5rem);
      line-height: 1.6;
    }
    .about-text .w { color: var(--dim); transition: color 0.25s linear; }
    .about-text .w.lit { color: var(--text); }

    .skills-grid { display: flex; flex-wrap: wrap; gap: 0.6rem; }
    .skill-tag {
      font-family: var(--mono);
      font-size: 0.7rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      border: 1px solid var(--border);
      padding: 0.4rem 1rem;
      color: var(--muted);
      transition: background var(--transition), color var(--transition), border-color var(--transition);
    }
    .skill-tag:hover { background: var(--text); color: var(--bg); border-color: var(--text); }

    /* ── Career (simple list) ─────────────────────────────────── */
    .career { margin-top: 4.5rem; }
    .career-list { border-top: 1px solid var(--border); margin-top: 1.2rem; }
    .career-row {
      display: grid;
      grid-template-columns: 9rem 1fr 1.5fr;
      gap: 2rem;
      padding: 1.4rem 0.5rem;
      border-bottom: 1px solid var(--border);
      font-size: 0.9rem;
    }
    .career-period {
      font-family: var(--mono);
      font-size: 0.72rem;
      letter-spacing: 0.08em;
      color: var(--muted);
      padding-top: 0.2rem;
    }
    .career-role { font-weight: 500; }
    .career-place { color: var(--muted); font-size: 0.78rem; font-family: var(--mono); }
    .career-desc { color: var(--muted); font-size: 0.85rem; }

    /* ── Rows (passions & projects) ───────────────────────────── */
    .rows { border-top: 1px solid var(--border); }
    .row {
      display: grid;
      gap: 2rem;
      align-items: center;
      padding: 2.2rem 1rem;
      border-bottom: 1px solid var(--border);
      transition: background var(--transition), color var(--transition);
    }
    a.row:hover, .row.link:hover { background: var(--text); color: var(--bg); }

    .row-num { font-family: var(--mono); font-size: 0.7rem; color: var(--muted); transition: color var(--transition); }
    .row-title { font-size: clamp(1.4rem, 2.5vw, 2rem); font-weight: 500; letter-spacing: -0.01em; }
    .row-desc { color: var(--muted); font-size: 0.9rem; line-height: 1.6; transition: color var(--transition); }
    a.row:hover .row-num, a.row:hover .row-desc,
    .row.link:hover .row-num, .row.link:hover .row-desc { color: var(--bg); }

    .passion-row { grid-template-columns: 4rem 1fr 1.6fr; }

    .project-row { grid-template-columns: 4rem 2fr 1fr 3rem; }
    .project-main .row-title { display: block; margin-bottom: 0.5rem; }
    .project-main .row-desc { display: block; }
    .project-tags { display: flex; flex-wrap: wrap; gap: 0.4rem; }
    .project-tag {
      font-family: var(--mono);
      font-size: 0.65rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--muted);
      border: 1px solid var(--border);
      padding: 0.2rem 0.6rem;
      transition: color var(--transition), border-color var(--transition);
    }
    a.row:hover .project-tag { color: var(--bg); border-color: #0a0a0a; }
    .project-arrow { font-size: 1.4rem; text-align: right; transition: transform var(--transition); }
    a.row:hover .project-arrow { transform: translateX(6px); }

    /* ── Contact ──────────────────────────────────────────────── */
    #contact { text-align: center; padding-bottom: 8rem; }
    .contact-email {
      display: inline-block;
      font-size: clamp(1.4rem, 3.5vw, 2.6rem);
      font-weight: 500;
      letter-spacing: -0.01em;
      border-bottom: 1px solid var(--border);
      padding-bottom: 0.4rem;
      margin-bottom: 3rem;
      transition: border-color var(--transition);
    }
    .contact-email:hover { border-color: var(--text); }

    .social-links {
      display: flex;
      justify-content: center;
      gap: 2.5rem;
      font-family: var(--mono);
      font-size: 0.72rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
    }
    .social-links a { color: var(--muted); transition: color var(--transition); }
    .social-links a:hover { color: var(--text); }

    /* ── Footer ───────────────────────────────────────────────── */
    footer {
      border-top: 1px solid var(--border);
      padding: 2rem 4rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-family: var(--mono);
      font-size: 0.68rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--muted);
    }

    /* ── Animations ───────────────────────────────────────────── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(28px); }
      to   { opacity: 1; transform: none; }
    }
    @keyframes marquee {
      to { transform: translateX(-50%); }
    }
    @keyframes drop {
      0%   { transform: scaleY(0); opacity: 1; }
      45%  { transform: scaleY(1); opacity: 1; }
      100% { transform: scaleY(1); opacity: 0; }
    }

    .reveal {
      opacity: 0;
      transform: translateY(26px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    .reveal.visible { opacity: 1; transform: none; }

    /* ── Responsive ───────────────────────────────────────────── */
    @media (max-width: 900px) {
      nav { padding: 1.1rem 1.5rem; }
      .nav-links { gap: 1.2rem; }
      section { padding: 5rem 1.5rem; }
      .about-grid { grid-template-columns: 1fr; gap: 3rem; }
      .career-row { grid-template-columns: 1fr; gap: 0.3rem; }
      .passion-row, .project-row { grid-template-columns: 1fr; gap: 0.6rem; padding: 1.8rem 0.5rem; }
      .project-arrow { display: none; }
      .bg-word { font-size: 34vw; }
      footer { flex-direction: column; gap: 0.5rem; text-align: center; padding: 2rem 1.5rem; }
    }

  </style>
  <noscript>
    <style>
      .reveal { opacity: 1 !important; transform: none !important; }
      .about-text .w { color: var(--text) !important; }
    </style>
  </noscript>
</head>
<body>

<!-- ── Navigation ─────────────────────────────────────────────── -->
<nav>
  <span class="nav-logo"><?= htmlspecialchars($name) ?></span>
  <ul class="nav-links">
    <li><a href="#about">About</a></li>
    <li><a href="#motivation">Why HKU</a></li>
    <li><a href="#passions">Passions</a></li>
    <li><a href="fashion.php">Fashion</a></li>
    <li><a href="#music">Music</a></li>
    <li><a href="demo.php">Demos</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<!-- ── Hero ───────────────────────────────────────────────────── -->
<header id="hero">
  <div class="hero-bg"><div class="bg-word" data-slide="160" aria-hidden="true">JCL</div></div>
  <p class="hero-eyebrow"><?= htmlspecialchars($title) ?></p>
  <h1 class="hero-name">
    <?php $parts = explode(' ', trim($name)); ?>
    <span class="line"><?= htmlspecialchars($parts[0]) ?></span>
    <?php if (count($parts) > 1): ?>
      <span class="line outline"><?= htmlspecialchars(implode(' ', array_slice($parts, 1))) ?></span>
    <?php endif; ?>
  </h1>
  <p class="hero-tagline"><?= htmlspecialchars($tagline) ?></p>
  <a href="#music" class="hero-cta">Listen ↓</a>
  <span class="scroll-hint">scroll</span>
</header>

<!-- ── Marquee ────────────────────────────────────────────────── -->
<div class="marquee" aria-hidden="true">
  <div class="marquee-track">
    <?php for ($loop = 0; $loop < 2; $loop++): ?>
      <?php foreach ($marquee_items as $i => $item): ?>
        <span class="<?= $i % 2 === 1 ? 'outline' : '' ?>"><?= htmlspecialchars($item) ?>&nbsp;&nbsp;—</span>
      <?php endforeach; ?>
    <?php endfor; ?>
  </div>
</div>

<!-- ── About ──────────────────────────────────────────────────── -->
<section id="about">
  <div class="bg-word" data-slide="120" aria-hidden="true">About</div>
  <div class="section-inner">
    <div class="reveal">
      <p class="section-label">// 01 — About</p>
      <h2 class="section-title">A bit about<br><span class="outline">who I am.</span></h2>
    </div>
    <div class="about-grid reveal">
      <p class="about-text"><?= htmlspecialchars($about) ?></p>
      <div>
        <p class="section-label" style="margin-bottom:1.2rem;">// Skills</p>
        <div class="skills-grid">
          <?php foreach ($skills as $skill): ?>
            <span class="skill-tag"><?= htmlspecialchars($skill) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="career reveal">
      <p class="section-label">// Career</p>
      <div class="career-list">
        <?php foreach ($career as $job): ?>
          <div class="career-row">
            <span class="career-period"><?= htmlspecialchars($job['period']) ?></span>
            <span>
              <span class="career-role"><?= htmlspecialchars($job['role']) ?></span><br>
              <span class="career-place"><?= htmlspecialchars($job['place']) ?></span>
            </span>
            <span class="career-desc"><?= htmlspecialchars($job['description']) ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ── Motivation ─────────────────────────────────────────────── -->
<section id="motivation">
  <div class="bg-word" data-slide="-100" aria-hidden="true">Why</div>
  <div class="section-inner">
    <div class="reveal">
      <p class="section-label">// 02 — Motivation</p>
      <h2 class="section-title">Why<br><span class="outline">HKU.</span></h2>
    </div>
    <div class="reveal">
      <p class="about-text"><?= htmlspecialchars($motivation) ?></p>
      <p class="section-label" style="margin:3rem 0 1.2rem;">// What I want to learn</p>
      <div class="skills-grid">
        <?php foreach ($motivation_tags as $tag): ?>
          <span class="skill-tag"><?= htmlspecialchars($tag) ?></span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ── Passions ───────────────────────────────────────────────── -->
<section id="passions">
  <div class="bg-word" data-slide="-140" aria-hidden="true">Love</div>
  <div class="section-inner">
    <div class="reveal">
      <p class="section-label">// 03 — Passions</p>
      <h2 class="section-title">Things I<br><span class="outline">love doing.</span></h2>
    </div>
    <div class="rows reveal">
      <?php foreach ($passions as $i => $passion): ?>
        <div class="row passion-row">
          <span class="row-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
          <span class="row-title"><?= htmlspecialchars($passion['title']) ?></span>
          <span class="row-desc"><?= htmlspecialchars($passion['description']) ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── Marquee ────────────────────────────────────────────────── -->
<div class="marquee" aria-hidden="true">
  <div class="marquee-track">
    <?php for ($loop = 0; $loop < 2; $loop++): ?>
      <?php foreach ($marquee_items as $i => $item): ?>
        <span class="<?= $i % 2 === 1 ? 'outline' : '' ?>"><?= htmlspecialchars($item) ?>&nbsp;&nbsp;—</span>
      <?php endforeach; ?>
    <?php endfor; ?>
  </div>
</div>

<!-- ── Work ───────────────────────────────────────────────────── -->
<section id="music">
  <div class="bg-word" data-slide="100" aria-hidden="true">Music</div>
  <div class="section-inner">
    <div class="reveal">
      <p class="section-label">// 04 — Music</p>
      <h2 class="section-title">Selected<br><span class="outline">tracks.</span></h2>
    </div>
    <div class="rows reveal">
      <?php foreach ($tracks as $i => $track): ?>
        <a href="<?= htmlspecialchars($track['link']) ?>" class="row project-row" target="_blank" rel="noopener">
          <span class="row-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
          <span class="project-main">
            <span class="row-title"><?= htmlspecialchars($track['title']) ?></span>
            <span class="row-desc"><?= htmlspecialchars($track['description']) ?></span>
          </span>
          <span class="project-tags">
            <?php foreach ($track['tags'] as $tag): ?>
              <span class="project-tag"><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
          </span>
          <span class="project-arrow">→</span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── Contact ────────────────────────────────────────────────── -->
<section id="contact">
  <div class="bg-word" data-slide="80" aria-hidden="true">Hello</div>
  <div class="section-inner reveal">
    <p class="section-label">// 05 — Contact</p>
    <h2 class="section-title">Let's work<br><span class="outline">together.</span></h2>
    <a href="mailto:<?= htmlspecialchars($email) ?>" class="contact-email"><?= htmlspecialchars($email) ?></a>
    <div class="social-links">
      <a href="<?= htmlspecialchars($linkedin) ?>" target="_blank" rel="noopener">LinkedIn</a>
      <a href="<?= htmlspecialchars($instagram) ?>" target="_blank" rel="noopener">Instagram</a>
    </div>
  </div>
</section>

<!-- ── Footer ─────────────────────────────────────────────────── -->
<footer>
  <span>&copy; <?= $year ?> <?= htmlspecialchars($name) ?></span>
  <span>Built with PHP &amp; vanilla JS</span>
</footer>

<script>
  // Reveal sections on scroll
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Split the big statement texts into words for the scroll-text effect
  const wordBlocks = [];
  document.querySelectorAll('.about-text').forEach(el => {
    const words = el.textContent.trim().split(/\s+/);
    el.textContent = '';
    const spans = [];
    words.forEach(w => {
      const s = document.createElement('span');
      s.className = 'w';
      s.textContent = w;
      el.appendChild(s);
      el.appendChild(document.createTextNode(' '));
      spans.push(s);
    });
    wordBlocks.push({ el, spans, lastLit: -1 });
  });

  // Scroll-linked animations: word-by-word reveal + sliding background words
  const sliders = document.querySelectorAll('[data-slide]');

  function update() {
    const vh = window.innerHeight;

    wordBlocks.forEach(block => {
      const r = block.el.getBoundingClientRect();
      let p = (vh * 0.85 - r.top) / (r.height + vh * 0.35);
      p = Math.min(1, Math.max(0, p));
      const lit = Math.round(p * block.spans.length);
      if (lit !== block.lastLit) {
        block.spans.forEach((w, i) => w.classList.toggle('lit', i < lit));
        block.lastLit = lit;
      }
    });

    sliders.forEach(el => {
      const r = el.getBoundingClientRect();
      let p = (vh - r.top) / (vh + r.height);
      p = Math.min(1, Math.max(0, p));
      const speed = parseFloat(el.dataset.slide || '80');
      el.style.transform = 'translateX(' + ((p - 0.5) * speed) + 'px)';
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
