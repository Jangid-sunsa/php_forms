<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capsiform Uses Dashboard</title>
    <link rel="icon" href="images/capsitech-logo.png" type="image/Capsi-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
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

<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">
        <?php include('assets/sidebar.inc.php') ?>
        <div class="flex-1 flex flex-col overflow-hidden">
            <?php include('assets/header.inc.php') ?>
            <?php include('assets/connection.inc.php') ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>