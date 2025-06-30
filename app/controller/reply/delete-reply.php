<?php
    session_start();
    require_once '../../model/reply.model.php';
    require_once '../../../config/db.config.php';
    $model = new Reply($conn);

    if(isset($_POST['delete'])){
        $idReply = $_POST['id'];
        $delete = $model->deleteReply($idReply);
        
        if($delete){
            echo "<script>alert('Delete Reply Success')</script>";
            echo "<script>window.location.href = '/sambat';</script>";
        } else {
            echo "<script>alert('Delete Reply Failed')</script>";
            echo "<script>window.location.href = '/sambat';</script>";
        }
    }
?>