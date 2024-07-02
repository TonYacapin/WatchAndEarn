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

<body class="bg-gray-900 text-gray-100">

    <header class="bg-gray-800 text-gray-100 text-center py-4 shadow-lg">
        <h1 class="text-3xl font-bold">Watch and Earn</h1>
    </header>

    <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-gray-800 p-8 border border-gray-700 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-100 mb-6 text-center">Login</h2>

            <?php if (validation_errors()) : ?>
                <div class="bg-red-600 border border-red-700 text-red-100 px-4 py-3 rounded mb-4">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?php echo form_open('auth/login'); ?>
            <div class="mb-4">
                <label for="username" class="block text-gray-300">Username:</label>
                <input type="text" name="username" class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded text-gray-100" value="<?php echo set_value('username'); ?>">
            </div>
            <div class="mb-4 relative">
                <label for="password" class="block text-gray-300">Password:</label>
                <div class="flex items-center">
                    <input type="password" id="password" name="password" class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded text-gray-100">
                    <span class="toggle-password ml-2 text-gray-500" onclick="togglePasswordVisibility()">👁️</span>
                </div>
            </div>
            <button type="submit" class="w-full bg-green-500 hover:bg-green-400 text-gray-100 font-bold py-2 px-4 rounded">Login</button>
            <?php echo form_close(); ?>

            <p class="mt-4 text-center text-gray-400">Don't have an account? <a href="<?php echo site_url('auth/register'); ?>" class="text-gray-300 hover:text-gray-100">Register here</a></p>

            <?php if ($this->session->flashdata('error')) : ?>
                <div class="mt-4 bg-red-600 border border-red-700 text-red-100 px-4 py-3 rounded">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>

            <!-- Debugging Credentials (Remove in Production) -->
            <div class="mt-6 text-center text-gray-400 text-lg">
                <p><strong> Debugging Credentials: </strong></p>
                <p>Username: <strong>admin</strong> | Password: <strong>admin</strong></p>
                <p>Username: <strong>moderator</strong> | Password: <strong>moderator</strong></p>
                <p>Username: <strong>customer</strong> | Password: <strong>customer</strong></p>
            </div>

        </div>
    </div>

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