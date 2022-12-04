<?php
/**
 * Plugin Name:Visitor Details
 */
$path=preg_replace('/wp-content.*$/','',__DIR__);
require_once($path.'/wp-load.php');
include_once 'dbConfig.php';
function ipaddress(){
    $user_ip_address=$_SERVER['REMOTE_ADDR'];
    echo "$user_ip_address";
$user_agent=$_SERVER['HTTP_USER_AGENT'];
echo "$user_agent";
global $wpdb;
$wpdb->insert('wp_ip',array($user_ip_address,$user_agent));
    ?>
    <div><h1>Store Visitor Log in the Database with PHP & MYSQL</h1>
         
</div>
  <?php  
}
add_shortcode('visitorip','ipaddress');
?>