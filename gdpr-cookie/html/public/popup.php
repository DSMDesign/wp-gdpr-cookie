<link href="<?php echo plugin_dir_url(__FILE__).'css/public.css'; ?>" rel="stylesheet" type="text/css">
<div class="scw-cookie<?= $this->decisionMade ? ' scw-cookie-out' : ''; ?>">
    <div class="scw-cookie-panel-toggle scw-cookie-panel-toggle-<?= $this->config['panel_toggle_position']; ?>"
        onclick="scwCookiePanelToggle()"
    >
        <span class="gdprc-icon gdprc-icon-cookie"></span>
    </div>
    <div class="scw-cookie-content">
        <div class="scw-cookie-message">
            <?php $liveChatMessage = $this->config['showLiveChatMessage'] ? ', provide live chat' : ''; ?>
            We use cookies to personalise content<?= $liveChatMessage; ?> and to analyse our web traffic.
        </div>
        <div class="scw-cookie-decision">
            <div class="scw-cookie-btn" onclick="scwCookieHide()">OK</div>
            <div class="scw-cookie-settings scw-cookie-tooltip-trigger"
                onclick="scwCookieDetails()"
                data-label="Cookie settings"
            >
                <span class="gdprc-icon gdprc-icon-settings"></span>
            </div>
            <div class="scw-cookie-policy scw-cookie-tooltip-trigger" data-label="Cookie policy">
                <a href="<?= $this->config['cookie_policy_url']; ?>">
                    <span class="gdprc-icon gdprc-icon-policy"></span>
                </a>
            </div>
        </div>
        <div class="scw-cookie-details">
            <div class="scw-cookie-details-title">Manage your cookies</div>
            <div class="scw-cookie-toggle">
                <div class="scw-cookie-name">Essential site cookies</div>
                <label class="scw-cookie-switch checked disabled">
                    <input type="checkbox" name="essential" checked="checked" disabled="disabled">
                    <div></div>
                </label>
            </div>
            <?php foreach ($this->enabledSnippets() as $slug => $label) { ?>
                <div class="scw-cookie-toggle">
                    <div class="scw-cookie-name" onclick="scwCookieToggle(this)"><?= $label; ?></div>
                    <label class="scw-cookie-switch<?= $this->isAllowed($slug) ? ' checked' : ''; ?>">
                        <input type="checkbox"
                        name="<?= $slug; ?>"
                        <?= $this->isAllowed($slug) ? 'checked="checked"' : ''; ?>
                        >
                        <div></div>
                    </label>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<script>
    gdprCookieDir = "<?php echo $this->pluginDir; ?>";
</script>
<script src="<?php echo plugin_dir_url(__FILE__).'js/js-cookie.js'; ?>" type="text/javascript"></script>
<script src="<?php echo plugin_dir_url(__FILE__).'js/public.js'; ?>" type="text/javascript"></script>
