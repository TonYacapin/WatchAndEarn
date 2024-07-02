<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            font-size: 32px;
            font-weight: bold;
        }
        h2 {
            font-size: 24px;
            font-weight: 600;
        }
        label {
            font-size: 14px;
            color: #bdc3c7;
        }
        input {
            background-color: #34495e;
            border: 1px solid #7f8c8d;
            padding: 10px;
            border-radius: 3px;
            margin-top: 5px;
            margin-bottom: 10px;
            color: #ecf0f1;
            width: 100%;
        }
        .toggle-password {
            cursor: pointer;
            color: #bdc3c7;
        }
        button {
            background-color: #1abc9c;
            color: #ecf0f1;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            width: 100%;
        }
        button:hover {
            background-color: #16a085;
        }
        .error-message {
            background-color: #e74c3c;
            color: #ecf0f1;
            padding: 10px;
            border-radius: 3px;
            margin-bottom: 10px;
        }
        .success-message {
            background-color: #27ae60;
            color: #ecf0f1;
            padding: 10px;
            border-radius: 3px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<header class="text-center py-4">
    <h1>Watch and Earn</h1>
</header>

<div class="container mt-10">
    <div class="bg-gray-800 p-8 border border-gray-700 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">Register</h2>

        <?php if(validation_errors()): ?>
            <div class="error-message">
                <?php echo validation_errors(); ?>
            </div>
        <?php endif; ?>

        <?php echo form_open('auth/register'); ?>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>">
            </div>
            <div class="relative">
                <label for="password">Password:</label>
                <div class="flex items-center">
                    <input type="password" id="password" name="password">
                    <span class="toggle-password ml-2" onclick="togglePasswordVisibility()">👁️</span>
                </div>
            </div>
            <button type="submit">Register</button>
        <?php echo form_close(); ?>

        <p class="mt-4 text-center">Already have an account? <a href="<?php echo site_url('auth'); ?>" class="text-green-500 hover:text-green-700">Login here</a></p>

        <?php if($this->session->flashdata('error')): ?>
            <div class="error-message mt-4">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>



<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>

</body>
</html>
