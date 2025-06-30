<?php
    require_once '../model/auth.model.php';
    require_once '../../config/db.config.php';
    $auth = new auth($conn);

    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password= $_POST['password'];
        
        if ($auth->register($name, $email, $password)) {
            echo "<script>alert('Register Success')</script>";
            echo "<script>window.location.href = '/login';</script>";
        } else {
            echo "<script>alert('Register Failed')</script>";
            echo "<script>window.location.href = '/register';</script>";
        }
    }

?>