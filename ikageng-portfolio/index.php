<?php
/*
 * Ikageng's portfolio
 * Static-content PHP site: all copy and chart values are defined here.
 * No database, login, or server-side form processing is required.
 */
$skills = [
    ['category' => 'Web development', 'tools' => 'HTML, CSS, JavaScript, PHP', 'count' => 4, 'note' => 'Foundational / practical project experience'],
    ['category' => 'Data & visualisation', 'tools' => 'Excel, Tableau, Tableau Prep, Power BI', 'count' => 4, 'note' => 'Power BI and analytics tools at beginner level'],
    ['category' => 'Databases', 'tools' => 'SQL, MySQL / MariaDB', 'count' => 2, 'note' => 'Academic and project experience'],
    ['category' => 'Build & planning', 'tools' => 'XAMPP, Draw.io, Git', 'count' => 3, 'note' => 'Used for local development and project planning'],
];

$projects = [
    [
        'number' => '01', 'type' => 'web', 'label' => 'WEB DEVELOPMENT',
        'title' => 'Mpumi Lets Eat', 'subtitle' => 'Chef brand website',
        'description' => 'A website for a chef brand, with an earth-tone visual direction and pages designed to introduce the brand, showcase its work and make it easy for visitors to get in touch.',
        'stack' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'XAMPP'],
        'status' => 'In development', 'class' => 'project-peach', 'symbol' => '✳',
        'details' => 'Worked on the visual styling and explored form and database integration using XAMPP.'
    ],
    [
        'number' => '02', 'type' => 'systems', 'label' => 'SYSTEMS ANALYSIS · TEAM PROJECT',
        'title' => 'Masakhane GHT', 'subtitle' => 'Community service reporting system',
        'description' => 'A student system-development project focused on a web-based platform for reporting community service issues in Makhanda.',
        'stack' => ['PHP', 'HTML', 'CSS', 'JavaScript', 'MySQL / MariaDB', 'Draw.io'],
        'status' => 'Academic team project', 'class' => 'project-lilac', 'symbol' => '⌘',
        'details' => 'Contributed as Risk & Team Organisation Lead, supporting team coordination, risk awareness and project organisation.'
    ],
    [
        'number' => '03', 'type' => 'analytics', 'label' => 'DATA VISUALISATION',
        'title' => 'Business insights dashboard', 'subtitle' => 'A next portfolio build',
        'description' => 'A planned project to turn a sample business dataset into clear charts and practical findings using Excel, Tableau or Power BI.',
        'stack' => ['Excel', 'Power BI', 'Tableau'],
        'status' => 'Planned', 'class' => 'project-mint', 'symbol' => '↗',
        'details' => 'The goal: demonstrate data preparation, visual storytelling and recommendations for a business audience.'
    ],
];

$toolGroups = [
    ['title' => 'Web languages', 'items' => ['HTML', 'CSS', 'JavaScript', 'PHP']],
    ['title' => 'Data & databases', 'items' => ['SQL', 'MySQL / MariaDB', 'Excel', 'Tableau Prep', 'Tableau', 'Power BI (beginner)']],
    ['title' => 'Tools & workflow', 'items' => ['XAMPP', 'Draw.io', 'Git / GitHub']],
    ['title' => 'Business strengths', 'items' => ['IT troubleshooting', 'Problem-solving', 'Communication', 'Teamwork', 'Project organisation']],
];

$chartRows = array_map(static function ($skill) {
    return [$skill['category'], $skill['count']];
}, $skills);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Ikageng Monyanyedi's portfolio: information systems, web development, IT support and data visualisation.">
  <meta name="theme-color" content="#e8e9fb">
  <title>Ikageng Monyanyedi — Systems, code & curious ideas</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=DM+Sans:wght@400;500;600;700&family=Fredoka:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://www.gstatic.com/charts/loader.js" defer></script>
  <script src="assets/js/main.js" defer></script>
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>
  <header class="site-header wrap">
    <a class="wordmark" href="#top" aria-label="Ikageng, home">ika<span>.</span></a>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-nav" aria-label="Open navigation"><span></span><span></span></button>
    <nav class="site-nav" id="site-nav" aria-label="Main navigation">
      <a href="#about">About</a><a href="#skills">Toolkit</a><a href="#projects">Projects</a><a href="#visuals">Data corner</a><a href="#contact">Contact</a>
      <a class="nav-resume" href="assets/docs/Ikageng-Monyanyedi-CV.pdf" target="_blank" rel="noopener">CV ↗</a>
    </nav>
  </header>

  <main id="main">
    <section class="hero wrap" id="top">
      <div class="hero-copy reveal">
        <p class="eyebrow"><span class="status-dot"></span> FINAL-YEAR STUDENT · OPEN TO OPPORTUNITIES</p>
        <h1>Curious mind.<br>Practical tech.<br><span class="highlight">People-first</span> thinking.</h1>
        <p class="hero-intro">Hey, I'm Ikageng — an Information Systems and Management student who enjoys figuring out how technology, data and business fit together.</p>
        <p class="hero-subtext">I build things, ask questions, untangle problems and try to make digital experiences a little more useful.</p>
        <div class="hero-actions"><a class="button button-dark" href="#projects">Explore my work <span>↓</span></a><a class="text-link" href="assets/docs/Ikageng-Monyanyedi-CV.pdf" target="_blank" rel="noopener">Read my CV <span>↗</span></a></div>
        <div class="hero-meta"><span>BASED IN SOUTH AFRICA</span><span>INFO SYSTEMS × MANAGEMENT</span></div>
      </div>
      <div class="hero-art reveal" aria-label="Decorative portfolio illustration">
        <div class="art-grid"></div><div class="orbit orbit-one"></div><div class="orbit orbit-two"></div>
        <div class="art-card card-main"><span class="card-kicker">CURRENTLY LEARNING</span><strong>how things<br>work together<span>.</span></strong><div class="mini-bars"><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div></div>
        <div class="art-sticker sticker-yellow">systems<br>thinker <span>↗</span></div>
        <div class="art-sticker sticker-coral">build<br>and learn</div>
        <div class="art-spark">✳</div><div class="art-caption">a work in progress<br><span>(the good kind)</span></div>
      </div>
    </section>

    <div class="ticker" aria-label="Areas of interest"><div class="ticker-track"><span>WEB DEVELOPMENT</span><b>✳</b><span>DATA & VISUALISATION</span><b>✳</b><span>INFORMATION SYSTEMS</span><b>✳</b><span>BUSINESS PROBLEM-SOLVING</span><b>✳</b><span>WEB DEVELOPMENT</span><b>✳</b><span>DATA & VISUALISATION</span><b>✳</b></div></div>

    <section class="section wrap" id="about">
      <div class="section-heading reveal"><p class="section-number">01 / A LITTLE ABOUT ME</p><h2>Tech-minded, <span>people-aware.</span></h2></div>
      <div class="about-layout reveal">
        <div class="about-mark"><div class="initials">IK<span>✳</span></div><p class="mono-note">learning by doing<br>since day one</p></div>
        <div class="about-copy"><p class="lead">I sit somewhere between technology, business and the people who use both.</p><p>I'm studying Information Systems and Management at Rhodes University. My experience spans IT support, academic tutoring, web development projects and running a small e-commerce business.</p><p>I like making complicated things easier to understand — whether that's helping someone troubleshoot a laptop, explaining a database concept or shaping a website around a brand.</p><p>I'm keeping my career options open across IT and business-facing technology roles, while building a foundation that could eventually take me into fintech.</p><div class="about-facts"><div><span>01</span><strong>Problem-solver</strong></div><div><span>02</span><strong>Clear communicator</strong></div><div><span>03</span><strong>Always learning</strong></div></div></div>
      </div>
    </section>

    <section class="section section-tinted" id="skills"><div class="wrap">
      <div class="section-heading reveal"><p class="section-number">02 / MY TOOLKIT</p><h2>What I bring <span>to the table.</span></h2><p class="section-description">A growing toolkit across building, analysing and supporting digital systems. I label my current level honestly — there's always more to learn.</p></div>
      <div class="skills-grid">
        <?php foreach ($toolGroups as $group): ?>
          <article class="skill-card reveal"><div class="skill-card-top"><span class="skill-spark">✳</span><span class="mono-note">TOOLKIT</span></div><h3><?= htmlspecialchars($group['title'], ENT_QUOTES, 'UTF-8') ?></h3><div class="skill-pills"><?php foreach ($group['items'] as $item): ?><span><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?></span><?php endforeach; ?></div></article>
        <?php endforeach; ?>
      </div>
      <p class="skills-footnote">I’m strongest when I can combine technical work with communication, organisation and an understanding of the business problem.</p>
    </div></section>

    <section class="section wrap" id="projects">
      <div class="section-heading project-heading reveal"><div><p class="section-number">03 / SELECTED WORK</p><h2>Things I've <span>worked on.</span></h2></div><p class="section-description">A mix of practical builds and systems work. More experiments will make their way here as I finish them.</p></div>
      <div class="project-filters reveal" role="group" aria-label="Filter projects"><button class="filter-button active" type="button" data-filter="all" aria-pressed="true">All work <span>03</span></button><button class="filter-button" type="button" data-filter="web" aria-pressed="false">Web</button><button class="filter-button" type="button" data-filter="systems" aria-pressed="false">Systems</button><button class="filter-button" type="button" data-filter="analytics" aria-pressed="false">Analytics</button></div>
      <div class="projects-grid" id="project-grid">
        <?php foreach ($projects as $project): ?>
          <article class="project-card <?= htmlspecialchars($project['class'], ENT_QUOTES, 'UTF-8') ?> reveal" data-category="<?= htmlspecialchars($project['type'], ENT_QUOTES, 'UTF-8') ?>">
            <div class="project-visual"><span class="project-symbol" aria-hidden="true"><?= htmlspecialchars($project['symbol'], ENT_QUOTES, 'UTF-8') ?></span><span class="project-number mono-note"><?= htmlspecialchars($project['number'], ENT_QUOTES, 'UTF-8') ?></span><span class="visual-caption"><?= htmlspecialchars($project['label'], ENT_QUOTES, 'UTF-8') ?></span></div>
            <div class="project-content"><div class="project-status"><span class="status-dot"></span><?= htmlspecialchars($project['status'], ENT_QUOTES, 'UTF-8') ?></div><p class="project-subtitle"><?= htmlspecialchars($project['subtitle'], ENT_QUOTES, 'UTF-8') ?></p><h3><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></h3><p><?= htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8') ?></p><p class="project-detail"><?= htmlspecialchars($project['details'], ENT_QUOTES, 'UTF-8') ?></p><div class="project-stack"><?php foreach ($project['stack'] as $stack): ?><span><?= htmlspecialchars($stack, ENT_QUOTES, 'UTF-8') ?></span><?php endforeach; ?></div></div>
          </article>
        <?php endforeach; ?>
      </div>
      <p class="project-note"><span>↳</span> Some work is collaborative or still in progress. I’ll keep adding demos, screenshots and write-ups as they’re ready.</p>
    </section>

    <section class="section data-section" id="visuals"><div class="wrap data-layout">
      <div class="data-copy reveal"><p class="section-number">04 / THE DATA CORNER</p><h2>A little visual proof <span>of my toolkit.</span></h2><p>This chart groups the tools I've worked with by area. It counts the listed tools in each category — it is not a proficiency score or a claim that I'm equally experienced in every tool.</p><div class="data-legend"><?php foreach ($skills as $skill): ?><div><span class="legend-dot"></span><p><strong><?= htmlspecialchars($skill['category'], ENT_QUOTES, 'UTF-8') ?></strong><small><?= htmlspecialchars($skill['tools'], ENT_QUOTES, 'UTF-8') ?></small></p></div><?php endforeach; ?></div><p class="chart-note">Visualisation built with Google Charts, with chart data prepared in PHP.</p></div>
      <div class="chart-card reveal"><div class="chart-card-head"><div><span class="mono-note">TOOLKIT SNAPSHOT</span><h3>Tools by category</h3></div><span class="chart-icon">↗</span></div><div id="toolkit-chart" role="img" aria-label="Column chart showing the number of listed tools in each category"><p class="chart-loading">Loading chart… If it doesn't appear, check your internet connection.</p></div><div class="chart-footer"><span>DATA SOURCE</span><strong>My current toolkit</strong><span class="chart-footer-dot">●</span></div></div>
    </div></section>

    <section class="section wrap" id="experience"><div class="section-heading reveal"><p class="section-number">05 / EXPERIENCE & LEARNING</p><h2>Learning doesn't <span>only happen in class.</span></h2></div><div class="timeline">
      <article class="timeline-item reveal"><span class="timeline-year">2024 — NOW</span><div><h3>Student IT Technician <span>· Rhodes University</span></h3><p>Support students and staff with hardware, software and basic network issues; explain fixes clearly and help keep the library's technology running.</p></div></article>
      <article class="timeline-item reveal"><span class="timeline-year">2026</span><div><h3>Information Systems 203 Tutor <span>· Rhodes University</span></h3><p>Support learning around SQL and databases, data analytics, security and controls, and disruptive technologies for accountants.</p></div></article>
      <article class="timeline-item reveal"><span class="timeline-year">2025</span><div><h3>Accounting 1 Tutor <span>· Rhodes University</span></h3><p>Helped students build confidence in accounting concepts through group tutoring and approachable explanations.</p></div></article>
      <article class="timeline-item reveal"><span class="timeline-year">2021 — 2022</span><div><h3>Founder · Lerona Scentuals <span>· E-commerce</span></h3><p>Managed website design, digital marketing, inventory and customer service — an early lesson in how digital tools and business operations connect.</p></div></article>
    </div></section>

    <section class="section cv-section" id="cv"><div class="wrap cv-panel reveal"><div class="cv-icon">↳</div><div class="cv-copy"><p class="section-number">THE FORMAL STUFF</p><h2>Want the <span>one-page overview?</span></h2><p>My CV covers my education, experience, technical skills, projects and certifications in one place.</p></div><a class="button button-dark" href="assets/docs/Ikageng-Monyanyedi-CV.pdf" target="_blank" rel="noopener">View my CV <span>↗</span></a><a class="button button-outline" href="assets/docs/Ikageng-Monyanyedi-CV.pdf" download>Download PDF <span>↓</span></a></div></section>

    <section class="section wrap contact-section" id="contact"><div class="contact-panel reveal"><div><p class="section-number">06 / SAY HELLO</p><h2>Have an opportunity<br>or an idea? <span>Let's talk.</span></h2><p>I'm open to internships, graduate programmes, entry-level IT opportunities and collaborative projects.</p></div><div class="contact-actions"><a class="button button-light" href="mailto:ikagengmonyanyedi@gmail.com">Email me <span>↗</span></a><a href="https://www.linkedin.com/in/ikageng" target="_blank" rel="noopener">LinkedIn ↗</a><a href="https://github.com/IkagengThatohatsi" target="_blank" rel="noopener">GitHub ↗</a></div><div class="contact-doodle" aria-hidden="true">✳</div></div></section>
  </main>

  <footer class="site-footer wrap"><a class="wordmark" href="#top">ika<span>.</span></a><p>Made with curiosity, code and a few too many browser tabs.</p><span class="footer-year">© <?= date('Y') ?> Ikageng Monyanyedi</span></footer>

  <script>
    // PHP supplies this static array; Google Charts renders it in the browser.
    window.portfolioChartRows = <?= json_encode($chartRows, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>;
  </script>
</body>
</html>
