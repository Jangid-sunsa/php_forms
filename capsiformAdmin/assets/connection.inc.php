<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6 md:p-8">
    <?php

    // DB ke lie connections
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_DB";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete button
    if (isset($_POST['delete_id'])) {
        $delete_id = intval($_POST['delete_id']);
        $conn->query("DELETE FROM users WHERE id = $delete_id");
    }

    $sql = "SELECT * FROM users ORDER BY created_at DESC";
    $result = $conn->query($sql);

    // Edit button
    if (isset($_POST['edit_id'])) {
        $edit_id = intval($_POST['edit_id']);
        $edit_username = $conn->real_escape_string($_POST['username']);
        $edit_email = $conn->real_escape_string($_POST['email']);

        if (!empty($_POST['password'])) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $update_sql = "UPDATE users SET username='$edit_username', email='$edit_email', password='$password' WHERE id=$edit_id";
        } else {
            $update_sql = "UPDATE users SET username='$edit_username', email='$edit_email' WHERE id=$edit_id";
        }

        if ($conn->query($update_sql)) {
            echo "<script>
                      alert('User updated successfully!');
                      window.location.href = '" . $_SERVER['PHP_SELF'] . "';
                    </script>";
            exit;
        } else {
            echo "<script>alert('Update failed!');</script>";
        }
    }

    $result = $conn->query("SELECT * FROM users");
    if (!$result) {
        die("Invalid query: " . $conn->error);
    }
    
    ?>

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
                <input type="password" id="edit_confirmPassword" name="confirmPassword"
                    placeholder="Confirm your password"
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

    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl text-center font-semibold text-gray-800">User's Details</h2>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase">
                            ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase">
                            USERNAME</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase">
                            EMAIL</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-black uppercase">
                            CREATED_AT</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-bold text-black uppercase">
                            ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                <?php
                    $index = 0;
                    while ($row = $result->fetch_assoc()) {
                        $index++;
                        echo '<tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">' . ($index) . '</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">' . ($row["username"]) . '</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">' . ($row["email"]) . '</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black">' . ($row["Created_at"]) . '</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex item-center justify-center space-x-2">
                                            <button
                                            onclick="showEditForm(' . $row["id"] . ', \'' . addslashes($row["username"]) . '\', \'' . addslashes($row["email"]) . '\')"
                                            class="bg-[#00CED1] hover:bg-[#01DED1]  text-white text-sm px-3 py-1 rounded"
                                            >Edit</button>

                                            <!-- Delete form -->
                                            <form method="POST" onsubmit="return confirm(\'Are you sure you want to delete this user?\');" style="display:inline;">
                                            <input type="hidden" name="delete_id" value="' . $row["id"] . '"/>
                                            <button type="submit" class="bg-[#FF6347] hover:bg-[#FF4500] text-white text-sm px-3 py-1 rounded">
                                                Delete
                                            </button>
                                            </form>
                                        </div>
                                        </td>
                                    </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>