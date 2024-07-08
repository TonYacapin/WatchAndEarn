<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #2c3e50;
            color: #ecf0f1;
        }

        header,
        footer {
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

        h2 {
            font-size: 24px;
            font-weight: 600;
        }

        h3 {
            font-size: 20px;
            font-weight: 500;
        }

        p,
        li,
        a {
            font-size: 16px;
            color: #bdc3c7;
        }

        a {
            color: #1abc9c;
        }

        a:hover {
            text-decoration: underline;
        }

        .primary-btn {
            background-color: #1abc9c;
            color: #ecf0f1;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }

        .primary-btn:hover {
            background-color: #16a085;
        }

        .secondary-btn {
            background-color: #e74c3c;
            color: #ecf0f1;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }

        .secondary-btn:hover {
            background-color: #c0392b;
        }

        .form-input {
            background-color: #34495e;
            border: 1px solid #7f8c8d;
            padding: 10px;
            border-radius: 3px;
            margin-bottom: 10px;
            color: #ecf0f1;
        }

        .form-label {
            font-size: 14px;
            color: #bdc3c7;
        }

        .alert-success {
            background-color: #27ae60;
            color: #ecf0f1;
            padding: 10px;
            border-radius: 3px;
        }

        .alert-error {
            background-color: #c0392b;
            color: #ecf0f1;
            padding: 10px;
            border-radius: 3px;
        }

        .action-box {
            background-color: #34495e;
            padding: 20px;
            border: 1px solid #7f8c8d;
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
            color: #1abc9c;
            margin-bottom: 10px;
        }

        .action-box a {
            display: block;
            margin-top: 10px;
            font-size: 18px;
            color: #1abc9c;
        }
    </style>
</head>

<body>

    <header class="text-center py-4">
        <h1>Dashboard</h1>
    </header>

    <div class="container mt-10">
        <div class="max-w-md mx-auto bg-gray-800 p-8 border border-gray-700 rounded-lg shadow-lg text-center">
            <h2>Welcome, <?php echo $user->username; ?></h2>
            <?php if ($user->role == 'customer') : ?>
                <p class="mb-4">Points: <?php echo $user->points; ?></p>
            <?php endif; ?>

            <h3 class="mb-6">Actions</h3>

            <?php if ($user->role == 'customer') : ?>
                <div class="action-box">
                    <i class="fas fa-video"></i>
                    <a href="<?php echo site_url('auth/watch_video'); ?>">Watch Video and Earn Points</a>
                </div>

                <div class="action-box">
                    <i class="fas fa-dollar-sign"></i>
                    <a href="<?php echo site_url('convert_points_to_cash'); ?>">Convert Points to Cash</a>
                </div>

                <div class="action-box">
                    <i class="fas fa-receipt"></i>
                    <a href="<?php echo site_url('user/transactions'); ?>">Transactions</a>
                </div>


            <?php endif; ?>

            <?php if ($user->role == 'admin') : ?>
                <div class="action-box">
                    <i class="fas fa-plus-circle"></i>
                    <a href="<?php echo site_url('auth/list_videos'); ?>">Manage Videos</a>
                </div>

                <div class="action-box">
                    <i class="fas fa-users"></i>
                    <a href="<?php echo site_url('auth/list_users'); ?>">Manage Users</a>
                </div>

                <div class="action-box">
                    <i class="fas fa-receipt"></i>
                    <a href="<?php echo site_url('transactions'); ?>">Users Transactions</a>
                </div>
            <?php endif; ?>

            <?php if ($user->role == 'moderator') : ?>
                <div class="action-box">
                    <i class="fas fa-plus-circle"></i>
                    <a href="<?php echo site_url('auth/list_videos'); ?>">Manage Videos</a>
                </div>
            <?php endif; ?>

            <div class="action-box">
                <i class="fas fa-sign-out-alt"></i>
                <a href="<?php echo site_url('auth/logout'); ?>" class="text-red-500 hover:text-red-700">Logout</a>
            </div>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert-success mb-4">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')) : ?>
                <div class="alert-error mb-4">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>


</body>

</html>