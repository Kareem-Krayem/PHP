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
<a href='showGallery.php' style='color:#ffff'> < Back</a>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active fadeIn first"> Add Picture </h2>
<form method="post" enctype="multipart/form-data">
        <input type="file" name="photo" class='fadeIn second'>
        <input type="text" name="description" class='fadeIn third' placeholder='Description'>
        <input type="submit" value="Upload Image" name="upload" class='fadeIn fourth'>

        <?php
   include 'connection.php';
   if(isset($_POST['upload'])){
    $name = $_FILES['photo']['name'];
    $desc = $_POST['description'];
    echo $name;
    $dir = "slideshow001/";
    $target_files = $dir .basename($_FILES['photo']['name']);
    $imageFileType = strtolower(pathinfo($target_files , PATHINFO_EXTENSION));
    $ex_array = array("jpg" , "jpeg" , "png");
    if(in_array($imageFileType , $ex_array)){
        $q = "INSERT INTO `gallery`(`gallery_photos`, `gallery_description`)
        VALUES ('{$name}' , '{$desc}')";
        $res = mysqli_query($conn , $q);
        move_uploaded_file($_FILES['photo']['tmp_name'] , $dir.$name);
        header("location:showGallery.php");
    }

    }
   
        ?>
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