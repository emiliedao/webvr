<?php

    if (isset($_POST["submit"])) {
        $option = $_POST["option"];
        $allowed_files = null;
        $target_dir = "upload/";

        switch($option) {
            case "360image":
                $allowed_files = array("png", "jpeg", "jpg");
                if (save_file("panorama", $target_dir, "panorama.jpg", $allowed_files)) {
                    echo "ok";
                    redirect("360viewer.php?upload=true");
                }
                break;

            case "360stereoImage":
                $allowed_files = array("png", "jpeg", "jpg");
                if (save_file("leftImage", $target_dir, "left.jpg", $allowed_files)
                && save_file("rightImage", $target_dir, "right.jpg", $allowed_files)) {
                    redirect("360stereoViewer.php?upload=true");
                }
                break;

            case "360video":
                $allowed_files = array("mp4");
                if (save_file("video", $target_dir, "video.mp4", $allowed_files)) {

                }
                break;
        }
    }

    function save_file($input_name, $target_dir, $filename, $allowed_files) {

        // Access denied, the file is temporarily moved to another accessible location. Please check the directory permissions
        if (!is_writable($target_dir)) {
            $target_dir = "../quick_stereo/upload/webvr/";
        }

        $target_file = $target_dir . $filename;

        $uploadOk = true;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        // Allow certain file formats
        if (!in_array($imageFileType, $allowed_files)) {
            echo "File not allowed.";
            $uploadOk = false;
        }

        if ($uploadOk) {
            if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
                echo "File(s) uploaded.";
            }

            else {
                $uploadOk = false;
                echo "Sorry, there was an error uploading your file(s).";
            }
        }

        return $uploadOk;
    }

    function redirect($relative_path) {
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("Location: http://$host$uri/$relative_path");
        exit;
    }
?>
