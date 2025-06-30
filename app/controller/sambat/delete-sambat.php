<?php
    session_start();
    require_once '../../model/content.model.php';
    require_once '../../../config/db.config.php';
    $model = new Content($conn);

    if(isset($_POST['delete'])){
        $idContent = $_POST['id'];
        $delete = $model->deleteContent($idContent);
        
        if($delete){
            echo "<script>alert('Delete Sambat Success')</script>";
            echo "<script>window.location.href = '/sambat';</script>";
        } else {
            echo "<script>alert('Delete Sambat Failed')</script>";
            echo "<script>window.location.href = '/sambat';</script>";
        }
    }
?>