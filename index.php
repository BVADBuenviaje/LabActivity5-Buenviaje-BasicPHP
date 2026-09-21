<?php
session_start();
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="assets/css/tailwind.min.css">
        <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    </head>
    <body class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-96 text-center">
            <h1 class="text-2xl font-bold mb-2 text-gray-800">Welcome</h1>
            <p class="text-gray-600 mb-6"><?php echo htmlspecialchars($_SESSION['userEmail']); ?></p>
            <form method="POST" action="index.php">
                <button type="submit" name="logout" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Logout</button>
            </form>
        </div>
    </body>
</html>