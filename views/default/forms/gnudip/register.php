<?php
$gnudipurl = elgg_get_plugin_setting('gnudipurl', gnudip);
$gnudipdom = elgg_get_plugin_setting('gnudipdom', gnudip);
?>
<div>
    <label><?php echo elgg_echo('gnudip:hostname'); ?></label>
    <?php echo elgg_echo('gnudip:hostnamemsg', array( $gnudipdom )); ?><br />
    <?php echo elgg_view('input/text',array('name' => 'hostname')); ?>
</div>
<div>
    <label><?php echo elgg_echo('gnudip:password1') . ' '; ?></label>
    <?php echo elgg_echo('gnudip:password1msg'); ?><br />
    <?php echo elgg_view('input/password', array(
		'name' => 'password1',
		'value' => $password1,
		));
    ?>
</div>
<div>
    <label><?php echo elgg_echo('gnudip:password2') . ' '; ?></label>
    <?php echo elgg_echo('gnudip:password2msg'); ?><br />
    <?php echo elgg_view('input/password', array(
		'name' => 'password2',
		'value' => $password2,
		));
    ?>
</div>
<div>
    <?php echo elgg_view('input/submit', array('value' => elgg_echo('gnudip:submit'))); ?>
</div>
