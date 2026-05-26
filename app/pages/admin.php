<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Admin Dashboard — Snap Gvng Ent </title>
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
        <nav></nav>
    </header>




    <main>

        <!-- ════════════════════════════════════════════════
         SIDEBAR
    ════════════════════════════════════════════════ -->
        <aside class="sidebar" id="sidebar" role="navigation" aria-label="Admin navigation">

            <!-- Logo -->
            <div class="sidebar-logo">
                <div>
                    <div class="sidebar-logo-text"><span>Snap</span> Gvng Ent</div>
                </div>
                <span class="sidebar-badge">Admin</span>
            </div>

            <!-- Nav links -->
            <nav class="sidebar-nav">

                <div class="nav-section-label">Main</div>

                <button class="nav-item active" onclick="setActive(this, 'Home')">
                    <span class="nav-icon">🏠</span>
                    Home
                </button>

                <button class="nav-item" onclick="setActive(this, 'Music')">
                    <span class="nav-icon">🎵</span>
                    Music
                    <span class="nav-badge">12</span>
                </button>

                <button class="nav-item" onclick="setActive(this, 'Artists')">
                    <span class="nav-icon">🎤</span>
                    Artists
                </button>

                <button class="nav-item" onclick="setActive(this, 'Categories')">
                    <span class="nav-icon">🏷</span>
                    Categories
                </button>

                <div class="nav-section-label">Account</div>

                <button class="nav-item" onclick="setActive(this, 'Profile')">
                    <span class="nav-icon">👤</span>
                    Profile
                </button>

            </nav>

            <!-- Logout -->
            <div class="sidebar-footer">
                <button class="nav-item logout" onclick="handleLogout()">
                    <span class="nav-icon">⏻</span>
                    Logout
                </button>
            </div>

            <!-- Mobile overlay -->
            <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

            <!-- Topbar -->
            <div class="topbar">
                <div class="topbar-left">
                    <button class="hamburger-btn" id="hamburgerBtn" aria-label="Toggle sidebar">
                        <span></span><span></span><span></span>
                    </button>
                    <span class="topbar-title" id="topbarTitle">Dashboard</span>
                </div>
                <div class="topbar-right">
                    <div class="topbar-search">
                        <span class="topbar-search-icon">🔍</span>
                        <input type="text" placeholder="Search…" aria-label="Search">
                    </div>
                    <div class="topbar-notif" title="Notifications">
                        🔔
                        <span class="notif-dot"></span>
                    </div>
                    <div class="topbar-avatar" title="Admin profile">A</div>
                </div>
            </div>

             <!-- Page header -->
            <div class="page-header">
                <div class="page-header-top">
                    <div>
                        <p class="page-label">Overview</p>
                        <h1 class="page-title">Dashboard</h1>
                        <p class="page-subtitle">Welcome back, Admin. Here's what's happening.</p>
                    </div>
                    <div class="header-actions">
                        <button class="btn-outline">Export</button>
                        <button class="btn-primary">+ Add Release</button>
                    </div>
                </div>
            </div>

    </main>

    <!-- footer -->
    <footer class="dash-footer">
        <!-- place footer here -->
        <p>&copy; 2026 <span>Snap Gvng Ent</span>. All rights reserved. Admin Panel.</p>
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <!-- custom js  -->
    <script src="./assets/js/script.js" defer></script>
</body>

</html>