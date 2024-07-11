<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-gray-100 font-sans">
    <header class="bg-gray-800 text-white text-center py-6 shadow-lg">
        <h1 class="text-4xl font-bold">Add User</h1>
    </header>

    <div class="container mx-auto px-4 py-8">
        <?php echo validation_errors('<div class="bg-red-600 text-white p-4 rounded mb-6">', '</div>'); ?>
        <?php echo form_open('auth/add_user', ['class' => 'bg-gray-800 p-8 rounded-lg shadow-lg']); ?>

        <div class="mb-6">
            <label for="username" class="block text-lg font-semibold mb-2">Username:</label>
            <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" class="bg-gray-700 border border-gray-600 p-3 rounded w-full text-gray-100">
        </div>

        <div class="mb-6">
            <label for="password" class="block text-lg font-semibold mb-2">Password:</label>
            <input type="password" name="password" id="password" class="bg-gray-700 border border-gray-600 p-3 rounded w-full text-gray-100">
        </div>

        <div class="mb-6">
            <label for="role" class="block text-lg font-semibold mb-2">Role:</label>
            <select name="role" id="role" class="bg-gray-700 border border-gray-600 p-3 rounded w-full text-gray-100">
                <option value="admin">Admin</option>
                <option value="moderator">Moderator</option>
                <option value="customer">Customer</option>
            </select>
        </div>

        <input type="submit" value="Add User" class="bg-green-600 text-white p-3 rounded w-full cursor-pointer hover:bg-green-700 transition-colors duration-300">

        <?php echo form_close(); ?>
    </div>
</body>

</html>
