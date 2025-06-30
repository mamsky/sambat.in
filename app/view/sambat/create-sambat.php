<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>

<body>
    <?php require 'app/view/layout/navbar.php' ?>
    <form action="app/controller/sambat/create-sambat.php" method="POST" class="p-2">
        <label for="content" class="text-2xl font-semibold my-4">Tulis Sambatan:</label><br>
        <textarea name="content" id="content" rows="10" cols="80" class="my-4"></textarea>
        <br>
        <button type="submit" name="create-sambat"
            class="bg-blue-500 w-full p-2 text-2xl text-white font-bold rounded-md cursor-pointer">Create</button>
    </form>

    <script>
    CKEDITOR.replace('content');
    </script>

</body>

</html>