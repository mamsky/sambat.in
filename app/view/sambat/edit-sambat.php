<?php
    $id = $_GET['id'];
    require_once 'app/model/content.model.php';
    require 'config/db.config.php';
    $content = new Content($conn);
    $res = $content->getContentById($id)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>

<body>
    <?php require 'app/view/layout/navbar.php' ?>
    <form action="app/controller/sambat/edit-sambat.php" method="POST" class="p-2">
        <input type="text" value="<?=$id?>" name="id" hidden>
        <label for="content" class="text-2xl font-semibold my-4">Reply:</label><br>
        <textarea name="content" id="content" rows="10" cols="80"
            class="my-4"><?= $res->fetch_assoc()['content']?></textarea>
        <br>
        <button type="submit" name="edit-sambat"
            class="bg-blue-500 w-full p-2 text-2xl text-white font-bold rounded-md cursor-pointer">Save Change</button>
    </form>

    <script>
    CKEDITOR.replace('content');
    </script>

</body>

</html>