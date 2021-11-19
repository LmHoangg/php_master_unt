<?php
    require('data/users.php');
    require('lib/template.php')
?>

<?php
    $page = !empty($_GET['page']) ? $_GET['page'] : 'home';
    $path = "pages/{"
?>