<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>

<body>
    <?php require 'app/view/layout/navbar.php' ?>
    <form action="app/controller/reply/create-reply.php" method="POST" class="p-2">
        <input type="text" name="id" value="<?= $_GET['id'] ?>" hidden>
        <label for="reply" class="text-2xl font-semibold my-4">Tulis Reply:</label><br>
        <textarea name="reply" id="reply" rows="10" cols="80" class="my-4"></textarea>
        <br>
        <button type="submit" name="create-sambat"
            class="bg-blue-500 w-full p-2 text-2xl text-white font-bold rounded-md cursor-pointer">Create</button>
    </form>

    <script>
    CKEDITOR.replace('reply');
    </script>

</body>

</html>