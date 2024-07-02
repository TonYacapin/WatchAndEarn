<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
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
            color: #ecf0f1;
        }
        input[type="text"], input[type="password"], select {
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
        .form-container {
            background-color: #34495e;
            padding: 20px;
            border: 1px solid #7f8c8d;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .alert-error {
            background-color: #c0392b;
            color: #ecf0f1;
            padding: 10px;
            border-radius: 3px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<header class="text-center py-4">
    <h1>Add User</h1>
</header>

<div class="container mt-10">
    <?php echo validation_errors('<div class="alert-error">', '</div>'); ?>
    <?php echo form_open('auth/add_user', ['class' => 'form-container']); ?>
        
        <div class="mb-4">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>">
        </div>

        <div class="mb-4">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>

        <div class="mb-4">
            <label for="role">Role:</label>
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="moderator">Moderator</option>
                <option value="customer">Customer</option>
            </select>
        </div>

        <input type="submit" value="Add User">
        
    <?php echo form_close(); ?>
</div>
  
</body>
</html>
