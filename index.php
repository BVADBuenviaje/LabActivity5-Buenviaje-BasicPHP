<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="assets/css/tailwind.min.css">
        <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
        <script>
            if (localStorage.getItem('isLoggedIn') !== 'true') {
                window.location.href = 'login.php';
            }
        </script>
    </head>
    <body class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-96 text-center">
            <h1 class="text-2xl font-bold mb-2 text-gray-800">Welcome</h1>
            <p class="text-gray-600 mb-6" id="userEmailDisplay"></p>
            <button id="logoutBtn" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Logout</button>
        </div>
        <script>
            const registeredEmail = localStorage.getItem('registeredEmail');
            if (registeredEmail) {
                document.getElementById('userEmailDisplay').textContent = registeredEmail;
            }
            document.getElementById('logoutBtn').addEventListener('click', function() {
                localStorage.removeItem('isLoggedIn');
                window.location.href = 'login.php';
            });
        </script>
    </body>
</html>