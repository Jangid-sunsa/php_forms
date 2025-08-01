<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Capsiform Admin Panel</title>
    <link rel="icon" href="images/capsitech-logo.png" type="image/Capsi-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
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
                    <button
                        type="button"
                        class="text-white bg-[#00CED1] font-medium rounded-lg text-sm px-4 py-2 text-center"
                    >
                        Get Started
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <div class="mt-[150px]">
        <h2 class="text-white text-2xl font-semibold mb-5">
            <a href="data.php" class="flex items-center justify-center">
                <img src="images/capsitech-logo.png" class="h-10" alt="Capiform Logo" />
                <span class="text-white text-2xl font-medium">Capsiform Users Details</span>
            </a>
        </h2>
        <div class="flex justify-center">
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
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "user_DB";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        if (isset($_POST['delete_id'])) {
                            $delete_id = intval(value: $_POST['delete_id']);
                            $delete_sql = "DELETE FROM users WHERE id = $delete_id";
                            $conn->query($delete_sql);
                        }
                       $sql = "SELECT * FROM users ORDER BY Created_at DESC";
                        $result = $conn->query($sql);

                        if (!$result) {
                            die("Invailid query: " . $conn->error);
                        }
                        $index = 0;
                        while ($row = $result->fetch_assoc()) {
                            $index++;
                            echo '<tr class="border border-white">
                        <td class="border border-white py-3 px-8 text-start">' . ($index) . '</td>
                            <td class="border border-white py-3 px-8 text-start">' . $row["username"] . '</td>
                            <td class="border border-white py-3 px-8 text-start">' . $row["email"] . '</td>
                            <td class="border border-white py-3 px-8 text-start">' . ($row["Created_at"]) . '</td>
                            <td class="border border-white py-3 px-8 text-start">
                                <div class="flex item-center justify-center space-x-2">
                                    <button class="bg-[#00CED1] hover:bg-[#01DED1]  text-white text-sm px-3 py-1 rounded">Edit</button>

                                    <!-- Add a form around Delete button -->
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
</body>

</html>
