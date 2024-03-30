<?php
session_start();
if (isset($_SESSION['user_info'])) {
    $user_info = $_SESSION['user_info'];
    echo "<ul>";
    foreach ($user_info as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    echo "</ul>";
    unset($_SESSION['user_info']);
} else {
    echo "Информация о пользователе не найдена";
}
?>