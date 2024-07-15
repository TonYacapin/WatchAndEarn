<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #2c3e50;
            color: #ecf0f1;
        }

        .action-box {
            transition: transform 0.3s, background-color 0.3s;
        }

        .action-box:hover {
            transform: translateY(-5px);
            background-color: #3b4a5a;
        }

        .action-box i {
            font-size: 36px;
            color: #1abc9c;
            margin-bottom: 10px;
        }

        .action-box a {
            display: block;
            margin-top: 10px;
            font-size: 18px;
            color: #1abc9c;
            transition: color 0.3s;
        }

        .action-box a:hover {
            color: #16a085;
        }
    </style>
</head>

<body>
    <header class="text-center py-6 bg-gray-800 shadow-lg">
        <h1 class="text-3xl font-bold">Dashboard</h1>
    </header>

    <div class="container mx-auto mt-12">
        <div class="max-w-xl mx-auto bg-gray-900 p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Welcome, <?php echo $user->username; ?></h2>
            <?php if ($user->role == 'customer') : ?>
                <p class="mb-6">Points: <?php echo $user->points; ?></p>
            <?php endif; ?>

            <h3 class="text-xl font-medium mb-6">Actions</h3>

            <div class="grid gap-6 mb-8">
                <?php if ($user->role == 'customer') : ?>
                    <div class="action-box bg-gray-800 p-6 rounded-lg text-center shadow-md">
                        <i class="fas fa-video"></i>
                        <a href="<?php echo site_url('auth/select_video'); ?>">Watch Video and Earn Points</a>
                    </div>


                    <div class="action-box bg-gray-800 p-6 rounded-lg text-center shadow-md">
                        <i class="fas fa-dollar-sign"></i>
                        <a href="<?php echo site_url('convert_points_to_cash'); ?>">Convert Points to Cash</a>
                    </div>

                    <div class="action-box bg-gray-800 p-6 rounded-lg text-center shadow-md">
                        <i class="fas fa-receipt"></i>
                        <a href="<?php echo site_url('user/transactions'); ?>">Transactions</a>
                    </div>
                <?php endif; ?>

                <?php if ($user->role == 'admin') : ?>
                    <div class="action-box bg-gray-800 p-6 rounded-lg text-center shadow-md">
                        <i class="fas fa-plus-circle"></i>
                        <a href="<?php echo site_url('auth/list_videos'); ?>">Manage Videos</a>
                    </div>

                    <div class="action-box bg-gray-800 p-6 rounded-lg text-center shadow-md">
                        <i class="fas fa-users"></i>
                        <a href="<?php echo site_url('auth/list_users'); ?>">Manage Users</a>
                    </div>

                    <div class="action-box bg-gray-800 p-6 rounded-lg text-center shadow-md">
                        <i class="fas fa-receipt"></i>
                        <a href="<?php echo site_url('transactions'); ?>">Users Transactions</a>
                    </div>
                <?php endif; ?>

                <?php if ($user->role == 'moderator') : ?>
                    <div class="action-box bg-gray-800 p-6 rounded-lg text-center shadow-md">
                        <i class="fas fa-plus-circle"></i>
                        <a href="<?php echo site_url('auth/list_videos'); ?>">Manage Videos</a>
                    </div>
                <?php endif; ?>

                <div class="action-box bg-gray-800 p-6 rounded-lg text-center shadow-md">
                    <i class="fas fa-sign-out-alt"></i>
                    <a href="<?php echo site_url('auth/logout'); ?>" class="text-red-500 hover:text-red-700">Logout</a>
                </div>
            </div>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')) : ?>
                <div class="bg-red-500 text-white p-4 rounded mb-4">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>