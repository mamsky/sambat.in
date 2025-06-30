<?php 
error_reporting(0);
$id = $_GET['id'];
    $route = [
        '/'=> 'app/view/home/index.php',
        '/login'=>'app/view/auth/login.php',
        '/register'=>'app/view/auth/register.php',
        '/sambat' =>'app/view/sambat/index.php',
        "/sambat?id=$id" =>'app/view/sambat/index.php',
        '/create-sambat' =>'app/view/sambat/create-sambat.php'
    ];    
?>