<?php function navItem($label, $href, $id, $active)
{
    $class = ($active === $id) ? 'nav-item active' : 'nav-item';
    echo '<a href="' . $href . '" class="' . $class . '">
            <span class="nav-icon">' . '</span>' . $label . '
          </a>';
}

?>
<?php $active = $sidebarActive ?? ''; ?>
<aside class="sidebar" id="sidebar">
    <div class="sidebar-logo">
        <div class="sidebar-logo-text"><span>Snap</span> Gvng Ent</div>
        <span class="sidebar-badge">Producer</span>
    </div>
    <nav class="sidebar-nav">
        <span class="nav-section-label">Main</span>
        <?php navItem('Dashboard', ROOT . '/producer', 'home', $active); ?>
        <?php navItem('My Beats', ROOT . '/beats', 'beats', $active); ?>
        <?php navItem('Artists', ROOT . '/artists', 'artists', $active); ?>
        <span class="nav-section-label">Account</span>
        <?php navItem('Profile', ROOT . '/profile', 'profile', $active); ?>
    </nav>
    <div class="sidebar-footer">
        <a id="logout" class="nav-item logout">
            <span class="nav-icon">⏻</span> Logout
        </a>
    </div>
</aside>
<div class="sidebar-overlay" id="sidebarOverlay"></div>