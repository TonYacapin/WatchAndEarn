<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Users</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 text-gray-800 font-sans">
    <header class="bg-blue-600 text-white text-center py-5">
        <h1 class="text-4xl font-bold">List of Users</h1>
    </header>
    <div class="container mx-auto px-4 py-5">
        <?php if ($this->session->flashdata('success')): ?>
            <p class="bg-green-500 text-white p-3 rounded mb-4"><?php echo $this->session->flashdata('success'); ?></p>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
            <p class="bg-red-500 text-white p-3 rounded mb-4"><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>

        <a href="<?php echo site_url('auth/add_user'); ?>" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 inline-block mb-4">Add New User</a>
        <table class="w-full bg-white shadow-md rounded-lg">
            <thead class="bg-gray-300">
                <tr>
                    <th class="text-left p-3">Username</th>
                    <th class="text-left p-3">Role</th>
                    <th class="text-left p-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr class="border-b border-gray-300">
                        <td class="p-3"><?php echo $user->username; ?></td>
                        <td class="p-3"><?php echo $user->role; ?></td>
                        <td class="p-3">
                            <a href="<?php echo site_url('auth/edit_user/' . $user->id); ?>" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700 inline-block">Edit</a>
                            <a href="<?php echo site_url('auth/delete_user/' . $user->id); ?>" onclick="return confirm('Are you sure you want to delete this user?');" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 inline-block ml-2">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <footer class="bg-gray-400 text-gray-600 text-center py-3">
        &copy; 2024 Your Website
    </footer>
</body>
</html>
