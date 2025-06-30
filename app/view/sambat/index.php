<?php
if(!isset($_SESSION['user'])){
        header("location:"."/login");
    }
     require_once 'app/model/content.model.php';
     require_once 'app/model/reply.model.php';
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
            <a href="/create-sambat" class="w-full p-2 font-bold bg-blue-500 my-4 rounded-md text-white">Sambatan</a>
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
                    <div class="flex justify-between">
                        <div>
                            <a href="?id=<?= $row['id'] ?>">
                                Name: <span class="font-bold"><?= $row['name'] ?></span><br>
                                Problem:<?= $row['content'] ?>
                            </a>
                        </div>
                        <?php
                        if($row['id_user'] == $_SESSION['user']['id']){
                            ?>
                        <div class="flex gap-2 items-center">
                            <form action="app/controller/sambat/delete-sambat.php" method="POST"
                                onsubmit="return confirm('Apakah Data Ini ingin di hapus?')">
                                <input type="text" name="id" value="<?= $row['id'] ?>" hidden>
                                <button name="delete"
                                    class="cursor-pointer bg-red-500 hover:bg-red-700 w-full h-full p-4 border rounded-md">X</button>
                            </form>
                            <a href="/edit-sambat?id=<?= $row['id']?>"
                                class="cursor-pointer text-white bg-yellow-500 hover:bg-yellow-700 p-4 border rounded-md">Edit</a>
                        </div>
                        <?php
                        }
                        ?>

                    </div>

                </div>
                <?php
                    }
                }

            ?>
            </div>
        </div>
        <?php
            $id = $_GET['id'];
            $RModel = new Reply($conn);
            $result = $RModel->getReply($id);
            if($id){
                ?>
        <div class="flex-left border rounded-md w-full px-2">
            <div class="flex justify-between">
                <a href="/reply?id=<?= $id?>" class="text-white p-2 font-bold bg-blue-500 my-4 rounded-md">
                    Reply</a>
                <a href="/sambat" class="text-white py-2 px-4 font-bold bg-red-500 hover:bg-red-700 my-4 rounded-md">
                    X</a>
            </div>
            <?php
                if( $result->num_rows == 0){
                ?>
            <p class="my-5">No Reply</p>

            <?php
                }else{
                ?>

            <?php
                while($rowR = $result->fetch_assoc()){
                    ?>
            <div class="w-full p-2 rounded-md bg-slate-200 my-4">
                <div class="flex justify-between">
                    <div>
                        <h3>From: <?= $rowR['name']?></h3>
                        <h1><?= $rowR['reply']?></h1>
                    </div>
                    <?php
                        if($rowR['uId'] == $_SESSION['user']['id']){
                            ?>
                    <div>
                        <form action="app/controller/reply/delete-reply.php" method="POST"
                            onsubmit="return confirm('Apakah Reply Ini ingin di hapus?')">
                            <input type="text" name="id" value="<?= $rowR['rId'] ?>" hidden>
                            <button name="delete"
                                class="cursor-pointer bg-red-500 hover:bg-red-700 w-full h-full p-4 border rounded-md">X</button>
                        </form>
                    </div>
                    <?php
                        }
                    ?>

                </div>

            </div>
            <?php
                }
                ?>
        </div>
        <?php
            }
            }
          
        ?>
    </div>
</body>

</html>