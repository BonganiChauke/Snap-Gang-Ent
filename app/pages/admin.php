<!-- header -->
<?php
require_once __DIR__ . '/../../app/core/config.php';
$pageTitle = 'Dashboard — Snap Gvng Ent';
include(INCLUDES . 'head.php');
?>


<div class="shell">
    <?php include(INCLUDES . 'sidebar_admin.php'); ?>
    <div class="main">
        <?php include(INCLUDES . 'topbar.php'); ?>
        <main class="content">

            <!-- page-specific content here -->
        
    </div>
</div>













<!-- footer  -->
<?php
$pageFooter  = 'Admin';
include(INCLUDES . 'dashboard_footer.php');
?>