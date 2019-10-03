<?php
session_start();
ob_start();
if(isset($_SESSION['user_logged'])) {
?>
<html>
<head>
<link rel="stylesheet" href="css/admin.css"/>
<title>
Yahya Halabi
</title>
</head>
<body>
<a href='showVideo.php' style='color:#ffff'> < Back</a>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active fadeIn first"> Add Video </h2>

<form method='post' enctype="multipart/form-data">
<input type="file" name="file"/>
<input type="text" name="description" placeholder='Description'/>
<input type="submit" name="submit" value="Upload"/>

<?php
if(isset($_POST['submit'])){

    $maxsize = 104857600;
    $name = $_FILES['file']['name'];
    $target_dir = "videos/";
    $target_file = $target_dir . $_FILES["file"]["name"];

    // Select file type
    $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

    // Check extension
    if( in_array($videoFileType,$extensions_arr) ){

       // Check file size
       if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
         echo "File too large. File must be less than 5MB.";
       }else{
         // Upload
         if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
           // Insert record
           $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

           mysqli_query($con,$query);
           echo "Upload successfully.";
         }
       }

    }else{
       echo "Invalid file extension.";
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