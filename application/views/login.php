<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .toggle-password {
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">

    <header class="bg-blue-500 text-white text-center py-4">
        <h1 class="text-3xl font-bold">WatchAndEarn</h1>
    </header>

    <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-white p-8 border border-gray-300 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-blue-500 mb-6 text-center">Login</h2>

            <?php if(validation_errors()): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?php echo form_open('auth/login'); ?>
                <div class="mb-4">
                    <label for="username" class="block text-gray-700">Username:</label>
                    <input type="text" name="username" class="mt-1 p-2 w-full border border-gray-300 rounded" value="<?php echo set_value('username'); ?>">
                </div>
                <div class="mb-4 relative">
                    <label for="password" class="block text-gray-700">Password:</label>
                    <div class="flex items-center">
                        <input type="password" id="password" name="password" class="mt-1 p-2 w-full border border-gray-300 rounded">
                        <span class="toggle-password ml-2 text-gray-700" onclick="togglePasswordVisibility()">👁️</span>
                    </div>
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
            <?php echo form_close(); ?>

            <p class="mt-4 text-center">Don't have an account? <a href="<?php echo site_url('auth/register'); ?>" class="text-blue-500 hover:text-blue-700">Register here</a></p>

            <?php if($this->session->flashdata('error')): ?>
                <div class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <footer class="bg-gray-300 text-center text-gray-700 py-4 mt-10">
        <p>&copy; 2024 WatchAndEarn All Rights Reserved</p>
    </footer>

    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</body>
</html>
