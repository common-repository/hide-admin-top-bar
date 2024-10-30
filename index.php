<?php
/*
 * Plugin Name: Hide Admin Top Bar
 * Description: Hide Admin Top Bar from front end.
 * Version: 1.0
 * Author: Deepak Kaushik 
 * Author URI: http://www.coderperhour.com
 * Text Domain: Hide-Admin-Top-Bar
 */
 
add_action('admin_print_scripts-profile.php', 'HideAdminTopBar');
function HideAdminTopBar() { ?>
<style type="text/css"> .show-admin-bar {display:none;}</style>
<?php }
add_filter('show_admin_bar', '__return_false'); ?>