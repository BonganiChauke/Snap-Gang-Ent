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

            <div class="page-header">
                <span class="page-label">Producer Portal</span>
                <h1 class="page-title">Upload a Beat</h1>
                <p class="page-subtitle">Upload your production and assign it to an artist on the roster.</p>
            </div>

            <!-- producer upload form here -->
            <!-- Alert -->
            <div class="producer-alert" id="producerAlert"></div>

            <form id="producerForm" novalidate>
                <div class="producer-grid">

                    <!-- ── Left: Upload + beat details ── -->
                    <div>

                        <!-- Upload drop zone -->
                        <div class="upload-area" id="uploadArea">
                            <span class="upload-icon">🎵</span>
                            <p class="upload-text">Drag &amp; drop your beat here</p>
                            <p class="upload-sub">or <span class="upload-browse">browse files</span></p>
                            <p class="upload-formats">MP3 · WAV · FLAC · AAC · OGG &nbsp;|&nbsp; Max 50 MB</p>
                        </div>
                        <input type="file" id="beatFile" name="beatFile" accept=".mp3,.wav,.ogg,.flac,.aac,audio/*"
                            style="display:none">

                        <!-- Beat title -->
                        <div class="form-group">
                            <label for="beatTitle">Beat Title <span class="required-star">*</span></label>
                            <input type="text" id="beatTitle" name="beatTitle" placeholder="e.g. Cold Summer Night">
                        </div>

                        <!-- BPM + Key -->
                        <div class="form-row">
                            <div class="form-group">
                                <label for="beatBpm">BPM</label>
                                <input type="number" id="beatBpm" name="beatBpm" placeholder="e.g. 140" min="40"
                                    max="300">
                            </div>
                            <div class="form-group">
                                <label for="beatKey">Key / Scale</label>
                                <select id="beatKey" name="beatKey">
                                    <option value="">Select key…</option>
                                    <option>A Minor</option>
                                    <option>A Major</option>
                                    <option>B Minor</option>
                                    <option>B Major</option>
                                    <option>C Minor</option>
                                    <option>C Major</option>
                                    <option>D Minor</option>
                                    <option>D Major</option>
                                    <option>E Minor</option>
                                    <option>E Major</option>
                                    <option>F Minor</option>
                                    <option>F Major</option>
                                    <option>G Minor</option>
                                    <option>G Major</option>
                                </select>
                            </div>
                        </div>

                        <!-- Notes -->
                        <div class="form-group">
                            <label for="beatNotes">Producer Notes</label>
                            <textarea id="beatNotes" name="beatNotes"
                                placeholder="Mood, instruments, inspiration, usage rights…"></textarea>
                        </div>

                    </div>

                    <!-- ── Right: Assignment ── -->
                    <div>
                        <div class="panel-card">

                            <div class="panel-header">
                                <h3>Assign to Artist</h3>
                                <span class="panel-header-badge">Required</span>
                            </div>

                            <div class="panel-body">

                                <!-- Genre -->
                                <div class="form-group">
                                    <label for="beatGenre">Genre <span class="required-star">*</span></label>
                                    <select id="beatGenre" name="beatGenre">
                                        <option value="">Select genre…</option>
                                        <option>Hip-Hop</option>
                                        <option>Afro-Trap</option>
                                        <option>Rap</option>
                                        <option>R&amp;B</option>
                                        <option>Drill</option>
                                        <option>Soul</option>
                                        <option>Trap</option>
                                        <option>Gospel</option>
                                        <option>Gqom</option>
                                        <option>Amapiano</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                                <!-- Artist -->
                                <div class="form-group">
                                    <label for="beatArtist">Artist <span class="required-star">*</span></label>
                                    <select id="beatArtist" name="beatArtist">
                                        <option value="">Select artist…</option>
                                        <option>AJ Wavez</option>
                                        <option>K-Solo</option>
                                        <option>MC Throne</option>
                                        <option>Lyra</option>
                                        <option>Snap Collective</option>
                                    </select>
                                </div>

                                <!-- Exclusivity -->
                                <div class="form-group">
                                    <label for="beatLicense">License Type <span class="required-star">*</span></label>
                                    <select id="beatLicense" name="beatLicense">
                                        <option value="">Select license…</option>
                                        <option>Exclusive</option>
                                        <option>Non-Exclusive</option>
                                        <option>Label Use Only</option>
                                        <option>Free for Roster</option>
                                    </select>
                                </div>

                                <!-- Price -->
                                <div class="form-group">
                                    <label for="beatPrice">Price (ZAR) — optional</label>
                                    <input type="number" id="beatPrice" name="beatPrice" placeholder="e.g. 1500"
                                        min="0">
                                </div>

                                <!-- Tags -->
                                <div class="form-group">
                                    <label for="beatTags">Tags — comma separated</label>
                                    <input type="text" id="beatTags" name="beatTags"
                                        placeholder="e.g. dark, melodic, 808s">
                                </div>

                                <!-- Submit -->
                                <button type="submit" class="btn-upload" id="submitBeatBtn">
                                    Upload Beat
                                </button>

                            </div>
                        </div>
                    </div>

                </div>

        </div>
        </form>

    </div>

</div>
</div>

<!-- footer  -->
<?php
$pageFooter = 'Producer';
include(INCLUDES . 'dashboard_footer.php');
?>