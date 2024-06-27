<!DOCTYPE html>
<html>
<head>
    <title>Add Video</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #ecf0f1;
            color: #2c3e50;
        }
        header, footer {
            background-color: #3498db;
            color: #ffffff;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            font-size: 36px;
            font-weight: bold;
            color: #ffffff;
        }
        label {
            font-size: 16px;
            font-weight: bold;
            color: #2c3e50;
        }
        input[type="text"], input[type="number"] {
            border: 1px solid #bdc3c7;
            padding: 10px;
            border-radius: 3px;
            width: 100%;
            margin-top: 5px;
            margin-bottom: 15px;
            font-size: 16px;
            color: #2c3e50;
        }
        button[type="submit"] {
            background-color: #2ecc71;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button[type="submit"]:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

<header class="text-center py-4">
    <h1 class="text-3xl font-bold">Add Video</h1>
</header>

<div class="container mx-auto mt-10">
    <div class="max-w-md mx-auto bg-white p-8 border border-gray-300 rounded-lg shadow-lg">
        <?php echo form_open('auth/add_video'); ?>
            <div class="mb-4">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="block">
            </div>
            <div class="mb-4">
                <label for="url">Video URL:</label>
                <input type="text" id="url" name="url" class="block">
            </div>
            <div class="mb-4">
                <label for="points_reward">Points Reward:</label>
                <input type="number" id="points_reward" name="points_reward" class="block">
            </div>
            <button type="submit">Add Video</button>
        <?php echo form_close(); ?>
    </div>
</div>

<footer class="text-center py-4 mt-10 bg-gray-300 text-gray-700">
    <p>&copy; 2024 WatchAndEarn All Rights Reserved</p>
</footer>

</body>
</html>
