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
        <b id="welcome" style="color: white ; margin-bottom: 50px">
            <?php
            echo "Welcome , " . $_SESSION['user_logged'] . "!";
            ?>
        </b>
        <div id="formContent">
            <h2 class="active fadeIn first"> Actions </h2>
            <form method="POST">
                <div class="action">
                    <input type="SUBMIT" name="showClients" class="fadeIn third" value="Add/Show Pictures">
                    <input type="SUBMIT" name="btn_logout" class="fadeIn fourth" value="Logout">
                    <?PHP
                    if (isset($_POST['showClients']))
                        header("location:showClients.php");
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