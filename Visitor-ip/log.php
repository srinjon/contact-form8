<?php
include_once 'dbConfig.php';
$user_ip_address=$_SERVER['REMOTE_ADDR'];
$user_agent=$_SERVER['HTTP_USER_AGENT'];
global $wpdb;
$wpdb->insert('wp_ip',array($user_ip_address,$user_agent));