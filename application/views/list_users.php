<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>List of Users</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-gray-100 font-sans">
    <header class="bg-gray-800 text-white text-center py-6 shadow-lg">
        <h1 class="text-4xl font-bold">List of Users</h1>
    </header>

    <div class="container mx-auto px-4 py-8">
        <?php if ($this->session->flashdata('success')): ?>
            <p class="bg-green-600 text-white p-4 rounded mb-6"><?php echo $this->session->flashdata('success'); ?></p>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
            <p class="bg-red-600 text-white p-4 rounded mb-6"><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>

        <div class="flex justify-between mb-6">
            <a href="<?php echo site_url('auth/add_user'); ?>" class="bg-green-600 text-white px-5 py-3 rounded hover:bg-green-700">Add New User</a>
            <a href="<?php echo site_url('auth/dashboard'); ?>" class="bg-blue-600 text-white px-5 py-3 rounded hover:bg-blue-700">Back to Dashboard</a>
        </div>

        <table class="w-full bg-gray-800 shadow-lg rounded-lg">
            <thead class="bg-gray-700">
                <tr>
                    <th class="text-left p-4 text-gray-100">Username</th>
                    <th class="text-left p-4 text-gray-100">Role</th>
                    <th class="text-left p-4 text-gray-100">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr class="border-b border-gray-600 hover:bg-gray-700">
                        <td class="p-4 text-gray-100"><?php echo $user->username; ?></td>
                        <td class="p-4 text-gray-100"><?php echo $user->role; ?></td>
                        <td class="p-4 text-gray-100">
                            <a href="<?php echo site_url('auth/edit_user/' . $user->id); ?>" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</a>
                            <?php if ($user->role === 'customer' || $user->role === 'Banned'): ?>
                                <?php if ($user->role === 'Banned'): ?>
                                    <a href="<?php echo site_url('auth/unban_user/' . $user->id); ?>" onclick="return confirm('Are you sure you want to unban this user?');" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700 ml-2">Unban</a>
                                <?php else: ?>
                                    <a href="<?php echo site_url('auth/ban_user/' . $user->id); ?>" onclick="return confirm('Are you sure you want to ban this user?');" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 ml-2">Ban</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
