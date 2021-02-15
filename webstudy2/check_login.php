<?php
date_default_timezone_set("Asia/Bangkok");
session_start();
require_once('php/config.php');
require_once('php/function.php');

if(isset($_POST['user']) && isset($_POST['password'])){
    if($_POST['user'] != '' && $_POST['password'] != ''){

        $login_user = getLogin($conn,$_POST['user'],$_POST['password']);
        
        if($login_user['user_code'] > 0){
            $_SESSION['administrator_user'] = $login_user;
            header('Location: index.php');
            end();

        }else{
            echo "<script type='text/javascript'>alert('รหัสผ่านไม่ถูกต้อง'); window.location = 'login.php';</script>";

        }
    }else{
        header("Location login.php");
    }
}else{
    header("Location login.php");
}
?>