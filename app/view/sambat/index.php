<?php
if(!isset($_SESSION['user'])){
        header("location:"."/login");
    }
     require_once 'app/model/content.model.php';
     require 'config/db.config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php require 'app/view/layout/navbar.php' ?>
    <div class='p-8 flex justify-between gap-4'>
        <div class="w-full border rounded-md p-4">
            <a href="/create-sambat" class="w-full p-2 font-bold bg-blue-500 my-4 rounded-md">Buat Sambatan</a>
            <div class="my-4">
                <?php 
                $model = new Content($conn);
                $result = $model->getContent();
        
                if($result->num_rows == 0){
                    ?>
                <div class="w-full p-2 rounded-md bg-slate-200">
                    <h1>Tidak ada content</h1>
                </div>
                <?php
                }else{
                    while ($row = $result->fetch_assoc()) {
                        ?>
                <div class="w-full p-2 rounded-md bg-slate-200 my-4">
                    <a href="?id=<?= $row['id'] ?>"><?= $row['content'] ?></a>
                </div>
                <?php
                    }
                }

            ?>
            </div>
        </div>
        <div class="flex-left border rounded-md w-full p-4">

        </div>
    </div>
</body>

</html>