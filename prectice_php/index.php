<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Capsiform Home</title>
  <link rel="icon" href="images/capsitech-logo.png" type="image/Capsi-icon" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="background-image: url('images/bgimg2.jpg')" class="bg-cover bg-no-repeat bg-center min-h-screen">
  <nav class="bg-transparent fixed w-full z-20 top-0 left-0">
    <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between p-4">
      
      <a href="index.php" class="flex items-center space-x-2">
        <img src="images/capsitech-logo.png" class="h-10 w-auto" alt="Capiform Logo" />
        <span class="text-white text-2xl font-medium italic whitespace-nowrap">Capsiform</span>
      </a>

      <div class="md:hidden flex items-center space-x-4">
        <button id="menuToggle" class="text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>

      <div class="hidden w-full md:flex md:w-auto md:items-center md:space-x-8 italic mt-4 md:mt-0" id="navMenu">
        <a href="index.php" class="font-medium text-[#00CED1]">HOME</a>
        <a href="#" class="text-white font-medium active:text-[#00CED1]">DATABASE</a>
        <a href="#" class="text-white font-medium active:text-[#00CED1]">REG</a>
      </div>

      <div class="hidden md:block">
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

  <div class="md:hidden" id="mobileMenu" class="hidden">
    <div class="flex flex-col items-start space-y-4 p-4 bg-[#333333] bg-opacity-80">
      <a href="index.php" class=" pt-12 text-white font-medium text-sm">HOME</a>
      <a href="#" class="text-white font-medium text-sm">DATABASE</a>
      <a href="#" class="text-white font-medium text-sm">REG</a>
      <a href="login.php">
        <button
          type="button"
          class="text-white bg-[#00CED1] font-medium rounded-lg text-sm px-4 py-2 text-center mt-4"
        >
          Admin
        </button>
      </a>
    </div>
  </div>

  <div class="pt-40 text-center px-4">
    <h1 class="text-white text-3xl md:text-4xl font-bold italic hover:underline hover:decoration-red-700">
      Welcome to Capsiform
    </h1>
  </div>

  <script>
    document.getElementById("menuToggle").addEventListener("click", function () {
      const menu = document.getElementById("mobileMenu");
      menu.classList.toggle("hidden");
    });
  </script>
</body>
</html>
