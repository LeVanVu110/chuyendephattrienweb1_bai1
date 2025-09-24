<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$id = 3;

// Lấy thông tin user
$users = $userModel->findUserById($id);

if (!empty($users)) {
    echo "<h3>Thông tin user id = $id</h3>";
    echo "<ul>";
    // Nếu $users là mảng nhiều dòng, lấy dòng đầu tiên
    $user = $users[0]; 
    foreach ($user as $key => $value) {
        echo "<li><strong>$key:</strong> $value</li>";
    }
    echo "</ul>";
} else {
    echo "⚠️ User id = $id không tồn tại!";
}
