<?php
require_once __DIR__ . '/../../app/core/config.php';
// session_start();

$pageTitle     = 'My Beats — Snap Gvng Ent';
$sidebarActive = 'beats';
$topbarTitle   = 'My Beats';

$artistId = $_SESSION['user_id'] ?? 0;

/* Replace with your real DB query */
// $beats = $db->query("SELECT * FROM beats WHERE artist_id = ?", [$artistId]);

include(INCLUDES . 'head.php');
?>
<div class="shell">
    <?php include(INCLUDES . 'sidebar_artist.php'); ?>
    <div class="main">
        <?php include(INCLUDES . 'topbar.php'); ?>
        <main class="content">

            <div class="page-header">
                <span class="page-label">My Beats</span>
                <h1 class="page-title">Assigned to You</h1>
            </div>

            <div class="panel-card">
                <table class="beats-table">
                    <thead>
                        <tr>
                            <th>Beat</th>
                            <th>Genre</th>
                            <th>BPM</th>
                            <th>Key</th>
                            <th>License</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($beats)): ?>
                            <?php foreach ($beats as $beat): ?>
                            <tr>
                                <td>
                                    <div class="track-info">
                                        <div class="track-thumb red">🎵</div>
                                        <div>
                                            <div class="track-name"><?= htmlspecialchars($beat['title']) ?></div>
                                            <div class="track-artist"><?= htmlspecialchars($beat['producer']) ?></div>
                                        </div>
                                    </div>
                                </td>
                                <td><?= htmlspecialchars($beat['genre']) ?></td>
                                <td><?= htmlspecialchars($beat['bpm'])   ?></td>
                                <td><?= htmlspecialchars($beat['key'])   ?></td>
                                <td><?= htmlspecialchars($beat['license']) ?></td>
                                <td>
                                    <span class="track-status <?= $beat['status'] ?>">
                                        <?= ucfirst($beat['status']) ?>
                                    </span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" style="text-align:center;color:#444;padding:24px;font-size:13px;">
                                    No beats assigned to you yet.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </main>
        
    </div>
</div>

<!-- footer  -->
<?php
$pageFooter  = 'Artist';
include(INCLUDES . 'dashboard_footer.php');
?>