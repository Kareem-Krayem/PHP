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
    <div class="wrapper fadeInDown">
        <br>
        <b id="welcome">
            <?php
            echo "Welcome , " . $_SESSION['user_logged'] . "!";
            ?>
        </b>
        <div id="formContent">
            <h2 class="active fadeIn first"> Actions </h2>
            <form method="POST">
                <div class="action">
                    <input type="SUBMIT" name="register" class="fadeIn second" value="register new user">
                    <input type="SUBMIT" name="showSocial" class="fadeIn third" value="Social Media">
                    <input type="SUBMIT" name="showMedia" class="fadeIn fourth" value="Media">
                    <input type="SUBMIT" name="showServices" class="fadeIn fifth" value="Services">
                    <input type="SUBMIT" name="showContact" class="fadeIn sixth" value="Contact">
                    <input type="SUBMIT" name="btn_logout" class="fadeIn seventh" value="Logout">
                    <?PHP
                    if (isset($_POST['register']))
                        header("location:register.php");
                    else if (isset($_POST['showSocial']))
                        header("location:showSocial.php");
                    else if (isset($_POST['showMedia']))
                        header("location:showMedia.php");
                    else if (isset($_POST['showServices']))
                        header("location:showServices.php");
                    else if (isset($_POST['showContact']))
                        header("location:showContact.php");
                    else if (isset($_POST['btn_logout'])) {
                        session_destroy();
                        header("location:index.php");
                    }
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