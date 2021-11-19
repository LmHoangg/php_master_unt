<?php
    if(isset($_POST['login'])){
        $error = array();
        #kiem tra username
        if(empty($_POST['username'])){
            $error['username']="Username không được để trống!";
        }else{
            $patern = '/^[A-Za-z0-9_\.]{5,32}$/';
            if(!preg_match($patern,$_POST['username'])){
                $error['username']="Username không đúng định dạng";
            }else{
                $username = $_POST['username'];
            }
        }
        if(empty($_POST['password'])){
            $error['password']="Password không được để trống!";
        }else{
            $patern = '/^[A-Za-z0-9_\.!@#$%^&*()]{5,32}$/';
            if(!preg_match($patern,$_POST['password'])){
                $error['password']="Password không đúng định dạng";
            }else{
                $password = $_POST['password'];
            }
        }

         //ket luan
    if(empty($error)){
        //xu ly login not error validation
       if(check_login($username,$password)){
           // lưu trữ phiên login
           $_SESSION['is_login'] = true;
           $_SESSION['user_login'] = $username;

           if(isset($_POST['remeber_me'])){
               setcookie("is_login", true, time()+3600);
               setcookie("user_login",$username,time()+3600);
           }

           redirect("?page=home");
       }else{
           $error['account'] = "Username or password does not exist";
       }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng nhập</title>
    <link rel="stylesheet" href="public/css/reset.css" />
    <link rel="stylesheet" href="public/css/login.css" />

</head>

<body>
    <div id="wp-login-form">
        <h2>Đăng nhập</h2>
        <form id="form-login" method="POST">

            <input type="text" id="username" name="username" value=<?php 
                if(isset($_POST['username'])){
                    echo $_POST['username'];
                }
            ?> placeholder="User name" />
            <?php 
                if(!empty($error['username'])){
                    ?>
            <p class="error"><?php echo $error['username'] ?></p>
            <?php
                }
            ?>
            <input type="password" id="password" name="password" value="" placeholder="Password" />
            <?php 
                if(!empty($error['password'])){
                    ?>
            <p class="error"><?php echo $error['password'] ?></p>
            <?php
                }
            ?>
            <div class="remeber_login" style="display:flex;margin: 0 auto;">
                <input type="checkbox" name="remeber_me" style="font-size:15px;" id="remeber_me">
                <span style="font-size:13px;">Remeber Login</span>
            </div>
            <input type="submit" id="btn-login" name="login" value="Login" />
            <?php 
                if(!empty($error['account'])){
                    ?>
            <p class="error"><?php echo $error['account'] ?></p>
            <?php
                }
            ?>
        </form>
        <a href="" id="lost-pass">Quên mật khẩu ?</a>
    </div>

</body>

</html>