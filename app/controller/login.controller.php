<?php
    session_start();
    require_once '../model/auth.model.php';
    require_once '../../config/db.config.php';
    $auth = new auth($conn);

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password= $_POST['password'];
       
        $login = $auth->login($email, $password);
        
        if($login){
            $_SESSION['user'] = $login;
            echo "<script>alert('Login Success')</script>";
            echo "<script>window.location.href = '/';</script>";
        } else {
            echo "<script>alert('Login Failed')</script>";
            echo "<script>window.location.href = '/login';</script>";
        }
    }
?>