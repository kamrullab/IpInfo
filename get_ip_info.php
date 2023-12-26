<?php
// Get the user's public IP address using ipify API
$user_ip_json = file_get_contents("https://api64.ipify.org?format=json");
$user_ip_data = json_decode($user_ip_json, true);
$user_ip = $user_ip_data['ip'];

$ip_info_json = file_get_contents("https://ipinfo.io/{$user_ip}?token=900c3cb30f8f40");
$ip_info = json_decode($ip_info_json, true);
header('Content-Type: application/json');
echo json_encode($ip_info);
?>
