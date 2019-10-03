<?php
session_start();
ob_start();
if(isset($_SESSION['user_logged'])) {
    ?>
    <html>
    <head>
    <link rel="stylesheet" href="css/admin.css"/>
    <title>
        Dark Room Studio
    </title>
    </head>
    <body>
    <a href='main.php' style='color:#ffff'> < Back</a>
    <div class="wrapper fadeInDown">

        <div id="formContent">
            <h2 class="active fadeIn first"> Media </h2>
            <form method="POST">
                <div class="action">
                    <input type="SUBMIT" name="showPictures" class="fadeIn second" value="Slideshow">
                    <input type="SUBMIT" name="showGallery" class="fadeIn third" value="Gallery">
                    <input type="SUBMIT" name="showVideo" class="fadeIn fourth" value="Video">
                    <?PHP
                    if (isset($_POST['showPictures']))
                        header("location:showPictures.php");
                    else if (isset($_POST['showGallery']))
                        header("location:showGallery.php");
                    else if (isset($_POST['showVideo']))
                        header("location:showVideo.php");
                    ?>

                </div>
            </form>
        </div>
    </div>
    </body>
    </html>
    <?php
}
else{
    header("location:index.php");
}
    ?>