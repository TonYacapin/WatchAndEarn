<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Video</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 text-gray-800 font-sans">
    <header class="bg-blue-600 text-white text-center py-5">
        <h1 class="text-4xl font-bold">Edit Video</h1>
    </header>
    <div class="container mx-auto px-4 py-5">
        <?php echo validation_errors('<div class="bg-red-500 text-white p-3 rounded mb-4">', '</div>'); ?>
        <?php echo form_open('auth/edit_video/' . $video->id, ['class' => 'bg-white p-6 rounded shadow-md']); ?>
        
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="<?php echo set_value('title', $video->title); ?>">
        </div>

        <div class="mb-4">
            <label for="url" class="block text-sm font-medium text-gray-700">Video URL:</label>
            <input type="text" name="url" id="url" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="<?php echo set_value('url', $video->url); ?>">
        </div>

        <div class="mb-4">
            <label for="points_reward" class="block text-sm font-medium text-gray-700">Points Reward:</label>
            <input type="text" name="points_reward" id="points_reward" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="<?php echo set_value('points_reward', $video->points_reward); ?>">
        </div>

        <input type="submit" value="Update Video" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
        
        <?php echo form_close(); ?>
    </div>
    <footer class="bg-gray-400 text-gray-600 text-center py-3">
        &copy; 2024 Your Website
    </footer>
</body>
</html>
