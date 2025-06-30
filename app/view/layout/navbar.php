<nav class="py-4 bg-gradient-to-r from-cyan-500  via-sky-400 to-sky-200 px-20">
    <div class="flex justify-between items-center">
        <div>
            <a href="/">
                <img src="public/images/d.png" alt="mbah" class="w-10 h-10">
            </a>
        </div>
        <div class="flex gap-4">
            <a href="/sambat" class="p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">
                Sambat
            </a>
            <form action="app/controller/logout.controller.php" method="POST">
                <button name="session-destroy"
                    class="p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md cursor-pointer">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>