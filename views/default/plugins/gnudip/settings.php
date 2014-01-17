<?php 
$gnudipurl = $vars['entity']->gnudipurl;
$gnudipsrv = $vars['entity']->gnudipsrv;
$gnudipusr = $vars['entity']->gnudipusr;
$gnudipbin = $vars['entity']->gnudipbin;
$gnudipdom = $vars['entity']->gnudipdom;
?>
<?php
echo "<p>" . elgg_echo('gnudip:set:gnudipurl');
echo elgg_view('input/text', array(
    'name'  => 'params[gnudipurl]',
    'value' => $gnudipurl,
));
echo "<p>" . elgg_echo('gnudip:set:gnudipdom');
echo elgg_view('input/text', array(
    'name'  => 'params[gnudipdom]',
    'value' => $gnudipdom,
));
echo "<p>" . elgg_echo('gnudip:set:gnudipusr');
echo elgg_view('input/text', array(
    'name'  => 'params[gnudipusr]',
    'value' => $gnudipusr,
));
echo "<p>" . elgg_echo('gnudip:set:gnudipsrv');
echo elgg_view('input/text', array(
    'name'  => 'params[gnudipsrv]',
    'value' => $gnudipsrv,
));
echo "<p>" . elgg_echo('gnudip:set:gnudipbin');
echo elgg_view('input/text', array(
    'name'  => 'params[gnudipbin]',
    'value' => $gnudipbin,
));
?>
