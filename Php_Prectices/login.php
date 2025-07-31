<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Capsiform Login</title>
  <link rel="icon" href="images/capsitech-logo.png" type="image/Capsi-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="background-image: url('images/bgimg2.jpg')" class="bg-cover">
  <nav class="bg-transparent fixed w-full z-20 top-0 start-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="register.php" class="flex items-center">
        <img src="images/capsitech-logo.png" class="h-10" alt="Capiform Logo">
        <span class="self-center text-white text-2xl font-medium italic whitespace-nowrap">Capsiform</span>
      </a>
    </div>
  </nav>

  <div class="h-screen flex items-center justify-center">
    <div class="bg-transparent border-2 border-gray-200 text-center rounded-xl p-6 w-[400px]">
      <h2 class="text-white text-2xl font-semibold mb-5">
        <a href="login.php" class="flex items-center justify-center">
          <img src="images/capsitech-logo.png" class="h-8" alt="Capiform Logo">
          <span class="text-white text-xl font-medium">Capsi-Login</span>
        </a>
      </h2>
      <form id="registration_form" action="reg.php" method="POST">
        <div class="mb-4 text-left">
          <label for="username" class="block text-white font-medium mb-2">User Name</label>
          <input type="text" id="username" name="username" placeholder="Enter your username"
            class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300" />
        </div>

        <div class="mb-6 text-left relative">
          <label for="password" class="block text-white font-medium mb-2">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password"
            class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300 pr-10" />
          <span class="absolute right-3 top-[38px] text-black cursor-pointer"
            onclick="togglePassword('password', this)">
            <i class="fa-solid fa-eye my-2"></i>
          </span>
        </div>

        <button type="submit"
          class="w-full py-2.5 bg-[#FF6347] hover:bg-[#FF4500] text-white font-medium rounded-md transition duration-300">
          login
        </button>
      </form>
      <p class="text-lg my-4 text-white">
        Don't have an account?
        <a href="register.php" class="text-[#FF6347] hover:underline active:text-[#FF4500]">Register</a>
      </p>
    </div>
  </div>
  <script src="script.js"></script>

</body>

</html>