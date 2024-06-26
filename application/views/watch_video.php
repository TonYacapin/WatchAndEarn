<!DOCTYPE html>
<html>
<head>
    <title>Watch Video</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <header class="bg-blue-500 text-white text-center py-4">
        <h1 class="text-3xl font-bold">Watch Video</h1>
    </header>

    <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-white p-8 border border-gray-300 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-blue-500 mb-6"><?php echo $video->title; ?></h2>

            <div class="mb-4">
                <iframe width="100%" height="315" src="<?php echo $video->url; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <button id="earnPointsBtn" class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded hidden">Earn Points</button>
        </div>
    </div>

    <footer class="bg-gray-300 text-center text-gray-700 py-4 mt-10">
        <p>&copy; 2024 Site Title</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#videoPlayer').on('ended', function() {
                $('#earnPointsBtn').removeClass('hidden');
            });

            $('#earnPointsBtn').on('click', function() {
                window.location.href = "<?php echo site_url('auth/earn_points/' . $video->id); ?>";
            });
        });
    </script>
</body>
</html>
