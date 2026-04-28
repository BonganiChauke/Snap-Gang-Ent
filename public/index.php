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

            <ul class="nav-links">
                <a href="" class="btn-outline-blue lgn-btn">Login</a>
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
            <a href="" onclick="closeNav()">Login</a>
        </div>

        <!-- HERO SECTION -->
        <section id="hero" aria-label="Hero">

            <!-- Full background image -->
            <div class="hero-bg-img" aria-hidden="true">
                <img src="../public/assets/images/adi-goldstein-sdtnZ4LgbWk-unsplash.jpg"
                    alt="Recording studio mixing board">
            </div>

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

    <!-- main content sections -->
    <main>

        <!-- about us section -->
        <section id="about" aria-label="About us">

            <!-- about container -->
            <div class="about-container">
                <!-- left text content -->
                <div class="about-text">
                    <span class="section-label">Who We Are</span>
                    <h2 class="section-title">Built on Sound,<br> Driven by Culture</h2>
                    <div class="section-divider"></div>

                    <!-- about text -->
                    <p>Snap Gvng Ent is an independent music label rooted in authenticity, creativity, and community.
                        Founded with a vision to elevate raw talent into legacy-defining careers, we operate at the
                        intersection of music, culture, and movement.</p>

                    <p>We don't just sign artists we build brands, nurture voices, and create platforms for stories
                        that deserve to be heard. From the studio to the stage, every release we push carries the weight
                        of our commitment to excellence.</p>

                    <p>Our roster spans multiple genres and regions, united by one shared belief that great music
                        changes lives. We are more than a label we are a movement.</p>

                    <!-- about values -->
                    <div class="about-values">
                        <!-- value cards -->
                        <div class="value-card">
                            <h4>Authenticity</h4>
                            <p>Every artist we work with stays true to their voice and vision.</p>
                        </div>
                        <div class="value-card">
                            <h4>Legacy</h4>
                            <p>We build careers that stand the test of time, not just trends.</p>
                        </div>
                        <div class="value-card">
                            <h4>Community</h4>
                            <p>We uplift our people and invest back into the culture.</p>
                        </div>
                        <div class="value-card">
                            <h4>Excellence</h4>
                            <p>From production to promotion — we settle for nothing less.</p>
                        </div>

                    </div>

                </div>

                <!-- right text -->
                <div class="about-right">
                    <div class="about-stat-stack">
                        <div class="about-stat-row">
                            <span class="about-stat-num">20+</span>
                            <div class="about-stat-info">
                                <strong>Signed Artists</strong>
                                <span>Across multiple genres and regions</span>
                            </div>
                        </div>
                        <div class="about-stat-row">
                            <span class="about-stat-num">100+</span>
                            <div class="about-stat-info">
                                <strong>Tracks Released</strong>
                                <span>On all major streaming platforms</span>
                            </div>
                        </div>
                        <div class="about-stat-row">
                            <span class="about-stat-num">5+</span>
                            <div class="about-stat-info">
                                <strong>Years in the Game</strong>
                                <span>Building our legacy since day one</span>
                            </div>
                        </div>
                        <div class="about-stat-row">
                            <span class="about-stat-num">50+</span>
                            <div class="about-stat-info">
                                <strong>Shows & Events</strong>
                                <span>Live performances across the country</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!-- contact us section -->
        <section id="contact">

            <!-- contact container -->
            <div class="contact-container">
                <!-- left side details -->
                <div class="contact-details">
                    <span class="section-label">Get in Touch</span>
                    <h2 class="section-title">Let's Build<br>Something Great</h2>
                    <div class="section-divider"></div>
                    <p class="contact-desc">Whether you're an artist looking for a home, a brand wanting to collaborate,
                        or a fan wanting to connect our doors are open. Reach out and let's talk.</p>

                    <!-- contact info details -->
                    <div class="contact-info-list">
                        <div class="contact-info-item">
                            <div class="contact-icon"></div>
                            <div class="contact-info-text">
                                <strong>Location</strong>
                                <span>Johannesburg, South Africa</span>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-icon"></div>
                            <div class="contact-info-text">
                                <strong>Email</strong>
                                <span>info@snapgvngent.com</span>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-icon"></div>
                            <div class="contact-info-text">
                                <strong>Phone</strong>
                                <span>+27 (0) 11 000 0000</span>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-icon"></div>
                            <div class="contact-info-text">
                                <strong>Office Hours</strong>
                                <span>Mon – Fri, 09:00 – 17:00 SAST</span>
                            </div>
                        </div>
                    </div>

                    <!-- contact social media  -->
                    <div class="contact-socials">
                        <a href="#" class="social-btn" aria-label="Instagram">&#x1F4F8;</a>
                        <a href="#" class="social-btn" aria-label="Twitter / X">𝕏</a>
                        <a href="#" class="social-btn" aria-label="Facebook">f</a>
                        <a href="#" class="social-btn" aria-label="YouTube">▶</a>
                        <a href="#" class="social-btn" aria-label="SoundCloud">☁</a>
                    </div>

                </div>

                <!-- right contact form -->
                <div class="contact-form-wrap">

                    <!-- contact form -->
                    <form id="contactForm" action="" method="">
                        <!-- first name and last name -->
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" name="firstName" placeholder="John" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" name="lastName" placeholder="Doe" required>
                            </div>
                        </div>

                        <!-- email and phone  -->
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="john@example.com" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="+27 00 000 0000">
                            </div>
                        </div>

                        <!-- message  -->
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message"
                                placeholder="Tell us about yourself, your project, or how we can help..."
                                required></textarea>
                        </div>

                        <!-- submit button  -->
                        <button type="button" class="form-submit" onclick="handleSubmit()">Send Message</button>

                        <div class="form-success" id="formSuccess">
                            ✓ &nbsp; Message sent! We'll be in touch within 24–48 hours.
                        </div>

                    </form>

                </div>


            </div>


        </section>

        <!-- artists section -->
        <section id="artists">


        </section>

        <!-- music section -->
        <section id="#music">

        </section>

    </main>

    <!-- footer section -->
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