<?php
    session_start();
    require_once '../../model/content.model.php';
    require_once '../../../config/db.config.php';
    $model = new Content($conn);

    if(isset($_POST['edit-sambat'])){
        $idContent = $_POST['id'];
        $content = $_POST['content'];
        $edit = $model->updateContent($idContent, $content);
        
        if($edit){
            echo "<script>alert('Edit Sambat Success')</script>";
            echo "<script>window.location.href = '/sambat';</script>";
        } else {
            echo "<script>alert('Edit Sambat Failed')</script>";
            echo "<script>window.location.href = '/sambat';</script>";
        }
    }
?>