<html>
<head>
    <title>WebVR</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--    <link rel="stylesheet" href="../web/mm_health_nutr.css" type="text/css" />-->
<!--    <link rel="stylesheet" href="../web/main.css" type="text/css" />-->


    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="http://ivs.wordpress.fos.auckland.ac.nz" target="_blank"><i class="fa fa-bookmark-o"></i> IVS Home Page</a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://www.ivs.auckland.ac.nz/quick_stereo/index.php" target="_blank">Online Stereo Matching</a></li>
                <li><a href="http://www.ivs.auckland.ac.nz/web/scene_gallery.php" target="_blank">Stereo Vision Gallery</a></li>
                <li><a href="http://www.ivs.auckland.ac.nz/web/slideShow.php" target="_blank">3D Slide Show</a></li>
                <li><a href="../web/instructions.php" target="_blank">Instructions</a></li>
                <li><a href="./Oculus/Oculus_upload_video.html" target="_blank">Oculus Rift</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- Header -->
<header id="header">
    <div class="intro">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="intro-text">
                        <h1>WebVR</h1>
                        <p>Experience 360° images and videos in Virtual Reality</p>
                        <p align="center"><img src="img/cardboard.png" class="img-responsive" alt="" width="100"></p>
                        <a href="vrMenu.php" class="btn btn-custom btn-lg page-scroll">Get Started</a> </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="alertbox" class="alert alert-info" role="alert"><?php include("upload.php"); ?></div>

<!-- About Section -->
<div id="about">
    <div class="container">
        <div class="section-title text-center center">
            <h2>About</h2>
            <hr>
            <p>WebVR is an open technology making it possible to experience VR in your web browser. Rather than installing a VR application, WebVR make it easier for everyone to get into VR experiences. All you need is a VR headset such as the affordable Google Cardboard.</p>
        </div>
    </div>
</div>

<!-- Viewers Section -->
<div id="viewers" class="text-center">
    <div class="container">
        <div id="portfolio">
                <div class="container">
                    <div class="section-title">
                        <h2>360 Viewers</h2>
                        <hr>
                    </div>

                    <div class="row">

                        <!-- 360 Image -->
                        <div class="portfolio-items">
                            <div class="col-sm-6 col-md-4 lorem>
                                <div class="portfolio-item">
                                    <div class="hover-bg"> <a href="360viewer.php" title="360 Image" data-lightbox-gallery="gallery1">
                                            <div class="hover-text">
                                                <div class="overlay-caption">
                                                    <div class="overlay-content">
                                                        <h4>360 Image</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="img/portfolio/01-small.jpg" class="img-responsive" alt=""> </a> </div>
                                </div>
                            </div>

                            <!-- 360 Stereo Image -->
                            <div class="col-sm-6 col-md-4 adipiscing">
                                <div class="portfolio-item">
                                    <div class="hover-bg"> <a href="360stereoViewer.php" title="360 Stereo Image" data-lightbox-gallery="gallery1">
                                            <div class="hover-text">
                                                <div class="overlay-caption">
                                                    <div class="overlay-content">
                                                        <h4>360 Stereo Image</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="img/portfolio/02-small.jpg" class="img-responsive" alt=""> </a> </div>
                                </div>
                            </div>

                            <!-- 360 Video -->
                            <div class="col-sm-6 col-md-4 lorem">
                                <div class="portfolio-item">
                                    <div class="hover-bg">
                                        <a href="#" data-toggle="modal" data-target="#360videoModal" title="360 Video" data-lightbox-gallery="gallery1">
                                            <div class="hover-text">
                                                <div class="overlay-caption">
                                                    <div class="overlay-content">
                                                        <h4>360 Video</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="img/portfolio/03-small.jpg" class="img-responsive" alt=""> </a> </div>
                                </div>
                            </div>

                            <!-- 360 Stereo Video -->
                            <div class="col-sm-6 col-md-4 lorem">
                                <div class="portfolio-item">
                                    <div class="hover-bg">
                                        <a href="360stereoVideo.php" title="360 Stereo Video" data-lightbox-gallery="gallery1">
                                            <div class="hover-text">
                                                <div class="overlay-caption">
                                                    <div class="overlay-content">
                                                        <h4>360 Stereo Video</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="img/portfolio/04-small.jpg" class="img-responsive" alt=""> </a> </div>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
    </div>
</div>


<!-- 360 Video Modal -->
<div class="modal fade" id="360videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">360 Video Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Temple video -->
                <div class="col-sm-6 col-md-3">
                    <a href="360video.php?video=temple">
                        <img src="img/portfolio/video-thumbnail1.png" alt="video-thumbnail1" class="img-thumbnail">
                    </a>
                    <div class="caption text-center">
                        <p>Temple</p>
                    </div>
                </div>

                <!-- Dinosaurs museum video -->
                <div class="col-sm-6 col-md-3">
                    <a href="360video.php?video=dinosaurs">
                        <img src="img/portfolio/video-thumbnail2.png" alt="video-thumbnail1" class="img-thumbnail">
                    </a>
                    <div class="caption text-center">
                        <p>Dinosaurs</p>
                    </div>

                </div>
            </div>
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--                <button type="button" class="btn btn-primary">Save changes</button>-->
<!--            </div>-->
        </div>
    </div>
</div>


<!-- Upload Section -->
<div id="upload">
    <div class="container">
        <div class="section-title text-center center">
            <h2>Upload Images</h2>
            <hr>
            <p>Explore your own panoramic images in VR</p>
        </div>

        <div class="row">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

                <!-- Select the type of file uploaded -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Select</label>

                    <div class="col-sm-10">
                        <select name="option" id="selectOptions" onchange="updateSelectOptions()">
                            <option value="360image">360 Image</option>
                            <option value="360stereoImage">360 Stereo Image</option>
<!--                            <option value="360video">360 Video</option>-->
                        </select>
                    </div>
                </div>

                <!-- 360 image input -->
                <div id="360imageInput" class="form-group row optionInput" >
                    <label class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                        <input type="file" id="panorama" name="panorama" accept="image/png, image/jpeg" />
                    </div>
                </div>

                <!-- 360 stereo image input -->
                <div id="360stereoImageInput" class="form-group row optionInput">
                    <label class="col-sm-2 col-form-label">Left image</label>

                    <!-- Left image -->
                    <div class="col-sm-10">
                        <input type="file" id="leftImage" name="leftImage" size="50" accept="image/png, image/jpeg" /><br/>
                    </div>

                    <!-- Right image -->
                    <label class="col-sm-2 col-form-label">Right image</label>
                    <div class="col-sm-10">
                        <input type="file" id="rightImage" name="rightImage" size="50" accept="image/png, image/jpeg" />
                    </div>
                </div>

                <!-- 360 video input -->
<!--                <div id="360videoInput" class="form-group row optionInput" >-->
<!--                    <label class="col-sm-2 col-form-label">File</label>-->
<!--                    <div class="col-sm-10">-->
<!--                        <input type="file" id="video" name="video" accept="video/mp4" />-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <input type="submit" class="btn btn-primary" value="Upload" name="submit">-->
<!--                </div>-->

            </form>
        </div>
    </div>
</div>

<!--<div id="footer">-->
<!--    <div class="container text-center">-->
<!--        <div class="fnav">-->
<!--            <p>Copyright &copy; 2016 Catalyst. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/upload.js"></script>

</body>
</html>
