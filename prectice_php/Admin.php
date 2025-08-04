<?php 
    // session_start();
    // if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    //     header("Location: login.php");
    //     exit(); 
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit Capsiform Details</title>
    <link rel="icon" href="images/capsitech-logo.png" type="image/Capsi-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .blurred {
            filter: blur(5px);
            pointer-events: none;
            user-select: none;
        }

        #editFormContainer {
            display: none;
        }
    </style>
</head>

<body style="background-image: url('images/bgimg2.jpg')" class="bg-cover">
    <nav class="bg-transparent fixed w-full z-20 top-0 start-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="register.php" class="flex items-center">
                <img src="images/capsitech-logo.png" class="h-10" alt="Capiform Logo" />
                <span class="self-center text-white text-2xl font-medium italic whitespace-nowrap">Capsiform</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0">
                <a href="index.php">
                    <button type="button"
                        class="text-white bg-[#00CED1] font-medium rounded-lg text-sm px-4 py-2 text-center">
                        Log Out
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <div class="mt-[150px] max-w-4xl mx-auto px-4">
        <h2 class="text-white text-2xl font-semibold mb-5 text-center">
            <a href="Admin.php" class="flex items-center justify-center space-x-2">
                <img src="images/capsitech-logo.png" class="h-10" alt="Capiform Logo" />
                <span class="text-white text-2xl font-medium">Capsiform Users Details</span>
            </a>
        </h2>

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
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }

        $sql = "SELECT * FROM users ORDER BY Created_at DESC";
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

        <div id="editFormContainer" class="max-w-md mx-auto my-10 p-8 bg-transparent border border-white rounded-lg">
            <form id="editForm" action="" method="POST" onsubmit="return validEditForm()" class="relative">
                <button type="button" onclick="hideEditForm()"
                    class="absolute top-2 right-3 h-14 text-white font-medium rounded-md">
                    <i class="fa-solid fa-x"></i>
                </button>
                <h2 class="text-white text-2xl font-semibold mb-5 flex items-center justify-center space-x-2">
                    <img src="images/capsitech-logo.png" class="h-8" alt="Capiform Logo" />
                    <span class="text-white text-xl font-medium">Edit Details</span>
                </h2>

                <input type="hidden" id="edit_id" name="edit_id" />

                <div class="text-left h-[6.2rem]">
                    <label for="edit_username" class="block text-white font-medium mb-2">User Name</label>
                    <input type="text" id="edit_username" name="username" placeholder="Enter user Name"
                        class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300" />
                    <span id="userErr" class="text-red-700 text-sm"></span>
                </div>

                <div class="text-left h-[6.2rem]">
                    <label for="edit_email" class="block text-white font-medium mb-2">Email</label>
                    <input type="email" id="edit_email" name="email" placeholder="Enter your email"
                        class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300" />
                    <span id="emailErr" class="text-red-700 text-sm"></span>
                </div>

                <div class="text-left relative h-[6.2rem]">
                    <label for="edit_password" class="block text-white font-medium mb-2">Password</label>
                    <input type="password" id="edit_password" name="password" placeholder="Enter new password"
                        class="w-full p-2.5 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-300 pr-10" />
                    <span id="passwordErr" class="text-red-700 text-sm"></span>
                    <span class="absolute right-3 top-[38px] text-black cursor-pointer"
                        onclick="togglePassword('edit_password', this)">
                        <i class="fa-solid fa-eye my-2"></i>
                    </span>

                </div>

                <div class="mb-3 text-left relative h-[6.4rem]">
                    <label for="edit_confirmPassword" class="block text-white font-medium mb-2">Confirm Password</label>
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
                    class="mb-3 w-full py-2.5 bg-[#FF6347] hover:bg-[#FF4500] text-white font-medium rounded-md transition duration-300">
                    Update
                </button>
            </form>
        </div>

        <div id="tableContainer" class="flex justify-center">
            <div class="overflow-x-auto">
                <table class="bg-transparent border border-white">
                    <thead>
                        <tr class="bg-transparent border border-white text-white uppercase text-sm leading-normal">
                            <th class="border border-white py-3 px-6 text-left">ID</th>
                            <th class="border border-white py-3 px-6 text-left">Username</th>
                            <th class="border border-white py-3 px-6 text-left">Email</th>
                            <th class="border border-white py-3 px-6 text-center">Created_at</th>
                            <th class="border border-white py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="text-2sm border border-white text-white ">
                        <?php
                        $index = 0;
                        while ($row = $result->fetch_assoc()) {
                            $index++;
                            echo '<tr class="border border-white">
                    <td class="border border-white py-3 px-4 text-start">' . ($index) . '</td>
                    <td class="border border-white py-3 px-4 text-start">' . ($row["username"]) . '</td>
                    <td class="border border-white py-3 px-4 text-start">' . ($row["email"]) . '</td>
                    <td class="border border-white py-3 px-4 text-start">' . ($row["Created_at"]) . '</td>
                    <td class="border border-white py-3 px-4 text-start">
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
    </div>

    <script>
        // FormEdit 
        function togglePassword(fieldId, iconElement) {
            const input = document.getElementById(fieldId);
            const icon = iconElement.querySelector("i");

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
        function showEditForm(id, username, email) {
            document.getElementById("edit_id").value = id;
            document.getElementById("edit_username").value = username;
            document.getElementById("edit_email").value = email;
            document.getElementById("edit_password").value = "";
            document.getElementById("edit_confirmPassword").value = "";

            document.getElementById("userErr").textContent = "";
            document.getElementById("emailErr").textContent = "";
            document.getElementById("conpassErr").textContent = "";

            document.getElementById("editFormContainer").style.display = "block";
            document.getElementById("tableContainer").classList.add("blurred");

            window.scrollTo({ top: 0, behavior: "smooth" });
        }

        function hideEditForm() {
            document.getElementById("editFormContainer").style.display = "none";
            document.getElementById("tableContainer").classList.remove("blurred");
        }

        function validEditForm() {
            let user = document.getElementById("edit_username").value.trim();
            let email = document.getElementById("edit_email").value.trim();
            let pass = document.getElementById("edit_password").value;
            let conPass = document.getElementById("edit_confirmPassword").value;
            let valid = true;

            document.getElementById("userErr").textContent = "";
            document.getElementById("emailErr").textContent = "";
            document.getElementById("conpassErr").textContent = "";

            if (user === "") {
                document.getElementById("userErr").textContent = "Username is required.";
                valid = false;
            }

            if (email === "") {
                document.getElementById("emailErr").textContent = "Email is required.";
                valid = false;
            } else {

                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    document.getElementById("emailErr").textContent = "Invalid email format.";
                    valid = false;
                }
            }

            if (pass !== "") {
                if (pass.length < 6) {
                    document.getElementById("conpassErr").textContent =
                        "Password must be at least 6 characters.";
                    valid = false;
                }
                if (pass !== conPass) {
                    document.getElementById("conpassErr").textContent =
                        "Passwords do not match.";
                    valid = false;
                }
            }

            return valid;
        }

    </script>

</body>

</html>