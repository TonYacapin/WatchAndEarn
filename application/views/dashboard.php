<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            font-size: 36px;
            font-weight: bold;
            color: #ffffff;
        }
        h2 {
            font-size: 30px;
            font-weight: 600;
            color: #3498db;
        }
        h3 {
            font-size: 24px;
            font-weight: 500;
            color: #2ecc71;
        }
        p, li, a {
            font-size: 16px;
            color: #2c3e50;
        }
        a {
            color: #3498db;
        }
        a:hover {
            text-decoration: underline;
        }
        .primary-btn {
            background-color: #3498db;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }
        .primary-btn:hover {
            background-color: #2980b9;
        }
        .secondary-btn {
            background-color: #2ecc71;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }
        .secondary-btn:hover {
            background-color: #27ae60;
        }
        .form-input {
            border: 1px solid #bdc3c7;
            padding: 10px;
            border-radius: 3px;
            margin-bottom: 10px;
        }
        .form-label {
            font-size: 14px;
            color: #2c3e50;
        }
        .alert-success {
            background-color: #2ecc71;
            color: #ffffff;
            padding: 10px;
            border-radius: 3px;
        }
        .alert-error {
            background-color: #e74c3c;
            color: #ffffff;
            padding: 10px;
            border-radius: 3px;
        }
        .action-box {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
            transition: transform 0.2s;
        }
        .action-box:hover {
            transform: translateY(-5px);
        }
        .action-box i {
            font-size: 24px;
            color: #3498db;
            margin-bottom: 10px;
        }
        .action-box a {
            display: block;
            margin-top: 10px;
            font-size: 18px;
            color: #3498db;
        }
    </style>
</head>
<body>

<header class="text-center py-4">
    <h1>Dashboard</h1>
</header>

<div class="container mt-10">
    <div class="max-w-md mx-auto bg-white p-8 border border-gray-300 rounded-lg shadow-lg text-center">
        <h2>Welcome, <?php echo $user->username; ?></h2>
        <p class="mb-4">Points: <?php echo $user->points; ?></p>

        <h3 class="mb-6">Actions</h3>

        <div class="action-box">
            <i class="fas fa-video"></i>
            <a href="<?php echo site_url('auth/watch_video'); ?>">Watch Video and Earn Points</a>
        </div>

        <div class="action-box">
            <i class="fas fa-dollar-sign"></i>
            <a href="<?php echo site_url('auth/convert_points_to_cash'); ?>">Convert Points to Cash</a>
        </div>

        <div class="action-box">
            <i class="fas fa-plus-circle"></i>
            <a href="<?php echo site_url('auth/list_videos'); ?>">Manage Videos</a>
        </div>

        <div class="action-box">
            <i class="fas fa-sign-out-alt"></i>
            <a href="<?php echo site_url('auth/logout'); ?>" class="text-red-500 hover:text-red-700">Logout</a>
        </div>

        <?php if($this->session->flashdata('success')): ?>
            <div class="alert-success mb-4">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <?php if($this->session->flashdata('error')): ?>
            <div class="alert-error mb-4">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<footer class="text-center py-4 mt-10">
    <p>&copy; 2024 WatchAndEarn All Rights Reserved</p>
</footer>

</body>
</html>
