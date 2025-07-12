<?php
$data = json_decode(file_get_contents("php://input"), true);
if (!$data) { http_response_code(400); echo "Invalid data"; exit; }

$filename = 'data.json';
$existing = file_exists($filename) ? json_decode(file_get_contents($filename), true) : [];

$data['waktu'] = date("Y-m-d H:i:s");
$existing[] = $data;

file_put_contents($filename, json_encode($existing, JSON_PRETTY_PRINT));
echo "OK";
?>
