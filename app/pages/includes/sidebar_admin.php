<?php
/* $sidebarActive is set by the page before including this file
   e.g. $sidebarActive = 'music'; */
$active = $sidebarActive ?? '';

function navItem($label, $href, $id, $active) {
    $class = ($active === $id) ? 'nav-item active' : 'nav-item';
    echo '<a href="' . $href . '" class="' . $class . '">
            <span class="nav-icon">' . '</span>' . $label . '
          </a>';
}
?>

<!-- menu side for admin page -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-logo">
        <div class="sidebar-logo-text"><span>Snap</span> Gvng Ent</div>
        <span class="sidebar-badge">Admin</span>
    </div>
    <nav class="sidebar-nav">
        <span class="nav-section-label">Main</span>
        <?php navItem('Home', ROOT.'/admin','home',$active); ?>
        <?php navItem('Music', ROOT . '/music','music',$active); ?>
        <?php navItem('Artists',ROOT . '/artists','artists',$active); ?>
        <?php navItem('Categories', ROOT . '/categories', 'categories', $active); ?>
        <span class="nav-section-label">Account</span>
        <?php navItem('Profile', ROOT . '/profile','profile',$active); ?>
    </nav>
    <div class="sidebar-footer">
        <a href="<?= ROOT ?>/logout" class="nav-item logout">
            <span class="nav-icon">⏻</span> Logout
        </a>
    </div>
</aside>
<div class="sidebar-overlay" id="sidebarOverlay"></div>