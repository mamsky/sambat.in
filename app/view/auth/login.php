<?php
    if(isset($_SESSION['user'])){
        echo "<script>window.location.href = '/';</script>";
    }
?>

<div class="h-screen w-full">
    <div class="h-full flex justify-center items-center bg-gradient-to-tl from-sky-800 via-sky-400 to-sky-200 md:px-20">
        <content class="w-full mx-2 md:w-md p-4 rounded-md bg-white/50 backdrop-blur-md shadow-xl">
            <h1 class="w-full text-4xl font-bold text-center my-4">Login <span class="text-blue-800">Sambat.in</span>
            </h1>
            <form action="app/controller/login.controller.php" method="POST">
                <section class="my-4">
                    <label for="email" class="font-bold">Email:</label>
                    <input id="email" name="email" type="email" placeholder="example@gmail.com"
                        class="w-full p-2 border rounded-md" required>
                </section>
                <section class="my-4">
                    <label for="password" class="font-bold">Password:</label>
                    <input id="password" name="password" type="password" placeholder="********"
                        class="w-full p-2 border rounded-md" required>
                </section>
                <button type="submit" name="login"
                    class="w-full p-2 rounded-md bg-blue-500 font-bold text-white cursor-pointer">Login</button>
            </form>
            <p>Don't have an account? <a href="/register" class="text-blue-500 hover:text-blue-800">Register</a></p>
        </content>
    </div>
</div>