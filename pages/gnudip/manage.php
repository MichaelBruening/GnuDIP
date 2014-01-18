<?php
$gnudipurl = elgg_get_plugin_setting('gnudipurl', gnudip);
$topbar = elgg_view('page/elements/topbar', $vars);
$body = elgg_view('page/elements/body', $vars);

// Set the content type
header("Content-type: text/html; charset=UTF-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php echo elgg_view('page/elements/head', $vars); ?>
</head>
<body>
<div class="elgg-page elgg-page-default">
<div class="elgg-page-topbar">
<div class="elgg-inner">
<?php echo $topbar; ?>
</div>
</div>

<!-- external page embed -->
<iframe src="<?php echo $gnudipurl; ?>" style='position:relative;top:0px;left:0px;width:100%;height:700px;'/>

</div>

</body>
</html>
