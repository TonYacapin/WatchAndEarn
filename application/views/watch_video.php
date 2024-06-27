<?php
function extractYoutubeId($url) {
    preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/|youtube\.com\/shorts\/)([^"&?\/ ]{11})/', $url, $match);
    return $match[1];
}

$videoId = extractYoutubeId($video->url);
?>
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
            <div class="video-container">
                <!-- Embedding the video using an iframe -->
                <div id="player"></div>
            </div>
        </div>

        <button id="earnPointsBtn" class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded hidden">Earn Points</button>
    </div>
</div>

<footer class="bg-gray-300 text-center text-gray-700 py-4 mt-10">
    <p>&copy; 2024 WatchAndEarn All Rights Reserved</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // Load the IFrame Player API code asynchronously.
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '315',
            width: '100%',
            videoId: '<?php echo $videoId; ?>',
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.ENDED) {
            $('#earnPointsBtn').removeClass('hidden');
        }
    }

    $(document).ready(function() {
        $('#earnPointsBtn').on('click', function() {
            window.location.href = "<?php echo site_url('auth/earn_points/' . $video->id); ?>";
        });
    });
</script>

</body>
</html>
