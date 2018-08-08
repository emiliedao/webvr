<?php
    $video = "temple";
    if (isset($_GET["video"])) {
        $video = $_GET["video"];
    }
?>

<html>
<head>
    <title>360 Video</title>
    <script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
    <script src="../components/aframe-stereo-component.min.js"></script>
</head>
<body>

<a-scene>

    <!-- Wait for the video to load. -->
    <a-assets>
        <!-- Single source video. -->
        <video id="video" src="gallery/360videos/<?php echo $video ?>.MP4"
               autoplay loop crossorigin="anonymous">
        </video>
    </a-assets>

    <a-camera position="0 0 10" cursor-visible="false"></a-camera>

    <a-videosphere geometry="primitive: sphere;
                      radius: 100;
                      segmentsWidth: 64;
                      segmentsHeight: 64;"
                   material="shader: flat; side:back; src: #video;"
                   scale="-1 1 1" >
    </a-videosphere>
</a-scene>

</body>
</html>