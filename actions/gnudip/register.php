<?php
$email=elgg_get_logged_in_user_entity()->email;
// get the form inputs
$hostname  = escapeshellcmd( get_input('hostname') );
$password1 = escapeshellcmd( get_input('password1') );
$password2 = escapeshellcmd( get_input('password2') );
//$gnudipdom = elgg_get_plugin_setting('gnudipdom', gnudip);
$gnudipdom = get_input('selectdom');
$gnudipurl = elgg_get_plugin_setting('gnudipurl', gnudip);
$gnudipsrv = elgg_get_plugin_setting('gnudipsrv', gnudip);
$gnudipusr = elgg_get_plugin_setting('gnudipusr', gnudip);
$gnudipbin = elgg_get_plugin_setting('gnudipbin', gnudip);

$CMD = elgg_get_plugins_path() . "gnudip/scripts/gnudiprcmd.ksh ";
$CMD.= "$gnudipusr" . " " . $gnudipsrv . " " . $gnudipbin . " ";
$CMD.= "$hostname" . " " . $email . " " . "$gnudipdom" . " " . $password1 . " " . $password2;

exec($CMD, $ARR, $RC);

switch ($RC) {
	case '0':
	   $msg=elgg_echo('gnudip:success');
	   break;
	case '1':
	   $msg=elgg_echo('gnudip:error:user_exists');
	   break;
	case '2':
	   $msg=elgg_echo('gnudip:error:unknown');
	   break;
	case '3':
	   $msg=elgg_echo('gnudip:error:password');
	   break;
	default:
	   $msg=elgg_echo('gnudip:error:unknown');
	   break;
}
if( $RC == 0 ){
    system_message($msg);
    $url=elgg_get_site_url() . "gnudip/manage";
    forward($url);
} else {
    register_error($msg);
    forward(REFERER);
}
?>
