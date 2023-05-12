<?php
session_start();
// xóa toàn bộ session
session_unset();
session_destroy();
// trả về kết quả cho Ajax
header('Content-Type: application/json');
echo json_encode([
    'success' => true,
    'message' => 'Logout successful.'
]);
exit;
?>
