<?php
session_start();
ob_start();
//data
    require('data/users.php');
//function

    require('lib/data.php');
    require('lib/url.php');
    require('lib/users.php');
    require('lib/template.php');
    
?>

<?php
    $page = !empty($_GET['page']) ? $_GET['page'] : 'home';
    $path = "pages/{$page}.php";

    #set cookie cho session login
    if(!empty($_COOKIE['is_login'])){
        $_SESSION['is_login'] = $_COOKIE['is_login'];
        $_SESSION['user_login'] = $_COOKIE['user_login'];

    }
    #kiem tra login 

    if(!is_login() && $page != "login"){
        redirect ('?page=login');
    }
        
    //

    if(file_exists($path)){
        require $path;
    }else{
        require 'inc/404.php';
    }
   
?>
<?php
    // get_footer();
?>