<div class="topbar">
    <div class="topbar-left">
        <button class="hamburger-btn" id="hamburgerBtn" aria-label="Toggle sidebar">
            <span></span><span></span><span></span>
        </button>
        <span class="topbar-title"><?= $topbarTitle ?? 'Dashboard' ?></span>
    </div>
    <div class="topbar-right">
        <div class="topbar-avatar" title="Profile">
            <?= strtoupper(substr($_SESSION['username'] ?? 'A', 0, 1)) ?>
        </div>
    </div>
</div>