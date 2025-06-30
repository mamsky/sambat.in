<?php 
error_reporting(0);
$id = $_GET['id'];
    $route = [
        '/'=> 'app/view/home/index.php',
        '/login'=>'app/view/auth/login.php',
        '/register'=>'app/view/auth/register.php',
        '/sambat' =>'app/view/sambat/index.php',
        "/sambat?id=$id" =>'app/view/sambat/index.php',
        "/edit-sambat?id=$id" =>'app/view/sambat/edit-sambat.php',
        '/create-sambat' =>'app/view/sambat/create-sambat.php',
        "/reply?id=$id" =>'app/view/reply/create-reply.php'
    ];    
?>