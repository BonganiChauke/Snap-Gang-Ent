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

            <!-- Stats grid -->
            <div class="stats-grid">

                <div class="stat-card red">
                    <div class="stat-icon">🎵</div>
                    <div class="stat-value">148</div>
                    <div class="stat-label">Total Tracks</div>
                    <span class="stat-change up">+8 this month</span>
                </div>

                <div class="stat-card blue">
                    <div class="stat-icon">🎤</div>
                    <div class="stat-value">24</div>
                    <div class="stat-label">Active Artists</div>
                    <span class="stat-change up">+3 this month</span>
                </div>

                <div class="stat-card white">
                    <div class="stat-icon">👥</div>
                    <div class="stat-value">5.2k</div>
                    <div class="stat-label">Subscribers</div>
                    <span class="stat-change up">+240 this month</span>
                </div>

                <div class="stat-card mix">
                    <div class="stat-icon">▶</div>
                    <div class="stat-value">89k</div>
                    <div class="stat-label">Total Streams</div>
                    <span class="stat-change down">-2% this week</span>
                </div>

            </div>

            <!-- Content row: tracks + activity -->
            <div class="content-row">

                <!-- Recent tracks -->
                <div class="panel-card">
                    <div class="panel-header">
                        <h3>Recent Releases</h3>
                        <button class="panel-action">View All</button>
                    </div>
                    <table class="tracks-table">
                        <thead>
                            <tr>
                                <th>Track</th>
                                <th>Category</th>
                                <th>Streams</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="track-info">
                                        <div class="track-thumb red">🎵</div>
                                        <div>
                                            <div class="track-name">No Limits</div>
                                            <div class="track-artist">AJ Wavez</div>
                                        </div>
                                    </div>
                                </td>
                                <td>Hip-Hop</td>
                                <td>12.4k</td>
                                <td><span class="track-status live">Live</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="track-info">
                                        <div class="track-thumb blue">🎵</div>
                                        <div>
                                            <div class="track-name">Midnight Grind</div>
                                            <div class="track-artist">K-Solo</div>
                                        </div>
                                    </div>
                                </td>
                                <td>Afro-Trap</td>
                                <td>9.1k</td>
                                <td><span class="track-status live">Live</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="track-info">
                                        <div class="track-thumb white">🎵</div>
                                        <div>
                                            <div class="track-name">Legacy Run</div>
                                            <div class="track-artist">MC Throne</div>
                                        </div>
                                    </div>
                                </td>
                                <td>Rap</td>
                                <td>—</td>
                                <td><span class="track-status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="track-info">
                                        <div class="track-thumb red">🎵</div>
                                        <div>
                                            <div class="track-name">Cold Summer</div>
                                            <div class="track-artist">Lyra</div>
                                        </div>
                                    </div>
                                </td>
                                <td>R&amp;B</td>
                                <td>—</td>
                                <td><span class="track-status draft">Draft</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="track-info">
                                        <div class="track-thumb blue">🎵</div>
                                        <div>
                                            <div class="track-name">Fire Routes</div>
                                            <div class="track-artist">Snap Collective</div>
                                        </div>
                                    </div>
                                </td>
                                <td>Hip-Hop</td>
                                <td>7.8k</td>
                                <td><span class="track-status live">Live</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Activity feed -->
                <div class="panel-card">
                    <div class="panel-header">
                        <h3>Activity</h3>
                        <button class="panel-action">Clear</button>
                    </div>
                    <div class="activity-list">
                        <div class="activity-item">
                            <span class="activity-dot red"></span>
                            <span class="activity-text"><strong>AJ Wavez</strong> submitted a new track for
                                review.</span>
                            <span class="activity-time">2m ago</span>
                        </div>
                        <div class="activity-item">
                            <span class="activity-dot green"></span>
                            <span class="activity-text"><strong>No Limits</strong> went live on all platforms.</span>
                            <span class="activity-time">1h ago</span>
                        </div>
                        <div class="activity-item">
                            <span class="activity-dot blue"></span>
                            <span class="activity-text"><strong>MC Throne</strong> joined the roster.</span>
                            <span class="activity-time">3h ago</span>
                        </div>
                        <div class="activity-item">
                            <span class="activity-dot white"></span>
                            <span class="activity-text"><strong>48 new subscribers</strong> joined this week.</span>
                            <span class="activity-time">5h ago</span>
                        </div>
                        <div class="activity-item">
                            <span class="activity-dot red"></span>
                            <span class="activity-text"><strong>Cold Summer</strong> moved to draft.</span>
                            <span class="activity-time">Yesterday</span>
                        </div>
                        <div class="activity-item">
                            <span class="activity-dot blue"></span>
                            <span class="activity-text"><strong>Lyra</strong> updated her profile bio.</span>
                            <span class="activity-time">Yesterday</span>
                        </div>
                        <div class="activity-item">
                            <span class="activity-dot green"></span>
                            <span class="activity-text"><strong>Fire Routes</strong> reached 7k streams.</span>
                            <span class="activity-time">2 days ago</span>
                        </div>
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