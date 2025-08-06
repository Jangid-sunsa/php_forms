<div id="editFormContainer" class="max-w-md mx-auto my-10 p-8 bg-transparent border border-black rounded-lg">
    <form id="editForm" action="" method="POST" onsubmit="return validEditForm()" class="relative">
        <button type="button" onclick="hideEditForm()"
            class="absolute top-2 right-3 h-14 text-black font-medium rounded-md">
            <i class="fa-solid fa-x"></i>
        </button>
        <h2 class="text-black text-2xl font-semibold mb-5 flex items-center justify-center space-x-2">
            <img src="images/capsitech-logo.png" class="h-8" alt="Capiform Logo" />
            <span class="text-black text-xl font-medium">Edit Details</span>
        </h2>

        <input type="hidden" id="edit_id" name="edit_id" />

        <div class="text-left h-[6.2rem]">
            <label for="edit_username" class="block text-black font-medium mb-2">User Name</label>
            <input type="text" id="edit_username" name="username" placeholder="Enter user Name"
                class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300" />
            <span id="userErr" class="text-red-700 text-sm"></span>
        </div>

        <div class="text-left h-[6.2rem]">
            <label for="edit_email" class="block text-black font-medium mb-2">Email</label>
            <input type="email" id="edit_email" name="email" placeholder="Enter your email"
                class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300" />
            <span id="emailErr" class="text-red-700 text-sm"></span>
        </div>

        <div class="text-left relative h-[6.2rem]">
            <label for="edit_password" class="block text-black font-medium mb-2">Password</label>
            <input type="password" id="edit_password" name="password" placeholder="Enter new password"
                class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300 pr-10" />
            <span id="passwordErr" class="text-red-700 text-sm"></span>
            <span class="absolute right-3 top-[38px] text-black cursor-pointer"
                onclick="togglePassword('edit_password', this)">
                <i class="fa-solid fa-eye my-2"></i>
            </span>

        </div>

        <div class="mb-3 text-left relative h-[6.4rem]">
            <label for="edit_confirmPassword" class="block text-black font-medium mb-2">Confirm
                Password</label>
            <input type="password" id="edit_confirmPassword" name="confirmPassword" placeholder="Confirm your password"
                class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300 pr-10" />
            <span id="conpassErr" class="text-red-700 text-sm"></span>
            <span class="absolute right-3 top-[38px] text-black cursor-pointer"
                onclick="togglePassword('edit_confirmPassword', this)">
                <i class="fa-solid fa-eye my-2"></i>
            </span>

        </div>

        <button id="submit-btn" type="submit"
            class="mb-3 w-full py-2.5 bg-[#FF6347] hover:bg-[#FF4500] text-black font-medium rounded-md transition duration-300">
            Update
        </button>
    </form>
</div>