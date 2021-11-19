<?php
 function check_login($username,$password){
     global $list_users;
     foreach ($list_users as $user) {
         # code...
         if($username == $user['username'] && md5($password) == $user['password']){
             return TRUE;
         }
     }
     return FALSE;
 };
 function is_login(){
     if(isset($_SESSION['is_login'])){
         return true;
     }
     return false;
 };
 function user_login(){
     if(!empty($_SESSION['user_login'])){
         return $_SESSION['user_login'];
     }
     return false;
 }