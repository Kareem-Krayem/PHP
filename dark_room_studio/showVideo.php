<?php
session_start();
ob_start();
if(isset($_SESSION['user_logged'])) {
?>
<html>
<head>
<link rel="stylesheet" href="css/admin.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>
Yahya Halabi
</title>
</head>
<body>
<a href='showMedia.php' style='color:#ffff'> < Back</a>
<div class="wrapper fadeInDown" >
    <div id="clients" style="position: absolute ; ">
        <h2 class="active fadeIn first">Video Gallery</h2>
<!--<form method="POST">-->
    <div>
        <table style=" margin-top: 20px ;" class="fadeIn second" id='galleryTable'>
        </table>
        <br>
        <form method="POST" action="addVideo.php">
        <input type="submit"  class="fadeIn third" name="addClient" VALUE="ADD Video"/>
        </form>
    </div>
    </div>
</div>
<!--</form>-->
<p id="demo"></p>
</body>
</html>

<script>
    function fillVideo() {
        var gallery = document.getElementById('galleryTable');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fillVideo.php' , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                gallery.innerHTML = this.responseText;
            }
        };
        xhttp.send();
    }

    function dltVideo(id){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'dltVideo.php?id='+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fillVideo();
            }
        };
        xhttp.send();
    }

    onload(fillVideo());

</script>

    <?php
}
else{
    header("location:index.php");
}
?>