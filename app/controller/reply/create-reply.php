<?php 
    session_start();
    require_once '../../model/reply.model.php';
    require_once '../../../config/db.config.php';
    $model = new Reply($conn);
    
    if(isset($_POST['reply'])){
        $idUser = $_SESSION['user']['id'];
        $idContent = $_POST['id'];
        $reply = $_POST['reply'];

        $create = $model->createReply($idContent,$idUser, $reply);
        if($create){
            echo "<script>alert('Create Reply Success')</script>";
            echo "<script>window.location.href = '/sambat';</script>";
        } else {
            echo "<script>alert('Create Reply Failed')</script>";
            echo "<script>window.location.href = '/sambat';</script>";
        }
    }

?>