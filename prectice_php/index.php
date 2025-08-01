<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Capsiform@official</title>
    <link rel="icon" href="images/capsitech-logo.png" type="image/Capsi-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="background-image: url('images/bgimg2.jpg')" class="bg-cover">
    <nav class="bg-transparent fixed w-full z-20 top-0 start-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center">
                <img src="images/capsitech-logo.png" class="h-10" alt="Capiform Logo" />
                <span class="self-center text-white text-2xl font-medium italic whitespace-nowrap">Capsiform</span>
            </a>

            <div class="italic hidden md:flex space-x-8">
                <a href="index.php" class="font-medium text-[#00CED1]">HOME</a>
                <a href="#" class="text-white font-medium active:text-[#00CED1]">DATABASE</a>
                <a href="#" class="text-white font-medium active:text-[#00CED1]">REG</a>
            </div>

            <div class="flex md:order-2 space-x-3 md:space-x-0">
                <a href="login.php">
                    <button
                        type="button"
                        class="text-white bg-[#00CED1] font-medium rounded-lg text-sm px-4 py-2 text-center"
                    >
                        Admin
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <div class="pt-32 text-center">
        <h1 class="text-white text-4xl font-bold italic hover:underline hover:decoration-red-700">Welcome to Capsiform</h1>
    </div>
</body>

</html>
