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
    <link rel="stylesheet" href="../assets/css/s">
</head>

<body>
    <header>
        <!-- nav bar -->
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Snap Gvng Ent</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                            <!-- home nav link -->
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>

                            <!-- about us nav link -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">About us</a>
                            </li>

                            <!-- contact us nav link -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact us</a>
                            </li>

                            <!-- artists nav link -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">Artists</a>
                            </li>

                            <!-- music nav link -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">Music</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- HERO SECTION -->
        <section id="hero"
            class="hero-section position-relative d-flex align-items-center justify-content-center text-center text-white">

            <!-- Background Image with Overlay -->
            <div class="hero-bg">
                <img src="https://via.placeholder.com/1920x1080/0f0f0f/ffffff?text=Snap+Gvng+Ent"
                    alt="Snap Gvng Ent Background" class="img-fluid w-100 h-100 object-fit-cover">
            </div>

            <!-- Dark Overlay -->
            <div class="hero-overlay"></div>

            <div class="container position-relative z-3">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">

                        <h1 class="display-3 display-md-2 display-lg-1 fw-bold mb-4 hero-title">
                            SNAP GVNG ENT
                        </h1>

                        <p class="lead fs-4 fs-lg-3 mb-5 hero-subtitle">
                            Where Talent Meets Legacy<br>
                            <span class="text-warning">Music • Culture • Movement</span>
                        </p>

                        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                            <a href="#artists" class="btn btn-warning btn-lg px-5 py-3 fw-semibold">
                                Discover Artists
                            </a>
                            <a href="#music" class="btn btn-outline-light btn-lg px-5 py-3 fw-semibold">
                                Listen Now
                            </a>
                        </div>

                        <!-- Optional Scroll Indicator -->
                        <div class="mt-5 pt-4">
                            <a href="#about" class="text-white text-decoration-none scroll-indicator">
                                <i class="bi bi-chevron-down fs-1"></i>
                            </a>
                        </div>

                    </div>
                </div>
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
</body>

</html>