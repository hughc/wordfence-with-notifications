<?php
/*
Plugin Name: Wordfence
Plugin URI: http://wordfence.com/
Description: Anti-virus and Firewall for WordPress 
Author: Mark Maunder
Version: 1.3
Author URI: http://wordfence.com/
*/
require_once('lib/wordfenceConstants.php');
require_once('lib/wordfenceClass.php');
register_activation_hook(WP_PLUGIN_DIR . '/wordfence/wordfence.php', 'wordfence::installPlugin');
wordfence::install_actions();


?>