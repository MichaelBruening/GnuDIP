<?php
$gnudipurl = elgg_get_plugin_setting('gnudipurl', gnudip);
$getdomains = file_get_contents($gnudipurl);
$cnt=preg_match_all("/<option value=\"(.*)\">/U", $getdomains, $domains, PREG_SET_ORDER);
for($num=0; $num<$cnt; $num++){
    $optiondom[$num] = $domains[$num][1];
}

?>
<div>
    <label><?php echo elgg_echo('gnudip:hostname'); ?></label>
    <?php echo elgg_echo('gnudip:hostnamemsg'); ?><br />
    <?php echo elgg_view('input/text',array('name' => 'hostname')); ?>
</div>
<div>
    <label><?php echo elgg_echo('gnudip:selectdom'); ?></label><br>
    <?php echo elgg_view('input/dropdown', array(
                   'name' => 'selectdom',
                   'options' => $optiondom,
                   'value' => $selectdom)
    );
?>
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
