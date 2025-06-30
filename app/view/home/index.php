<?php
    if(!isset($_SESSION['user'])){
        header("location:"."/login");
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
    <?php print_r($_SESSION['user'])?>
</body>

</html>