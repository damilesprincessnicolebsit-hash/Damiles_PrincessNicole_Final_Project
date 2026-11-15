<?php
header('Content-Type: application/json; charset=utf-8');
$raw = file_get_contents('php://input');
$data = json_decode($raw, true);
$name = '';
if (is_array($data)) {
    $name = trim((string)($data['name'] ?? $data['username'] ?? ''));
} else {
    $name = trim((string)($_POST['name'] ?? $_POST['username'] ?? ''));
}
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
echo json_encode([
    'status' => 'success',
    'message' => $name !== '' ? "Welcome, {$name}!" : 'Request received. Please enter a name next time.'
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
