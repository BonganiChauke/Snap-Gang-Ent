<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Snap Gvng Ent </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    <!-- custom css style file link -->
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css?344">
    <script src="<?= BASE_URL ?>js/script.js" defer></script>
</head>

<body>
    <header>
        <!-- nav bar -->
        <nav class="navbar" role="navigation" aria-label="Main navigation">

            <a class="navbar-brand" href="#">
                <span class="accent-red">Snap</span> Gvng <span class="accent-blue">Ent</span>
            </a>

            <!-- Desktop nav links -->
            <ul class="nav-links">
                <a href="<?= ROOT ?>#hero/">Home</a>
                <a href="<?= ROOT ?>/#about">About</a>
                <a href="<?= ROOT ?>/#artists">Artists</a>
                <a href="<?= ROOT ?>/#music">Music</a>
                <a href="<?= ROOT ?>/#contact">Contact</a>
            </ul>

            <ul class="nav-links">
                <a href="<?= ROOT ?>/login" class="btn-outline-blue lgn-btn">Login</a>
            </ul>

            <!-- Mobile hamburger button -->
            <button class="hamburger" aria-label="Toggle navigation" aria-expanded="false" onclick="toggleNav(this)">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </nav>

        <!-- Mobile nav drawer -->
        <div class="mobile-nav" id="mobileNav" role="menu">
            <a href="<?= ROOT ?>#hero" class="active" onclick="closeNav()">Home</a>
            <a href="<?= ROOT ?>#about" onclick="closeNav()">About us</a>
            <a href="<?= ROOT ?>#contact" onclick="closeNav()">Contact us</a>
            <a href="<?= ROOT ?>#artists" onclick="closeNav()">Artists</a>
            <a href="<?= ROOT ?>#music" onclick="closeNav()">Music</a>
            <a href="<?= ROOT ?>/login" onclick="closeNav()">Login</a>
        </div>

        <!-- HERO SECTION -->
        <section id="hero" aria-label="Hero">

            <!-- Full background image -->
            <div class="hero-bg-img" aria-hidden="true">
                <img src="<?= BASE_URL ?>images/adi-goldstein-sdtnZ4LgbWk-unsplash.jpg"
                    alt="Recording studio mixing board">
            </div>

            <!-- Background grid -->
            <div class="hero-bg-grid" aria-hidden="true"></div>

            <!-- Accent lines -->
            <div class="hero-accent-left" aria-hidden="true"></div>

            <!-- Left-aligned content -->
            <div class="hero-content">

                <div class="hero-badge">Est. — Independent Label</div>

                <h1 class="hero-title">
                    <span class="accent-red">SNAP</span><br>
                    GVNG<br>
                    <span class="accent-blue">ENT</span>
                </h1>

                <div class="hero-divider" aria-hidden="true"></div>

                <p class="hero-subtitle">Where Talent Meets Legacy</p>
                <p class="hero-tagline">Music &nbsp;·&nbsp; Culture &nbsp;·&nbsp; Movement</p>

                <div class="hero-buttons">
                    <a href="#artists" class="btn-primary-red">Discover Artists</a>
                    <a href="#music" class="btn-outline-blue">Listen Now</a>
                </div>

                <!-- <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-value">20+</span>
                        <span class="stat-label">Artists</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">100+</span>
                        <span class="stat-label">Tracks</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">5+</span>
                        <span class="stat-label">Years</span>
                    </div>
                </div> -->

            </div>

            <!-- Decorative watermark letter (right side)
            <div class="hero-right" aria-hidden="true">
                <span class="hero-watermark">S</span>
            </div> -->

            <!-- Scroll indicator -->
            <div class="scroll-down" aria-hidden="true">
                <div class="scroll-line"></div>
                <span class="scroll-text">Scroll</span>
            </div>

        </section>

    </header>

    <!-- main content sections -->
    <main>