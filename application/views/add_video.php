<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Video</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            color: #ecf0f1;
        }
        input[type="text"], input[type="number"] {
            background-color: #34495e;
            border: 1px solid #7f8c8d;
            padding: 10px;
            border-radius: 3px;
            width: 100%;
            margin-top: 5px;
            margin-bottom: 15px;
            font-size: 16px;
            color: #ecf0f1;
        }
        button[type="submit"] {
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
        button[type="submit"]:hover {
            background-color: #16a085;
        }
        .form-container {
            background-color: #34495e;
            padding: 20px;
            border: 1px solid #7f8c8d;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<header class="text-center py-4">
    <h1>Add Video</h1>
</header>

<div class="container mt-10">
    <div class="max-w-md mx-auto form-container">
        <?php echo form_open('auth/add_video'); ?>
            <div class="mb-4">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="mb-4">
                <label for="url">YouTube Video URL:</label>
                <input type="text" id="url" name="url" required>
            </div>
            <div class="mb-4">
                <label for="points_reward">Points Reward:</label>
                <input type="number" id="points_reward" name="points_reward" required>
            </div>
            <button type="submit">Add Video</button>
        <?php echo form_close(); ?>
    </div>
</div>

</body>
</html>
