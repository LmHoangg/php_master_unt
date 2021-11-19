<?php
# xu ly logout
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);
// unset($_COOKIE['is_login']);
// unset($_COOKIE['user_login']);
if (isset($_COOKIE['is_login'])) {
    unset($_COOKIE['is_login']);
    setcookie('is_login', '', time() - 3600, '/'); // empty value and old timestamp
}
if (isset($_COOKIE['user_login'])) {
    unset($_COOKIE['user_login']);
    setcookie('user_login', '', time() - 3600, '/'); // empty value and old timestamp
}
redirect('?page=login');
?>