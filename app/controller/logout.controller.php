<?php
    session_start();
    if(isset($_POST['session-destroy'])){
       session_destroy();
       echo "<script>alert('Logout Success')</script>";
       echo "<script>window.location.href = '/login';</script>";
    }

?>