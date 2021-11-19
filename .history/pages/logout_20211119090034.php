<?php
# xu ly logout
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);
unset($_COOKIE['is_login']);
unset($_COOKIE['user_login']);
redirect('?page=login');
?>