<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Users</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        thead {
            background-color: #34495e;
        }
        th, td {
            padding: 10px;
            border: 1px solid #7f8c8d;
        }
        th {
            background-color: #34495e;
            color: #ecf0f1;
        }
        tbody tr {
            background-color: #3c4e60;
        }
        tbody tr:nth-child(even) {
            background-color: #2c3e50;
        }
        tbody tr:hover {
            background-color: #1abc9c;
            color: #ecf0f1;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: #ecf0f1;
        }
        .btn-add {
            background-color: #1abc9c;
            margin-bottom: 10px;
        }
        .btn-add:hover {
            background-color: #16a085;
        }
        .btn-edit {
            background-color: #3498db;
        }
        .btn-edit:hover {
            background-color: #2980b9;
        }
        .btn-delete {
            background-color: #e74c3c;
        }
        .btn-delete:hover {
            background-color: #c0392b;
        }
        .alert-success {
            background-color: #27ae60;
            color: #ecf0f1;
            padding: 10px;
            border-radius: 3px;
            margin-bottom: 10px;
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
    <h1>List of Users</h1>
</header>

<div class="container mt-10">
    <?php if ($this->session->flashdata('success')): ?>
        <p class="alert-success"><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')): ?>
        <p class="alert-error"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <a href="<?php echo site_url('auth/add_user'); ?>" class="btn btn-add">Add New User</a>
    <a href="<?php echo site_url('auth/dashboard'); ?>"
    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 inline-block mb-4">Back to Dashboard</a>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->username; ?></td>
                    <td><?php echo $user->role; ?></td>
                    <td>
                        <a href="<?php echo site_url('auth/edit_user/' . $user->id); ?>" class="btn btn-edit">Edit</a>
                        <a href="<?php echo site_url('auth/delete_user/' . $user->id); ?>" onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-delete ml-2">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
