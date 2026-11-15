<?php
header('Content-Type: application/json; charset=utf-8');
$payload = json_decode(file_get_contents('php://input'), true);
$username = is_array($payload) ? trim((string)($payload['username'] ?? '')) : '';
echo json_encode([
  'status' => 'success',
  'received' => $username,
  'message' => $username !== '' ? 'Data received for ' . $username : 'No username was provided.'
], JSON_UNESCAPED_UNICODE);
?>
