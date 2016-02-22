
<?php if($totalCriticalIssues > 0){ ?>
<p>Critical Problems:</p>

<?php foreach($issues as $i){ if($i['severity'] == 1){ ?>
<p>* <?php echo htmlspecialchars($i['shortMsg']) ?></p>
<?php if (!empty($i['tmplData']['badURL'])): ?>
<p><img src="<?php echo sprintf("http://noc1.wordfence.com/v2.14/?v=%s&s=%s&k=%s&action=image&txt=%s", rawurlencode(wfUtils::getWPVersion()), rawurlencode(home_url()), rawurlencode(wfConfig::get('apiKey')), rawurlencode(base64_encode($i['tmplData']['badURL']))) ?>" alt="" /></p>
<?php endif ?>

<?php } } } ?>

<?php if($level == 2 && $totalWarningIssues > 0){ ?>
<p>Warnings:</p>

<?php foreach($issues as $i){ if($i['severity'] == 2){  ?>
<p>* <?php echo htmlspecialchars($i['shortMsg']) ?></p>

<?php } } } ?>