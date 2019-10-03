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
Dark Room Studio
</title>
</head>
<body>
<a href='showMedia.php' style='color:#ffff'> < Back</a>
<div class="wrapper fadeInDown" >
    <div id="clients" style="position: absolute ; ">
        <h2 class="active fadeIn first"> Slideshow Pictures </h2>
<!--<form method="POST">-->
    <div>
        <table style=" margin-top: 20px ;" class="fadeIn second" id='slideShow'>
        </table>
        <br>
        <form method="POST" action="add.php">
        <input type="submit"  class="fadeIn third" name="addClient" VALUE="ADD Slide"/>
        </form>
    </div>
    </div>
</div>
<!--</form>-->
<p id="demo"></p>
</body>
</html>

<script>
    function dltSlide(id){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "dltSlide.php?id="+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fillSlide();
            }
        };
        xhttp.send();
    }

    function fillSlide(){
        var slideShow = document.getElementById('slideShow');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "fillSlide.php" , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                slideShow.innerHTML = this.responseText;
            }
        };
        xhttp.send();
    }

onload(fillSlide());

</script>

    <?php
}
else{
    header("location:index.php");
}
?>