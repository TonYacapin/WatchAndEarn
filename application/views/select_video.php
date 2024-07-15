<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Video</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        .video-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">

<header class="bg-blue-500 text-white text-center py-4">
    <h1 class="text-3xl font-bold">Select a Video</h1>
</header>

<div class="container mx-auto mt-10">
    <div class="max-w-2xl mx-auto bg-white p-8 border border-gray-300 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-blue-500 mb-6">Choose a video to watch</h2>

        <div class="grid gap-6">
            <?php foreach ($videos as $video): ?>
                <div class="video-card bg-gray-50 p-6 rounded-lg shadow-md hover:bg-gray-100">
                    <a href="<?php echo site_url('auth/watch_video/' . $video->id); ?>" class="block text-blue-500 hover:text-blue-700 text-xl font-medium mb-2">
                        <?php echo $video->title; ?>
                    </a>
                  
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<footer class="bg-gray-300 text-center text-gray-700 py-4 mt-10">
    <p>&copy; 2024 WatchAndEarn All Rights Reserved</p>
</footer>

</body>
</html>
