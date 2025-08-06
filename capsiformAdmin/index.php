<?php
// session_start();

// // Check if admin is logged in
// if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
//     header("Location: ../prectice_php/login.php");
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capsiform Dashboard</title>
    <link rel="icon" href="images/capsitech-logo.png" type="image/Capsi-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="bg-gray-100 font-sans antialiased">
        <div class="flex h-screen overflow-hidden">
            <?php include 'assets/sidebar.inc.php' ?>
            <div class="flex-1 flex flex-col overflow-hidden">
                <?php include 'assets/header.inc.php' ?>
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6 md:p-8">
                    <?php include 'assets/dashboard.inc.php' ?>
                </main>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>