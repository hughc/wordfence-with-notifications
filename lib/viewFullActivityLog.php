<?php if(! wordfence::isAdmin()){ exit(); } ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel='stylesheet' id='wordfence-main-style-css'  href='<?php echo wfUtils::getBaseURL(); ?>/css/fullLog.css?ver=<?php echo wfUtils::myVersion(); ?>' type='text/css' media='all' />
<style type="text/css">

</style>
<body>
<h1>Wordfence Full Activity Log</h1>
<?php
$db = new wfDB();
global $wpdb;
$table = $wpdb->base_prefix . 'wfStatus';
$q = $db->query("select ctime, level, type, msg from $table order by ctime desc");
while($r = mysql_fetch_assoc($q)){
	echo '<div' . ($r['type'] == 'error' ? ' class="error"' : '') . '>[' . date('M d H:i:s', $r['ctime']) . ':' . $r['ctime'] . ':' . $r['level'] . ':' . $r['type'] . ']&nbsp;' . htmlspecialchars($r['msg']) . "</div>\n";
}
?>
</body>
</html>
<?php exit(0); ?>
