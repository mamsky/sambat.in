<?php
    session_start();
    require_once '../../model/content.model.php';
    require_once '../../../config/db.config.php';
    $model = new Content($conn);

    if(isset($_POST['create-sambat'])){
        $userId = $_SESSION['user']['id'];
        $content = $_POST['content'];
       
        $create = $model->createContent($userId, $content);
        
        if($create){
            echo "<script>alert('Create Sambat Success')</script>";
            echo "<script>window.location.href = '/sambat';</script>";
        } else {
            echo "<script>alert('Create Sambat Failed')</script>";
            echo "<script>window.location.href = '/sambat';</script>";
        }
    }
?>