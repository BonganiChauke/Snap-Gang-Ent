<?php
require_once __DIR__ . '/../../app/core/config.php';

$pageTitle     = 'Producer Portal — Snap Gvng Ent';
$sidebarActive = 'upload';
$topbarTitle   = 'Upload Beat';

include(INCLUDES . 'head.php');
?>
<div class="shell">
    <?php include(INCLUDES . 'sidebar_producer.php'); ?>
    <div class="main">
        <?php include(INCLUDES . 'topbar.php'); ?>
        <main class="content">

            <!-- producer upload form here -->

        </main>
        
    </div>
</div>

<!-- footer  -->
<?php
$pageFooter  = 'Producer';
include(INCLUDES . 'dashboard_footer.php');
?>