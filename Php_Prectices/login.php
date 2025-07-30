<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tailwind Register Form</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body
  class="h-screen flex items-center justify-center bg-cover bg-center"
  style="background-image: url('images/bgimg2.jpg')">
  <div
    class="bg-transparent border-2 border-gray-200 text-center rounded-xl p-6 w-[400px]">
    <h2 class="text-white text-2xl font-semibold mb-5">Login Here</h2>
    <form id="registration_form"
        action="#"
        onsubmit="loginValidation"
        onreset="resetRegister">
      <div class="mb-4 text-left">
        <label for="username" class="block text-white font-medium mb-2">User Name</label>
        <input
          type="text"
          id="username"
          name="username"
          placeholder="Enter user Name"
          class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300" />
      </div>

      <div class="mb-6 text-left relative">
        <label for="password" class="block text-white font-medium mb-2">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Enter your password"
          class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300 pr-10" />
        <span
          class="absolute right-3 top-[38px] text-black cursor-pointer"
          onclick="togglePassword('password', this)">
          <i class="fa-solid fa-eye my-2"></i>
        </span>
      </div>

      <button
        type="submit"
        class="w-full py-2.5 bg-green-400 action:bg-red-700 text-white font-medium rounded-md transition duration-300">
        login
      </button>
    </form>
    <p class="text-lg my-4 text-white">
      Don't have an account?
      <a href="register.php" class="text-red-400 hover:underline active:text-blue-700">Register</a>
    </p>
  </div>
  <script src="script.js"></script>

</body>

</html>