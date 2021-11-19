<?php
    require('data/users.php');
    require('lib/template.php')
?>

<?php
    $page = !empty($_GET['page']) ? $_GET['page'] : 'home';
    $path = "pages/{$page}.php";
    if(file_exists($path)){
        req $path;
    }else{
        re
    }
?>