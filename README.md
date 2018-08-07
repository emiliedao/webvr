# WebVR site

This document describes how the IVS WebVR page works.

WebVR is an open technology making it possible to experience VR in your web browser. Rather than installing a VR application, WebVR make it easier for everyone to get into VR experiences. All you need is a VR headset such as the affordable Google Cardboard.

As for the IVS lab, this section of the website will allow users to immerse into 360 images and videos.

The WebVR root section is accessible on: http://www.ivs.auckland.ac.nz/webvr/

---
**Note**

Currently the upload directory `upload/` used for the WebVR site is not writable for normal users.
Hence the media files are temporarily relocated in  `/quick_stereo/upload/webvr/`.

Please make sure for the future to give permissions to the `upload/` directory and update all the links in the `php` files for a cleaner architecture.

---

# Getting started

## A-Frame

# Main features

## Viewers

The index page gives access to different panoramic viewers displaying the images and videos contained in the gallery.

If you want to add a new image or video, copy the file directly on the server in the specified directories. However it is also possible for external users to upload a temporary file and see it in the viewers. Further details are provided in the **Uploading a file** section.

### 360 viewer
**->** `360viewer.php`

This is the most basic viewer. It displays panoramic images. The images are automatically loaded from the directory `gallery/360images/`.

A default image is displayed in 360. The other pictures contained in the gallery directory are displayed in thumbnails.

The current thumbnails layout is a line, but if there are two many images, you can change it by modifying the  `<a-entity id="links" layout="..." >` tag, for example by choosing a box layout and specifying the number of columns. See https://www.npmjs.com/package/aframe-layout-component for further details. Ideally the layout should be dynamically modified based on the number of images.

To change the main 360 image displayed, hover or click on a thumbnail.

### 360 stereo viewer
**->** `360stereoViewer.php`



### 360 video
**->** `360video.php`

### 360 stereo video
**->** `360stereoVideo.php`

## Uploading a file

At the end of the webVR main page, there is a **Upload** section.

## VR menu

Alternatively, you can use the VR menu to
