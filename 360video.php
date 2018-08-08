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
    <!-- Use components defined in separate files. -->
    <script src="components/arrow-key-rotation.js"></script>
    <script src="components/play-on-window-click.js"></script>
    <script src="components/play-on-vrdisplayactivate-or-enter-vr.js"></script>
    <script src="components/hide-once-playing.js"></script>
    <meta name="apple-mobile-web-app-capable" content="yes">
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

    <a-camera
        position="0 0 10"
        cursor-visible="false"
        ser-height="0" wasd-controls-enabled="false" arrow-key-rotation>
        <!-- Text element for display messaging.  Hide once video is playing. -->
        <a-entity id="msg" position="0 -0.3 -1.5" text="align:center;
                width:3;
                wrapCount:100;
                color:red;
                value:Click window to make the video play, if needed."
                  hide-once-playing="#video">
        </a-entity>
    </a-camera>

    <a-videosphere geometry="primitive: sphere;
                      radius: 100;
                      segmentsWidth: 64;
                      segmentsHeight: 64;"
                   material="shader: flat; side:back; src: #video;"
                   scale="-1 1 1"
                   play-on-window-click
                   play-on-vrdisplayactivate-or-enter-vr>
    </a-videosphere>
</a-scene>

</body>
</html>