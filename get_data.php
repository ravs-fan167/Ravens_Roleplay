<?php
header("Content-Type: application/json");
$filename = 'data.json';
if (!file_exists($filename)) {
  echo "[]";
  exit;
}
echo file_get_contents($filename);
?>
