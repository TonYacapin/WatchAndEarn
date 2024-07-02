<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Video</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #2c3e50;
            color: #ecf0f1;
        }
        header, footer {
            background-color: #34495e;
            color: #ecf0f1;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            font-size: 32px;
            font-weight: bold;
        }
        label {
            font-size: 16px;
            font-weight: bold;
            color: #bdc3c7;
        }
        input[type="text"], input[type="number"] {
            border: 1px solid #7f8c8d;
            padding: 10px;
            border-radius: 3px;
            width: 100%;
            margin-top: 5px;
            margin-bottom: 15px;
            font-size: 16px;
            background-color: #34495e;
            color: #ecf0f1;
        }
        input[type="submit"] {
            background-color: #1abc9c;
            color: #ecf0f1;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #16a085;
        }
        .alert-error {
            background-color: #c0392b;
            color: #ecf0f1;
            padding: 10px;
            border-radius: 3px;
        }
    </style>
</head>
<body>

<header class="text-center py-4">
    <h1 class="text-4xl font-bold">Edit Video</h1>
</header>

<div class="container mt-10">
    <?php echo validation_errors('<div class="alert-error mb-4">', '</div>'); ?>
    <?php echo form_open('auth/edit_video/' . $video->id, ['class' => 'bg-gray-800 p-8 border border-gray-700 rounded-lg shadow-lg']); ?>

    <div class="mb-4">
        <label for="title" class="block text-sm font-medium">Title:</label>
        <input type="text" name="title" id="title" class="mt-1 block w-full" value="<?php echo set_value('title', $video->title); ?>">
    </div>

    <div class="mb-4">
        <label for="url" class="block text-sm font-medium">Video URL:</label>
        <input type="text" name="url" id="url" class="mt-1 block w-full" value="<?php echo set_value('url', $video->url); ?>">
    </div>

    <div class="mb-4">
        <label for="points_reward" class="block text-sm font-medium">Points Reward:</label>
        <input type="number" name="points_reward" id="points_reward" class="mt-1 block w-full" value="<?php echo set_value('points_reward', $video->points_reward); ?>">
    </div>

    <input type="submit" value="Update Video" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
    
    <?php echo form_close(); ?>
</div>

</body>
</html>
