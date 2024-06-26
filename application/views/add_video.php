<!-- application/views/admin/add_video.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Add Video</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

<header class="bg-blue-500 text-white text-center py-4">
    <h1 class="text-3xl font-bold">Add Video</h1>
</header>

<div class="container mx-auto mt-10">
    <div class="max-w-md mx-auto bg-white p-8 border border-gray-300 rounded-lg shadow-lg">
        <?php echo form_open('auth/add_video'); ?>
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                <input type="text" id="title" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="url" class="block text-gray-700 font-bold mb-2">Video URL:</label>
                <input type="text" id="url" name="url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="points_reward" class="block text-gray-700 font-bold mb-2">Points Reward:</label>
                <input type="number" id="points_reward" name="points_reward" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Video</button>
        <?php echo form_close(); ?>
    </div>
</div>

<footer class="bg-gray-300 text-center text-gray-700 py-4 mt-10">
    <p>&copy; 2024 WatchAndEarn All Rights Reserved</p>
</footer>

</body>
</html>
