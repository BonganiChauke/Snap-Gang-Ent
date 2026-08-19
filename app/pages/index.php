<!-- // app/pages/index.php -->
<?php
require_once __DIR__ . '/../core/config.php';;
include INCLUDES . 'header.php';

?>

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
                        <label for="firstName">First Name </label>
                        <input type="text" id="firstName" name="firstName" placeholder="John"
                             required>
                        <span class="helper-text" id="firstName-helper"></span>
                        <span class="error-text" id="firstName-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name </label>
                        <input type="text" id="lastName" name="lastName" placeholder="Doe"
                             required>
                        <span class="helper-text" id="lastName-helper"></span>
                        <span class="error-text" id="lastName-error"></span>
                    </div>
                </div>

                <!-- email and phone  -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="john@example.com"
                              required>
                        <span class="helper-text" id="email-helper"></span>
                        <span class="error-text" id="email-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="+27 00 000 0000"
                            >
                        <span class="helper-text" id="phone-helper"></span>
                        <span class="error-text" id="phone-error"></span>
                    </div>
                </div>

                <!-- message  -->
                <div class="form-group">
                    <label for="message">
                        Message
                    </label>
                    <textarea id="message" name="message"
                        placeholder="Tell us about yourself, your project, or how we can help..."
                          maxlength="250" required></textarea>
                    <span class="helper-text" id="message-helper"></span>
                    <span class="error-text" id="message-error"></span>
                </div>

                <!-- submit button  -->
                <button type="button" class="form-submit">Send Message</button>

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
<section id="music">

</section>

<!-- section separator  -->
<div class="section-sep" aria-hidden="true"></div>

<!-- cta section -->
<section id="cta" aria-label="Subscribe">

    <!-- <div class="cta-bg-word" aria-hidden="true">SUBSCRIBE</div> -->

    <div class="cta-inner">

        <!-- Left: text -->
        <div class="cta-text">
            <div class="cta-badge">Stay in the Loop</div>

            <h2 class="cta-title">
                Never Miss a<br>
                <span class="accent-red">Drop</span> or <span class="accent-blue">Release</span>
            </h2>

            <p class="cta-subtitle">
                Join the Snap Gvng Ent inner circle. Be the first to hear new music,
                get exclusive artist updates, early access to events, and label news
                delivered straight to your inbox.
            </p>
        </div>

        <!-- Right: form -->
        <div class="cta-form-col">

            <div class="subscribe-form" id="subscribeForm">
                <input type="email" id="subEmail" class="subscribe-input" placeholder="Enter your email address"
                    autocomplete="email" aria-label="Email address">
                <button type="button" class="subscribe-btn" id="subscribeBtn">
                    Subscribe
                </button>
            </div>

            <div class="sub-error-text" id="subEmailError"></div>
            <div class="sub-success" id="subSuccess">
                ✓ &nbsp; You're in! Welcome to the Snap Gvng Ent family.
            </div>

            <div class="cta-perks">
                <div class="cta-perk"><span class="cta-perk-dot"></span>No spam, ever</div>
                <div class="cta-perk"><span class="cta-perk-dot"></span>Unsubscribe anytime</div>
                <div class="cta-perk"><span class="cta-perk-dot"></span>Exclusive content</div>
                <div class="cta-perk"><span class="cta-perk-dot"></span>Early access to events</div>
            </div>

        </div>

    </div>
</section>

<?php

include(INCLUDES . 'footer.php');
?>