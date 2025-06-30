<?php
    if(isset($_SESSION['user'])){
        header("location:"."/");
    }
?>

<div class="h-screen w-full bg-gradient-to-tl from-sky-800  via-sky-400 to-sky-200 px-20">
    <div class="h-full flex justify-center items-center">
        <content class="w-full mx-2 md:w-md p-4 rounded-md bg-white/50 backdrop-blur-md shadow-xl">
            <h1 class="w-full text-4xl font-bold text-center my-6">Register <span class="text-blue-800">Sambat.in</span>
            </h1>
            <form action="app/controller/register.controller.php" method="POST">
                <section class="my-4">
                    <label for="name" class="font-bold">Full Name:</label>
                    <input id="name" name="name" type="text" placeholder="your name"
                        class="w-full p-2 border rounded-md" required>
                </section>
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
                <button type="submit" name="register"
                    class="w-full p-2 rounded-md bg-blue-500 font-bold text-white cursor-pointer">Login</button>
            </form>
            <p>Have an account? <a href="/login" class="text-blue-500 hover:text-blue-800">Login</a></p>
        </content>
    </div>
</div>