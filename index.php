<?php
declare(strict_types=1);
require __DIR__ . '/includes/bootstrap.php';

$projects = [
    [
        'number' => '01',
        'name' => 'Garamba Cargo',
        'type' => 'Shipment tracking system',
        'status' => 'Live project',
        'description' => 'A web-based cargo tracking solution for shipment records, tracking-number lookup and logistics status monitoring.',
        'stack' => ['PHP', 'MySQL', 'JavaScript', 'REST-style API'],
        'url' => 'https://garambacargo.com',
        'url_label' => 'Visit live website',
        'icon' => 'GC',
    ],
    [
        'number' => '02',
        'name' => 'Zandoonline',
        'type' => 'Multi-vendor marketplace',
        'status' => 'In development',
        'description' => 'A marketplace concept for vendor onboarding, product catalogues, inventory, customer orders and administration.',
        'stack' => ['PHP', 'MySQL', 'JavaScript', 'HTML/CSS'],
        'url' => 'https://github.com/Amadja',
        'url_label' => 'View GitHub profile',
        'icon' => 'ZO',
    ],
    [
        'number' => '03',
        'name' => 'Unity Hub',
        'type' => 'Digital ticketing platform',
        'status' => 'In development',
        'description' => 'An event ticketing platform concept for event publishing, online registration, ticket records and attendance management.',
        'stack' => ['PHP', 'MySQL', 'JavaScript', 'HTML/CSS'],
        'url' => 'https://github.com/Amadja',
        'url_label' => 'View GitHub profile',
        'icon' => 'UH',
    ],
];

$skills = [
    'Software engineering' => ['System analysis & design', 'Full-stack web development', 'API integration', 'Testing & debugging', 'Deployment & maintenance'],
    'Development' => ['PHP', 'JavaScript (ES6+)', 'HTML5', 'CSS3', 'SQL'],
    'Data & platforms' => ['MySQL', 'Database modelling', 'Git & GitHub', 'VS Code', 'XAMPP', 'phpMyAdmin', 'WordPress', 'cPanel'],
    'IT solutions' => ['Systems administration', 'Computer networking', 'Technical troubleshooting', 'Hosting & domain management'],
];

$contactStatus = $_SESSION['contact_status'] ?? null;
unset($_SESSION['contact_status']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Amadja Makutsa David — Full Stack Software Engineer, Systems Architect and IT Solutions Specialist based in Kampala, Uganda.">
    <meta name="theme-color" content="#102a56">
    <title>Amadja Makutsa David | Full Stack Software Engineer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="site-header" id="top">
    <div class="container nav-wrap">
        <a class="brand" href="#top" aria-label="Amadja Makutsa David home">AM<span>.</span></a>
        <button class="menu-toggle" aria-label="Open navigation" aria-expanded="false" aria-controls="main-nav">
            <span></span><span></span><span></span>
        </button>
        <nav class="main-nav" id="main-nav">
            <a href="#about">About</a>
            <a href="#expertise">Expertise</a>
            <a href="#projects">Projects</a>
            <a href="#experience">Experience</a>
            <a href="#education">Education</a>
            <a class="nav-contact" href="#contact">Let's talk <span>↗</span></a>
        </nav>
    </div>
</header>

<main>
<section class="hero section">
    <div class="container hero-grid">
        <div class="hero-copy reveal">
            <div class="eyebrow"><span class="eyebrow-line"></span> SOFTWARE ENGINEERING & DIGITAL SOLUTIONS</div>
            <p class="hero-kicker">Hello, I'm</p>
            <h1>Amadja Makutsa <span>David.</span></h1>
            <h2>Full Stack Software Engineer <i>·</i> Systems Architect <i>·</i> IT Solutions Specialist</h2>
            <p class="hero-description">I design and build practical digital products, database-driven applications and technology solutions that help organizations work smarter.</p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="#projects">Explore my work <span>↗</span></a>
                <a class="btn btn-outline" href="#contact">Get in touch</a>
            </div>
            <div class="hero-meta">
                <span><b class="status-dot"></b> Based in Kampala, Uganda</span>
                <a href="https://github.com/Amadja" target="_blank" rel="noopener">GitHub profile ↗</a>
            </div>
        </div>
        <div class="hero-visual reveal">
            <div class="visual-card">
                <div class="visual-top"><span></span><span></span><span></span><small>developer.profile</small></div>
                <div class="code-window">
                    <p><span class="code-muted">01</span> <span class="code-purple">const</span> developer = {</p>
                    <p><span class="code-muted">02</span> &nbsp; name: <span class="code-green">'Amadja David'</span>,</p>
                    <p><span class="code-muted">03</span> &nbsp; role: <span class="code-green">'Software Engineer'</span>,</p>
                    <p><span class="code-muted">04</span> &nbsp; location: <span class="code-green">'Kampala, Uganda'</span>,</p>
                    <p><span class="code-muted">05</span> &nbsp; focus: [</p>
                    <p><span class="code-muted">06</span> &nbsp; &nbsp; <span class="code-green">'Web applications'</span>,</p>
                    <p><span class="code-muted">07</span> &nbsp; &nbsp; <span class="code-green">'Systems development'</span>,</p>
                    <p><span class="code-muted">08</span> &nbsp; &nbsp; <span class="code-green">'Digital solutions'</span></p>
                    <p><span class="code-muted">09</span> &nbsp; ]</p>
                    <p><span class="code-muted">10</span> };</p>
                    <div class="code-cursor"></div>
                </div>
                <div class="visual-footer"><span class="footer-check">✓</span> Turning ideas into working systems</div>
            </div>
            <div class="floating-chip chip-one"><span>PHP</span> Backend development</div>
            <div class="floating-chip chip-two"><span>SQL</span> Database design</div>
            <div class="hero-orbit orbit-one"></div><div class="hero-orbit orbit-two"></div>
        </div>
    </div>
    <div class="container hero-bottom"><span>SCROLL TO EXPLORE</span><span class="scroll-line"></span><span>01 / 06</span></div>
</section>

<section class="trust-strip">
    <div class="container trust-inner">
        <span>BUILDING WITH</span><b>PHP</b><b>MYSQL</b><b>JAVASCRIPT</b><b>HTML5 & CSS3</b><b>GIT & GITHUB</b>
    </div>
</section>

<section class="section section-soft" id="about">
    <div class="container two-col">
        <div class="section-heading reveal">
            <p class="eyebrow">01 / ABOUT ME</p>
            <h2>Engineering ideas into <span>useful technology.</span></h2>
            <p class="section-lead">A practical approach to software, systems and solving real-world problems.</p>
        </div>
        <div class="about-copy reveal">
            <p class="large-copy">I am a software developer and technology professional with a background in Computer Engineering and experience across web application development, database management, IT systems and digital production.</p>
            <p>My work spans the development lifecycle—from understanding a requirement and planning a solution to structuring data, building application features, testing and deployment. I primarily work with PHP, MySQL, JavaScript, HTML and CSS.</p>
            <p>I also bring an operational perspective from working with organizations and digital media environments. This helps me understand how technology must perform for the people and teams who depend on it.</p>
            <div class="about-facts">
                <div><strong>Kampala</strong><span>Uganda</span></div>
                <div><strong>Full stack</strong><span>Development focus</span></div>
                <div><strong>PHP / MySQL</strong><span>Core stack</span></div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="expertise">
    <div class="container">
        <div class="section-heading centered reveal">
            <p class="eyebrow">02 / EXPERTISE</p>
            <h2>Technical capabilities</h2>
            <p class="section-lead">The tools and disciplines I use to plan, build and support digital solutions.</p>
        </div>
        <div class="skill-grid">
            <?php $i = 0; foreach ($skills as $category => $items): $i++; ?>
            <article class="skill-card reveal">
                <div class="skill-number">0<?= $i ?></div>
                <h3><?= e($category) ?></h3>
                <ul><?php foreach ($items as $item): ?><li><span>↗</span><?= e($item) ?></li><?php endforeach; ?></ul>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-navy" id="projects">
    <div class="container">
        <div class="section-heading section-heading-light reveal">
            <p class="eyebrow">03 / SELECTED WORK</p>
            <h2>Projects built around <span>real needs.</span></h2>
            <p class="section-lead">A selection of software projects and platforms I have worked on or am developing.</p>
        </div>
        <div class="project-grid">
            <?php foreach ($projects as $project): ?>
            <article class="project-card reveal">
                <div class="project-card-top">
                    <div class="project-monogram"><?= e($project['icon']) ?></div>
                    <span class="project-number"><?= e($project['number']) ?></span>
                </div>
                <div class="project-status"><?= e($project['status']) ?></div>
                <h3><?= e($project['name']) ?></h3>
                <p class="project-type"><?= e($project['type']) ?></p>
                <p class="project-description"><?= e($project['description']) ?></p>
                <div class="tag-list"><?php foreach ($project['stack'] as $tag): ?><span><?= e($tag) ?></span><?php endforeach; ?></div>
                <a class="project-link" href="<?= e($project['url']) ?>" target="_blank" rel="noopener"><?= e($project['url_label']) ?> <span>↗</span></a>
            </article>
            <?php endforeach; ?>
        </div>
        <div class="github-callout reveal">
            <div><span class="eyebrow">MORE CODE & EXPERIMENTS</span><h3>Explore my work on GitHub.</h3></div>
            <a class="btn btn-light" href="https://github.com/Amadja" target="_blank" rel="noopener">Visit GitHub <span>↗</span></a>
        </div>
    </div>
</section>

<section class="section" id="experience">
    <div class="container">
        <div class="section-heading reveal">
            <p class="eyebrow">04 / EXPERIENCE</p>
            <h2>Professional journey</h2>
            <p class="section-lead">Technology, communication and programme leadership experience.</p>
        </div>
        <div class="timeline">
            <article class="timeline-item reveal">
                <div class="timeline-date">2023 — PRESENT</div>
                <div class="timeline-content"><span class="timeline-dot"></span><h3>Founder <span>Unity Media UG</span></h3><p class="timeline-location">Uganda</p><ul><li>Lead a digital media and technology-oriented business.</li><li>Work on website development, digital solutions and online business presence.</li><li>Coordinate technical projects and digital service delivery.</li></ul></div>
            </article>
            <article class="timeline-item reveal">
                <div class="timeline-date">APR 2023 — PRESENT</div>
                <div class="timeline-content"><span class="timeline-dot"></span><h3>Communication & Production Director <span>Sojourn Church Uganda</span></h3><p class="timeline-location">Uganda</p><ul><li>Manage technical communication and production operations.</li><li>Coordinate livestreaming, projection, sound and digital media production.</li><li>Produce and edit video content and support digital publishing.</li><li>Troubleshoot production technology and infrastructure.</li></ul></div>
            </article>
            <article class="timeline-item reveal">
                <div class="timeline-date">2022 — 2024</div>
                <div class="timeline-content"><span class="timeline-dot"></span><h3>Programme Director / Manager <span>VRC</span></h3><p class="timeline-location">Uganda · Part-time</p><ul><li>Supported programme coordination and operational activities.</li><li>Contributed to programme implementation and organizational objectives.</li></ul></div>
            </article>
        </div>
    </div>
</section>

<section class="section section-soft" id="education">
    <div class="container education-layout">
        <div class="section-heading reveal">
            <p class="eyebrow">05 / EDUCATION</p>
            <h2>Learning as a <span>foundation.</span></h2>
            <p class="section-lead">Academic training supporting my work in software and technology.</p>
        </div>
        <div class="education-list reveal">
            <article><span class="education-icon">01</span><div><h3>Bachelor's Degree in Computer Engineering</h3><p>Kampala International University</p><small>2021 – 2024</small></div></article>
            <article><span class="education-icon">02</span><div><h3>Diploma in Information Technology Management</h3><p>Qualification</p></div></article>
            <article><span class="education-icon">03</span><div><h3>Certificate in Computer Engineering</h3><p>Harvan International School of Business and Vocational Studies</p></div></article>
        </div>
    </div>
</section>

<section class="section contact-section" id="contact">
    <div class="container contact-grid">
        <div class="contact-copy reveal">
            <p class="eyebrow">06 / CONTACT</p>
            <h2>Have a project or opportunity in mind?</h2>
            <p class="section-lead">Let's discuss how thoughtful software and technology can help move it forward.</p>
            <div class="contact-details">
                <a href="mailto:amadjamakutsadav@gmail.com"><span class="contact-icon">@</span><span><small>EMAIL</small>amadjamakutsadav@gmail.com</span></a>
                <a href="tel:+256759247492"><span class="contact-icon">☎</span><span><small>PHONE</small>+256 759 247 492</span></a>
                <a href="tel:+256771405237"><span class="contact-icon">☎</span><span><small>ALTERNATIVE PHONE</small>+256 771 405 237</span></a>
                <a href="https://github.com/Amadja" target="_blank" rel="noopener"><span class="contact-icon">⌘</span><span><small>GITHUB</small>github.com/Amadja</span></a>
            </div>
        </div>
        <div class="contact-form-wrap reveal">
            <h3>Send a message</h3>
            <p>Use the form below and I'll get back to you.</p>
            <?php if ($contactStatus === 'success'): ?><div class="alert alert-success">Thank you. Your message has been received.</div><?php elseif ($contactStatus === 'error'): ?><div class="alert alert-error">Your message could not be sent. Please try again or email me directly.</div><?php endif; ?>
            <form action="contact.php" method="post" class="contact-form">
                <input type="hidden" name="csrf_token" value="<?= e($_SESSION['csrf_token']) ?>">
                <div class="honeypot" aria-hidden="true"><label>Leave this field empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
                <label for="name">Your name</label><input id="name" name="name" type="text" maxlength="100" required placeholder="Jane Doe">
                <label for="email">Email address</label><input id="email" name="email" type="email" maxlength="190" required placeholder="jane@example.com">
                <label for="subject">Subject</label><input id="subject" name="subject" type="text" maxlength="150" required placeholder="How can we work together?">
                <label for="message">Message</label><textarea id="message" name="message" rows="5" maxlength="5000" required placeholder="Tell me a little about your project..."></textarea>
                <button class="btn btn-primary form-submit" type="submit">Send message <span>↗</span></button>
                <small class="form-note">Your details are used only to respond to your enquiry.</small>
            </form>
        </div>
    </div>
</section>
</main>

<footer class="site-footer">
    <div class="container footer-inner">
        <a class="brand brand-footer" href="#top">AM<span>.</span></a>
        <p>© <?= date('Y') ?> Amadja Makutsa David. All rights reserved.</p>
        <a href="#top">Back to top ↑</a>
    </div>
</footer>
<script src="assets/script.js"></script>
</body>
</html>
