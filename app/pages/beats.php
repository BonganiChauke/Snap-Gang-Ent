<?php
require_once __DIR__ . '/../../app/core/config.php';

$pageTitle = 'Producer Portal — Snap Gvng Ent';
$sidebarActive = 'upload';
$topbarTitle = 'Upload Beat';

include(INCLUDES . 'head.php');
?>

<div class="shell">
    <?php include(INCLUDES . 'sidebar_producer.php'); ?>
    <div class="main">
        <?php include(INCLUDES . 'topbar.php'); ?>
        <div class="content">

            <!-- Alert -->
            <div class="producer-alert" id="producerAlert"></div>

            <div class="producer-grid">

                <!-- ── Full width: uploaded beats table ── -->
                <div class="full-width">
                    <div class="panel-card">
                        <div class="panel-header">
                            <h3>Uploaded Beats</h3>
                            <span class="panel-header-badge" id="beatCount">0 beats</span>
                        </div>
                        <div style="overflow-x:auto;">
                            <table class="beats-table">
                                <thead>
                                    <tr>
                                        <th>Beat</th>
                                        <th>Genre</th>
                                        <th>BPM</th>
                                        <th>Key</th>
                                        <th>Uploaded</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="uploadedList">
                                    <tr class="empty-row">
                                        <td colspan="7"
                                            style="text-align:center;color:#444;padding:24px;font-size:13px;">
                                            No beats uploaded yet.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
</div>

<!-- footer  -->
<?php
$pageFooter = 'Producer';
include(INCLUDES . 'dashboard_footer.php');
?>