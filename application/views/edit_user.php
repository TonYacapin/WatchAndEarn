<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 text-gray-800 font-sans">
    <header class="bg-blue-600 text-white text-center py-5">
        <h1 class="text-4xl font-bold">Edit User</h1>
    </header>
    <div class="container mx-auto px-4 py-5">
        <?php echo validation_errors('<div class="bg-red-500 text-white p-3 rounded mb-4">', '</div>'); ?>
        <?php echo form_open('auth/edit_user/' . $user->id, ['class' => 'bg-white p-6 rounded shadow-md']); ?>
        
        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
            <input type="text" name="username" id="username" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="<?php echo set_value('username', $user->username); ?>">
        </div>

        <div class="mb-4">
            <label for="role" class="block text-sm font-medium text-gray-700">Role:</label>
            <select name="role" id="role" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="admin" <?php echo set_select('role', 'admin', $user->role == 'admin'); ?>>Admin</option>
                <option value="moderator" <?php echo set_select('role', 'moderator', $user->role == 'moderator'); ?>>Moderator</option>
                <option value="customer" <?php echo set_select('role', 'customer', $user->role == 'customer'); ?>>Customer</option>
            </select>
        </div>

        <input type="submit" value="Update User" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
        
        <?php echo form_close(); ?>
    </div>
    <footer class="bg-gray-400 text-gray-600 text-center py-3">
        &copy; 2024 Your Website
    </footer>
</body>
</html>
