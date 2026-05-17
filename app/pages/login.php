<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    <!-- custom css style file link -->
    <link rel="stylesheet" href="./assets/css/style.css?344">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>

    <!-- main content -->
    <main>
        <div class="page">
            <!-- Left brand panel -->
            <div class="brand-panel">

                <div class="brand-content">

                    <!-- Logo -->
                    <a href="index.html" class="brand-logo">
                        <span>Snap</span> Gvng Ent
                    </a>

                    <!-- Headline -->
                    <div class="brand-headline">
                        <p class="brand-label">Members Portal</p>
                        <h2 class="brand-title">
                            Welcome<br>
                            <span class="accent-red">Back</span> to the<br>
                            <span class="accent-blue">Family</span>
                        </h2>
                        <div class="brand-divider"></div>
                        <p class="brand-desc">
                            Sign in to access exclusive content, artist updates,
                            early releases, and everything the Snap Gvng Ent
                            inner circle has to offer.
                        </p>
                    </div>

                    <!-- Footer badges -->
                    <div class="brand-footer">
                        <div class="member-avatars">
                            <div class="member-avatar">A</div>
                            <div class="member-avatar">K</div>
                            <div class="member-avatar">M</div>
                        </div>
                        <div class="member-text">
                            <strong>Join 500+ members</strong>
                            already inside
                        </div>
                    </div>

                </div>
            </div>

            <!-- ── Right form panel ─────────────────────────────── -->
            <div class="form-panel">
                <div class="form-box">

                    <div class="form-heading">
                        <h1>Sign In</h1>
                        <p>No account? <a href="#">Create one free</a></p>
                    </div>

                    <!-- Alert banner (shown on error/success) -->
                    <div class="form-alert" id="formAlert"></div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="loginEmail">Email Address</label>
                        <div class="input-wrap">
                            <input type="email" id="loginEmail" placeholder="you@example.com" autocomplete="email">
                        </div>
                        <span class="field-error" id="loginEmailError"></span>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="loginPassword">
                            Password
                            <a href="#">Forgot password?</a>
                        </label>
                        <div class="input-wrap">
                            <input type="password" id="loginPassword" placeholder="••••••••"
                                autocomplete="current-password">
                            <button type="button" class="pw-toggle" id="pwToggle"
                                aria-label="Toggle password visibility">👁</button>
                        </div>
                        <span class="field-error" id="loginPasswordError"></span>
                    </div>

                    <!-- Remember me -->
                    <!-- <div class="remember-row">
                        <div class="custom-checkbox" id="rememberBox" role="checkbox" aria-checked="false" tabindex="0">
                        </div>
                        <input type="checkbox" id="rememberInput">
                        <label class="remember-label" for="rememberInput" id="rememberLabel">Remember me for 30
                            days</label>
                    </div> -->

                    <!-- Submit -->
                    <button type="button" class="btn-login" id="loginBtn">Sign In</button>

                    <!-- Or divider -->
                    <!-- <div class="or-divider"><span>or continue with</span></div>

                     Social logins 
                    <div class="social-logins">
                        <a href="#" class="btn-social">
                            <span class="icon">G</span> Google
                        </a>
                        <a href="#" class="btn-social">
                            <span class="icon">f</span> Facebook
                        </a>
                    </div> -->

                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <!-- custom js  -->
    <script src="./assets/js/script.js" defer></script>
</body>

</html>