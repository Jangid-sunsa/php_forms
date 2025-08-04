<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginner Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" xintegrity="sha512-iecdLmaskl7CVJz95l+h8m6b3fD2u7+g1R6U2z6vQc1tFz6uB3D6G+iP8O+4qA9zI8Uv9D5f8p7M+aL6U3zP8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .sidebar {
            transition: width 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Main container for the entire layout -->
    <div class="flex h-screen bg-gray-200">

        <!-- Sidebar -->
        <div id="sidebar" class="sidebar bg-gray-800 text-white w-64 flex-shrink-0 z-50 overflow-y-auto transform -translate-x-full md:translate-x-0 transition-all duration-300 ease-in-out">
            <div class="p-4 flex items-center justify-between border-b border-gray-700">
                <h1 class="text-xl font-bold">
                <a href="register.php" class="flex items-center">
                    <img src="images/capsitech-logo.png" class="h-10" alt="Capiform Logo" />
                    <span class="self-center text-white text-2xl font-medium italic whitespace-nowrap">Capsiform</span>
                </a>

                </h1>
                <button id="closeSidebarBtn" class="md:hidden text-white focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <nav class="mt-4">
                <a href="#" class="flex items-center px-4 py-2 text-gray-400 hover:bg-gray-700 hover:text-white rounded-md mx-2">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="" class="flex items-center px-4 py-2 text-gray-400 hover:bg-gray-700 hover:text-white rounded-md mx-2 mt-2">
                    <i class="fas fa-users mr-3"></i>
                    Users
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-400 hover:bg-gray-700 hover:text-white rounded-md mx-2 mt-2">
                    <i class="fas fa-box mr-3"></i>
                    Products
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-400 hover:bg-gray-700 hover:text-white rounded-md mx-2 mt-2">
                    <i class="fas fa-cogs mr-3"></i>
                    Settings
                </a>
            </nav>
        </div>

        <!-- Main content area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top bar/header -->
            <header class="flex items-center justify-between p-4 bg-white shadow-md">
                <div class="flex items-center">
                    <!-- Hamburger menu button for mobile -->
                    <button id="openSidebarBtn" class="text-gray-500 focus:outline-none md:hidden">
                        <i class="fas fa-bars fa-lg"></i>
                    </button>
                    <h2 class="text-2xl font-semibold ml-4 hidden md:block">Dashboard</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <!-- User profile dropdown -->
                    <div class="relative">
                        <button id="profileDropdownBtn" class="flex items-center space-x-2 focus:outline-none">
                            <span class="text-sm font-medium hidden sm:block">Sunil Jangid</span>
                            <img src="https://placehold.co/40x40/E5E7EB/4B5563?text=SJ" alt="User Profile" class="w-10 h-10 rounded-full border-2 border-gray-300">
                        </button>

                        <!-- Dropdown menu -->
                        <div id="profileDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-20 hidden">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-user mr-2"></i> Profile
                            </a>
                            <div class="border-t border-gray-200 my-1"></div>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-sign-out-alt mr-2"></i> Sign out
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-6">
                <div style="background-image: url('images/bgimg2.jpg')" class="bg-cover">

                </div>
            </main>
        </div>
    </div>

    <script>
        // JavaScript for sidebar and profile dropdown functionality
        
        // Get references to DOM elements
        const openSidebarBtn = document.getElementById('openSidebarBtn');
        const closeSidebarBtn = document.getElementById('closeSidebarBtn');
        const sidebar = document.getElementById('sidebar');
        const profileDropdownBtn = document.getElementById('profileDropdownBtn');
        const profileDropdown = document.getElementById('profileDropdown');

        // Toggle the sidebar visibility
        function toggleSidebar() {
            if (sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
            } else {
                sidebar.classList.remove('translate-x-0');
                sidebar.classList.add('-translate-x-full');
            }
        }
        
        // Add event listeners
        openSidebarBtn.addEventListener('click', toggleSidebar);
        closeSidebarBtn.addEventListener('click', toggleSidebar);

        // Toggle the profile dropdown menu
        profileDropdownBtn.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent the click from bubbling up to the document
            profileDropdown.classList.toggle('hidden');
        });

        // Close the dropdown if the user clicks outside of it
        document.addEventListener('click', (e) => {
            if (!profileDropdownBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
                profileDropdown.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
