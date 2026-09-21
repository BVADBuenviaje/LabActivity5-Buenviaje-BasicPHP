<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="assets/css/tailwind.min.css">
        <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
        <script>
            if (localStorage.getItem('isLoggedIn') === 'true') {
                window.location.href = 'index.php';
            }
        </script>
    </head>
    <body class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Register</h2>
            <form id="registerForm">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" id="email" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" id="password" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600 transition">Register</button>
            </form>
            <p class="mt-4 text-center text-sm text-gray-600">Already have an account? <a href="login.php" class="text-blue-500 hover:underline">Login</a></p>
        </div>
        <script>
            document.getElementById('registerForm').addEventListener('submit', function(e) {
                e.preventDefault();
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                localStorage.setItem('registeredEmail', email);
                localStorage.setItem('registeredPassword', password);
                window.location.href = 'login.php';
            });
        </script>
    </body>
</html>