<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 text-gray-800 font-sans">
    <header class="bg-blue-600 text-white text-center py-5">
        <h1 class="text-4xl font-bold">Add User</h1>
    </header>
    <div class="container mx-auto px-4 py-5">
        <?php echo validation_errors('<div class="bg-red-500 text-white p-3 rounded mb-4">', '</div>'); ?>
        <?php echo form_open('auth/add_user', ['class' => 'bg-white p-6 rounded shadow-md']); ?>
        
        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
            <input type="text" name="username" id="username" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="<?php echo set_value('username'); ?>">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
            <input type="password" name="password" id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="role" class="block text-sm font-medium text-gray-700">Role:</label>
            <select name="role" id="role" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="admin">Admin</option>
                <option value="customer">Customer</option>
            </select>
        </div>

        <input type="submit" value="Add User" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
        
        <?php echo form_close(); ?>
    </div>
    <footer class="bg-gray-400 text-gray-600 text-center py-3">
        &copy; 2024 Your Website
    </footer>
</body>
</html>
