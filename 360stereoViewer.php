<?php

    // Displays image in gallery by default
    $leftImage = "gallery/360stereoImages/left.jpg";
    $rightImage = "gallery/360stereoImages/right.jpg";

    // Displays uploaded left and right images
    if (isset($_GET["upload"])) {
        if ($_GET["upload"] == "true") {
            $leftImage = "../quick_stereo/upload/webvr/left.jpg";
            $rightImage = "../quick_stereo/upload/webvr/right.jpg";
        }
    }
?>

<html>
<head>
    <title>360 Stereo Image</title>
    <script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
    <script src="../components/aframe-stereo-component.min.js"></script>
</head>
<body>

<a-scene antialias="true">
    <!-- Paths to left and right images -->
    <a-assets>
        <img id="left" src="<?php echo $leftImage ?>">
        <img id="right" src="<?php echo $rightImage ?>">
    </a-assets>

    <!-- Camera -->
    <a-entity camera look-controls position="0 0 0" stereocam="eye:left;"></a-entity>

    <!-- Sky sphere -->
    <a-sky id="sky1" src="#left" stereo="eye:left"></a-sky>
    <a-sky id="sky2" src="#right" stereo="eye:right"></a-sky>

    <!-- or alternatively -->

    <!--<a-sky id="sky1" src="http://i.imgur.com/YAaxpv6.jpg" stereo="eye:left"></a-sky>-->
    <!--<a-sky id="sky2" src="http://i.imgur.com/JUxTnzK.jpg" stereo="eye:right"></a-sky>-->

</a-scene>

</body>
</html>