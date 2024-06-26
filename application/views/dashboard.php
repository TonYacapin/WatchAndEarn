<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

<header class="bg-blue-500 text-white text-center py-4">
    <h1 class="text-3xl font-bold">Dashboard</h1>
</header>

<div class="container mx-auto mt-10">
    <div class="max-w-md mx-auto bg-white p-8 border border-gray-300 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-blue-500 mb-6">Welcome, <?php echo $user->username; ?></h2>
        <p class="mb-4 text-gray-700">Points: <?php echo $user->points; ?></p>

        <h3 class="text-xl font-semibold text-gray-800 mb-4">Actions</h3>
        <ul class="list-disc list-inside mb-4">
            <li><a href="<?php echo site_url('auth/watch_video'); ?>" class="text-blue-500 hover:text-blue-700">Watch Video and Earn Points</a></li>
            <li><a href="<?php echo site_url('auth/convert_points_to_cash'); ?>" class="text-blue-500 hover:text-blue-700">Convert Points to Cash</a></li>
            <li><a href="<?php echo site_url('auth/add_video'); ?>" class="text-blue-500 hover:text-blue-700">Add Video</a></li>
            <li><a href="<?php echo site_url('auth/logout'); ?>" class="text-red-500 hover:text-red-700">Logout</a></li>
        </ul>

        <?php if($this->session->flashdata('success')): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <?php if($this->session->flashdata('error')): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<footer class="bg-gray-300 text-center text-gray-700 py-4 mt-10">
    <p>&copy; 2024 WatchAndEarn All Rights Reserved</p>
</footer>

</body>
</html>
