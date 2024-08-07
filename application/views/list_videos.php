<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>List of Videos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-gray-100 font-sans">
    <header class="bg-gray-800 text-white text-center py-6 shadow-lg">
        <h1 class="text-4xl font-bold">List of Videos</h1>
    </header>
    <div class="container mx-auto px-4 py-8">
        <?php if ($this->session->flashdata('success')) : ?>
            <p class="bg-green-600 text-white p-4 rounded mb-6"><?php echo $this->session->flashdata('success'); ?></p>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')) : ?>
            <p class="bg-red-600 text-white p-4 rounded mb-6"><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>

        <div class="flex justify-between mb-6">
            <a href="<?php echo site_url('auth/add_video'); ?>" class="bg-blue-600 text-white px-5 py-3 rounded hover:bg-blue-700">Add New Video</a>
            <a href="<?php echo site_url('auth/dashboard'); ?>" class="bg-blue-600 text-white px-5 py-3 rounded hover:bg-blue-700">Back to Dashboard</a>
        </div>

        <table class="w-full bg-gray-800 shadow-lg rounded-lg">
            <thead class="bg-gray-700">
                <tr>
                    <th class="text-left p-4 text-gray-100">Title</th>
                    <th class="text-left p-4 text-gray-100">URL</th>
                    <th class="text-left p-4 text-gray-100">Points Reward</th>
                    <th class="text-left p-4 text-gray-100">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($videos as $video) : ?>
                    <tr class="border-b border-gray-600 hover:bg-gray-700">
                        <td class="p-4 text-gray-100"><?php echo $video->title; ?></td>
                        <td class="p-4 text-gray-100">
                            <a href="<?php echo $video->url; ?>" target="_blank" class="text-blue-400 hover:text-blue-200"><?php echo $video->url; ?></a>
                        </td>
                        <td class="p-4 text-gray-100"><?php echo $video->points_reward; ?></td>
                        <td class="p-4 text-gray-100">
                            <a href="<?php echo site_url('auth/edit_video/' . $video->id); ?>" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Edit</a>
                            <a href="<?php echo site_url('auth/delete_video/' . $video->id); ?>" onclick="return confirm('Are you sure you want to delete this video?');" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 ml-2">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
