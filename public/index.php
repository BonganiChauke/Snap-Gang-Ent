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
    <link rel="stylesheet" href="./assets/css/style.css">
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
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#contact">Contact us</a></li>
                <li><a href="#artists">Artists</a></li>
                <li><a href="#music">Music</a></li>
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
            <a href="#hero" class="active" onclick="closeNav()">Home</a>
            <a href="#about" onclick="closeNav()">About us</a>
            <a href="#contact" onclick="closeNav()">Contact us</a>
            <a href="#artists" onclick="closeNav()">Artists</a>
            <a href="#music" onclick="closeNav()">Music</a>
        </div>

        <!-- HERO SECTION -->
        <section id="hero" aria-label="Hero">

            <!-- Background grid -->
            <div class="hero-bg-grid" aria-hidden="true"></div>

            <!-- Accent lines -->
            <div class="hero-accent-top" aria-hidden="true"></div>
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
    <main></main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <!-- custom js  -->
     <script src="./assets/js/script.js"></script>
</body>

</html>