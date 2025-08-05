<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeeksForGeeks Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Custom scrollbar for better aesthetics, optional */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">

        <aside class="w-64 bg-gray-800 shadow-lg flex flex-col md:relative fixed inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out z-50" id="sidebar">
            <div class="p-4 flex items-center justify-between border-b border-gray-500">
                <div class="logosec flex items-center justify-center">
                    <img src="images/capsitech-logo.png" class="brand-icn h-[40px] cursor-pointer" alt="brand-logo" />
                    <div class="logo pt-[5px] text-[20px] font-semibold text-white italic">Capsiform</div>
                </div>
                <button class="md:hidden text-gray-500 hover:text-gray-700" id="close-sidebar">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <nav class="flex-grow mt-6">
                <ul>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-4 bg-white text-black rounded-lg mx-3 shadow-md">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-4 text-white hover:bg-violet-100 hover:text-violet-600 rounded-lg mx-3">
                            <i class="fas fa-users mr-3"></i>
                            Users
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-4 text-white hover:bg-violet-100 hover:text-violet-600 rounded-lg mx-3">
                            <i class="fa fa-question-circle mr-3" aria-hidden="true"></i>
                            Enquiries
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-4 text-white hover:bg-violet-100 hover:text-violet-600 rounded-lg mx-3">
                            <i class="fas fa-box mr-3"></i>
                            Products
                        </a>
                    </li>
                    <div class="mt-40">
                        <li class="mb-2">
                            <a href="#" class="flex items-center p-4 text-white hover:bg-violet-100 hover:text-violet-600 rounded-lg mx-3">
                                <i class="fas fa-sign-out-alt mr-3"></i>
                                Log Out
                            </a>
                        </li>
                    </div>
                </ul>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="w-full bg-white shadow-lg p-4 flex items-center justify-between border-b border-gray-200">
                <button class="md:hidden text-gray-500 hover:text-gray-700" id="open-sidebar">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                <div class="md:hidden text-lg font-semibold text-gray-800">Dashboard</div>
                <div class="hidden md:block text-lg font-semibold text-gray-800"></div> <div class="flex items-center">
                    <span class="mr-2 text-gray-700 font-medium hidden md:block">Mr. Peps Jangid</span>
                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png" alt="User Avatar" class="w-10 h-10 rounded-full border-2 border-violet-500">
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6 md:p-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-gray-600 rounded-lg p-6 flex items-center justify-between shadow-md">
                        <div>
                            <div class="text-4xl font-bold text-white">60.5k</div>
                            <div class="text-white text-sm mt-1">Article Views</div>
                        </div>
                        <div class="text-white">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </div>
                    </div>

                    <div class="bg-gray-600 rounded-lg p-6 flex items-center justify-between shadow-md">
                        <div>
                            <div class="text-4xl font-bold text-white">150</div>
                            <div class="text-white text-sm mt-1">Likes</div>
                        </div>
                        <div class="text-white">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21H3a1 1 0 01-1-1V9a1 1 0 011-1h6l2-3h4v4z"></path></svg>
                        </div>
                    </div>

                    <div class="bg-gray-600 rounded-lg p-6 flex items-center justify-between shadow-md">
                        <div>
                            <div class="text-4xl font-bold text-white">320</div>
                            <div class="text-white text-sm mt-1">Comments</div>
                        </div>
                        <div class="text-white">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        </div>
                    </div>

                    <div class="bg-gray-600 rounded-lg p-6 flex items-center justify-between shadow-md">
                        <div>
                            <div class="text-4xl font-bold text-white">70</div>
                            <div class="text-white text-sm mt-1">Published</div>
                        </div>
                        <div class="text-white">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl text-center font-semibold text-gray-800">User's Details</h2>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase">ID</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase">USERNAME</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase">EMAIL</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase">CREATED_AT</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1. </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mr. Peps</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">peps@gmail.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-08-04 12:30:03</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-blue-700 active:bg-blue-900  text-white cursor-pointer">Edit</button>
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-red-700  active:bg-red-900  text-white cursor-pointer">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2. </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mr. Peps</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">peps@gmail.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-08-04 12:30:03</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-blue-700 active:bg-blue-900  text-white cursor-pointer">Edit</button>
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-red-700  active:bg-red-900  text-white cursor-pointer">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3. </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mr. Peps</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">peps@gmail.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-08-04 12:30:03</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-blue-700 active:bg-blue-900  text-white cursor-pointer">Edit</button>
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-red-700  active:bg-red-900  text-white cursor-pointer">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">4. </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mr. Peps</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">peps@gmail.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-08-04 12:30:03</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-blue-700 active:bg-blue-900  text-white cursor-pointer">Edit</button>
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-red-700  active:bg-red-900  text-white cursor-pointer">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">5. </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mr. Peps</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">peps@gmail.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-08-04 12:30:03</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-blue-700 active:bg-blue-900  text-white cursor-pointer">Edit</button>
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-red-700  active:bg-red-900  text-white cursor-pointer">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">6. </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mr. Peps</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">peps@gmail.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-08-04 12:30:03</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-blue-700 active:bg-blue-900  text-white cursor-pointer">Edit</button>
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-red-700  active:bg-red-900  text-white cursor-pointer">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">7. </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mr. Peps</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">peps@gmail.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-08-04 12:30:03</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-blue-700 active:bg-blue-900  text-white cursor-pointer">Edit</button>
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-red-700  active:bg-red-900  text-white cursor-pointer">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">8. </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mr. Peps</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">peps@gmail.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-08-04 12:30:03</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-blue-700 active:bg-blue-900  text-white cursor-pointer">Edit</button>
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-red-700  active:bg-red-900  text-white cursor-pointer">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">9. </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mr. Peps</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">peps@gmail.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-08-04 12:30:03</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-blue-700 active:bg-blue-900  text-white cursor-pointer">Edit</button>
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-red-700  active:bg-red-900  text-white cursor-pointer">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">10. </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mr. Peps</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">peps@gmail.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-08-04 12:30:03</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-blue-700 active:bg-blue-900  text-white cursor-pointer">Edit</button>
                                        <button type="button" class="px-4 py-2 text-xs font-semibold rounded-lg bg-red-700  active:bg-red-900  text-white cursor-pointer">Delete</button>
                                    </td>
                                </tr>                              
                                </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const openSidebarBtn = document.getElementById('open-sidebar');
        const closeSidebarBtn = document.getElementById('close-sidebar');

        openSidebarBtn.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full');
        });

        closeSidebarBtn.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (event) => {
            if (window.innerWidth < 768 && !sidebar.contains(event.target) && !openSidebarBtn.contains(event.target)) {
                sidebar.classList.add('-translate-x-full');
            }
        });
    </script>
</body>
</html>