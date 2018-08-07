<html>
<head>
    <title>360 Stereo Video</title>
    <script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
    <script src="../components/aframe-stereo-component.min.js"></script>
</head>
<body>

<a-scene>


    <!--
          stereoscopic panoramic render by
          http://pedrofe.com/rendering-for-oculus-rift-with-arnold/
          http://www.meryproject.com/
     -->
    <!-- side by side equirectangular projected video -->
    <video id="Mary" src="../MarysOculus.webm" loop></video>

    <!-- we tell here the camera to render (outside VR mode, in monoscopic mode) everything without the 'stereo' component active
    and it it's active, only render those entities in the 'left' eye -->

    <a-camera position="0 0 10" cursor-visible="false" stereocam="eye:left;"></a-camera>

    <!-- native sphere, will render on 'left' eye, and will take only the first half of the video for projection -->

    <a-videosphere geometry="primitive: sphere;
                      radius: 100;
                      segmentsWidth: 64;
                      segmentsHeight: 64;"
              material="shader: flat; side:back; src: #Mary;"
              scale="-1 1 1" stereo="eye:left">
    </a-videosphere>

    <!-- native sphere, will render on 'right' eye, and will take only the second half of the video for projection -->

    <a-videosphere geometry="primitive: sphere;
                      radius: 100;
                      segmentsWidth: 64;
                      segmentsHeight: 64;"
              material="shader: flat; side:back; src: #Mary;"
              scale="-1 1 1" stereo="eye:right">
    </a-videosphere>


</a-scene>

</body>
</html>