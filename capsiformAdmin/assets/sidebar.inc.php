<!-- Sidebar for dashboard -->
<aside
    class="w-64 bg-gray-800 shadow-lg flex flex-col md:relative fixed inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out z-50"
    id="sidebar">
    <div class="p-4 flex items-center justify-between border-b border-gray-500">
        <div class="logosec flex items-center justify-center">
            <img src="images/capsitech-logo.png" class="brand-icn h-[40px] cursor-pointer" alt="brand-logo" />
            <div class="logo pt-[5px] text-[20px] font-semibold text-white italic">Capsiform</div>
        </div>
        <button class="md:hidden text-gray-500 hover:text-gray-700" id="close-sidebar">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <nav class="flex-grow mt-6">
        <ul>
            <li class="mb-2">
                <a href="./index.php" class="flex items-center p-4 rounded-lg mx-3
        <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'bg-violet-100 text-violet-900' : 'text-white' ?>">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
            </li>
            <li class="mb-2">
                <a href="./users.php" class="flex items-center p-4 rounded-lg mx-3
        <?= basename($_SERVER['PHP_SELF']) == 'users.php' ? 'bg-violet-100 text-violet-600' : 'text-white' ?>">
                    <i class="fas fa-users mr-3"></i>
                    Users
                </a>
            </li>
            <li class="mb-2">
                <a href="./enquiries.php" class="flex items-center p-4 rounded-lg mx-3
        <?= basename($_SERVER['PHP_SELF']) == 'enquiries.php' ? 'bg-violet-100 text-violet-600' : 'text-white' ?>">
                    <i class="fa fa-question-circle mr-3"></i>
                    Enquiries
                </a>
            </li>
            <li class="mb-2">
                <a href="./product.php" class="flex items-center p-4 rounded-lg mx-3
        <?= basename($_SERVER['PHP_SELF']) == 'product.php' ? 'bg-violet-100 text-violet-600' : 'text-white' ?>">
                    <i class="fas fa-box mr-3"></i>
                    Products
                </a>
            </li>
            <!-- Use margin-top on the list item to push it down -->
            <li class="mt-40 mb-2">
                <a href="../prectice_php/index.php" class="flex items-center p-4 rounded-lg mx-3
                <?= basename($_SERVER['PHP_SELF']) == 'logout.php' ? 'bg-violet-100 text-violet-600' : 'text-white' ?>">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Log Out
                </a>
            </li>
        </ul>
    </nav>


</aside>
