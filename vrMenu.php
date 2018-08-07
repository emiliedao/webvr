<html>
<head>
    <title>A-Frame</title>
    <script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
    <script src="https://rawgit.com/rdub80/aframe-gui/master/dist/aframe-gui.min.js"></script>

</head>

<script type="text/javascript">
    function load360image() {
        window.location.replace("360viewer.php");
    }

    function load360stereo() {
        window.location.replace("360stereoViewer.php");
    }

    function load360stereoVideo() {
        window.location.replace("360stereoVideo.php");
    }
</script>
<body>
    <a-scene>
        <a-gui-flex-container
            flex-direction="column" justify-content="center" align-items="normal" component-padding="0.1"
            opacity="0.7" width="3.5" height="4.5"
            position="-2 2.5 -4" rotation="0 0 0"
        >
            <a-gui-button
                width="2.5" height="0.75"
                onclick="load360image" key-code="32"
                value="360 Image"
                font-family="Arial"
                margin="0 0 0.05 0"
            >
            </a-gui-button>

            <a-gui-button
                width="2.5" height="0.75"
                onclick="load360stereo" key-code="32"
                value="360 Stereo Image"
                font-family="Arial"
                margin="0 0 0.05 0"
            >
            </a-gui-button>


            <a-gui-button
                width="2.5" height="0.75"
                onclick="load360stereoVideo" key-code="32"
                value="360 Video"
                font-family="Arial"
                margin="0 0 0.05 0"
            >
            </a-gui-button>


        </a-gui-flex-container>

        <!-- Camera + cursor. -->
        <a-entity id="cameraRig" position="0 1.6 0">
            <a-camera look-controls wasd-controls position="0 0 0">
                <a-gui-cursor id="cursor"
                              raycaster="objects: [gui-interactable]"
                              fuse="false"
                >
                </a-gui-cursor> <!-- /cursor -->
            </a-camera> <!-- /camera -->
        </a-entity>

    </a-scene>
</body>
</html>
