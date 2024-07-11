<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-gray-100 font-sans">
    <header class="bg-gray-800 text-white text-center py-6 shadow-lg">
        <h1 class="text-4xl font-bold">Edit User</h1>
    </header>

    <div class="container mx-auto px-4 py-8">
        <?php echo validation_errors('<div class="bg-red-600 text-white p-4 rounded mb-6">', '</div>'); ?>
        <?php echo form_open('auth/edit_user/' . $user->id, ['class' => 'bg-gray-800 p-8 rounded-lg shadow-lg']); ?>

        <div class="mb-6">
            <label for="username" class="block text-lg font-semibold mb-2">Username:</label>
            <input type="text" name="username" id="username" value="<?php echo set_value('username', $user->username); ?>" class="bg-gray-700 border border-gray-600 p-3 rounded w-full text-gray-100">
        </div>

        <div class="mb-6">
            <label for="role" class="block text-lg font-semibold mb-2">Role:</label>
            <select name="role" id="role" class="bg-gray-700 border border-gray-600 p-3 rounded w-full text-gray-100">
                <option value="admin" <?php echo set_select('role', 'admin', $user->role == 'admin'); ?>>Admin</option>
                <option value="moderator" <?php echo set_select('role', 'moderator', $user->role == 'moderator'); ?>>Moderator</option>
                <option value="customer" <?php echo set_select('role', 'customer', $user->role == 'customer'); ?>>Customer</option>
            </select>
        </div>

        <input type="submit" value="Update User" class="bg-green-600 text-white p-3 rounded w-full cursor-pointer hover:bg-green-700 transition-colors duration-300">

        <?php echo form_close(); ?>
    </div>
</body>

</html>
