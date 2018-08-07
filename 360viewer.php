<?php
    include("imagesManager.php");
    $upload = false;
    if (isset($_GET["upload"])) {
        $upload = ($_GET["upload"] == "true");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>360 Image</title>
    <script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
    <script src="https://npmcdn.com/aframe-animation-component@5.1.0"></script>
    <script src="https://npmcdn.com/aframe-event-set-component@4.1.2"></script>
    <script src="https://npmcdn.com/aframe-layout-component@5.2.0"></script>
    <script src="https://npmcdn.com/aframe-template-component@3.1.1"></script>
    <script src="components/set-image.js"></script>
    <script src="https://rawgit.com/rdub80/aframe-gui/master/dist/aframe-gui.min.js"></script>

</head>
<body>

<a-scene>
    <a-assets>
        <?php
            if (!$upload) {
                echo getHtmlImagesList("gallery/360images");
            }

            else {
                echo '<img id="default" crossorigin="anonymous" src="../quick_stereo/upload/webvr/panorama.jpg"/>';
            }
        ?>

        <!-- Image link template to be reused. -->
        <script id="link" type="text/html">
            <a-entity class="link"
                      geometry="primitive: plane; height: 1; width: 1"
                      material="shader: flat; src: ${thumb}"
                      event-set__1="_event: mousedown; scale: 1 1 1"
                      event-set__2="_event: mouseup; scale: 1.2 1.2 1"
                      event-set__3="_event: mouseenter; scale: 1.2 1.2 1"
                      event-set__4="_event: mouseleave; scale: 1 1 1"
                      set-image="on: click; target: #image-360; src: ${src}"
            ></a-entity>
        </script>
    </a-assets>

    <!-- 360-degree image. -->
    <a-sky id="image-360" radius="10" src="#default"></a-sky>

    <!-- Image links. -->
    <a-entity id="links" layout="type: line; align: center; margin: 1.5" position="0 -1 -4">
        <?php
            if (!$upload) {
                echo getEntityImagesList("gallery/360images");
            }
        ?>
    </a-entity>


    <!-- Camera + cursor. -->
    <a-entity camera look-controls>
        <a-cursor id="cursor"
                  animation__click="property: scale; startEvents: click; from: 0.1 0.1 0.1; to: 1 1 1; dur: 150"
                  animation__fusing="property: fusing; startEvents: fusing; from: 1 1 1; to: 0.1 0.1 0.1; dur: 1500"
                  event-set__1="_event: mouseenter; color: springgreen"
                  event-set__2="_event: mouseleave; color: black"
                  fuse="true"
                  raycaster="objects: .link"></a-cursor>
    </a-entity>

</a-scene>
</body>
</html>
