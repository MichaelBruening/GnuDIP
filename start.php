<?php

function gnudip_init()
{
        global $CONFIG;
}

elgg_register_action("gnudip/register", elgg_get_plugins_path() . "gnudip/actions/gnudip/register.php");
elgg_register_action("gnudip/manage", elgg_get_plugins_path() . "gnudip/actions/gnudip/manage.php");
elgg_register_page_handler('gnudip', 'gnudip_page_handler');
 
function gnudip_page_handler($segments) {

    if ($segments[0] == 'register') {
        include elgg_get_plugins_path() . 'gnudip/pages/gnudip/register.php';
        return true;
    }
    if ($segments[0] == 'manage') {
        include elgg_get_plugins_path() . 'gnudip/pages/gnudip/manage.php';
        return true;
    }
    return false;
}
?>
