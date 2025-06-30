<?php
    if(!isset($_SESSION['user'])){
        echo "<script>window.location.href = '/login';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php require 'app/view/layout/navbar.php' ?>
    <div class="relative">
        <img src="public/images/background.png" alt="bg" class="w-full h-screen object-cover max-h-[881px]">

        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <h1 class="text-4xl text-white text-center">Welcome <?= $_SESSION['user']['name'] ?></h1>
        </div>
    </div>
</body>

</html>