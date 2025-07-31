<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Capsiform Registration</title>
  <link rel="icon" href="images/capsitech-logo.png" type="image/Capsi-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-image: url('images/bgimg2.jpg')" class="bg-cover">
  <!-- Navbar Section for Capsiform -->
   
  <nav class="bg-transparent fixed w-full z-20 top-0 start-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="register.php" class="flex items-center">
        <img src="images/capsitech-logo.png" class="h-10" alt="Capiform Logo">
        <span class="self-center text-white text-2xl font-medium italic whitespace-nowrap">Capsiform</span>
      </a>
      <div class="flex md:order-2 space-x-3 md:space-x-0">
        <a href="data.php">
          <button type="button"
            class="text-white bg-[#00CED1] font-medium rounded-lg text-sm px-8 py-2 text-center">Admin</button>
        </a>

      </div>
    </div>
  </nav>


  <?php if (isset($_GET['success'])): ?>
    <script>alert("Registration Successfully!");</script>
  <?php endif; ?>

  <div class="h-screen flex items-center justify-center bg-cover bg-center">
    <div class="bg-transparent border-2 border-gray-200 text-center rounded-xl p-6 w-[400px]">
      <h2 class="text-white text-2xl font-semibold mb-5">
        <a href="register.php" class="flex items-center justify-center">
          <img src="images/capsitech-logo.png" class="h-8" alt="Capiform Logo">
          <span class="text-white text-xl font-medium">Capsi-Register</span>
        </a>
      </h2>
      <form id="registration_form" action="reg.php" method="POST" onsubmit="return validForm()">

        <div class="text-left h-[6.2rem]">
          <label for="user" class="block text-white font-medium mb-2">User Name</label>
          <input type="text" id="user" name="username" placeholder="Enter user Name"
            class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300" />
          <span id="userErr" class="text-red-700 text-sm"></span>
        </div>

        <div class="text-left h-[6.2rem]">
          <label for="email" class="block text-white font-medium mb-2">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email"
            class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300" />
          <span id="emailErr" class="text-red-700 text-sm"></span>
        </div>

        <div class="text-left relative h-[6.2rem]">
          <label for="password" class="block text-white font-medium mb-2">Password</label>
          <input type="password" id="pass" name="password" placeholder="Enter your password"
            class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300 pr-10" />
          <span id="passwordErr" class="text-red-700 text-sm"></span>
          <span class="absolute right-3 top-[38px] text-black cursor-pointer" onclick="togglePassword('pass', this)">
            <i class="fa-solid fa-eye my-2"></i>
          </span>
        </div>

        <div class="mb-3 text-left relative h-[6.4rem]">
          <label for="confirm-password" class="block text-white font-medium mb-2">Confirm Password</label>
          <input type="password" id="conPass" name="confirmPassword" placeholder="Confirm your password"
            class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300 pr-10" />
          <span id="conpassErr" class="text-red-700 text-sm"></span>
          <span class="absolute right-3 top-[38px] text-black cursor-pointer" onclick="togglePassword('conPass', this)">
            <i class="fa-solid fa-eye my-2"></i>
          </span>
        </div>

        <button id="submit-btn" type="submit"
          class="w-full py-2.5 bg-[#FF6347] hover:bg-[#FF4500] text-white font-medium rounded-md transition duration-300">
          Register
        </button>
      </form>
      <p class="text-lg my-4 text-white">
        You have already Register
        <a href="login.php" class="hover:underline active:text-blue-700">login</a>
      </p>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>