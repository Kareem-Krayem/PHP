<?php
session_start();
ob_start();
if(isset($_SESSION['user_logged'])) {
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/admin.css"/>
<title>
Yahya Halabi
</title>
</head>
<body>
<a href='main.php' style='color:#ffff'> < Back</a>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active fadeIn first"> Contact </h2>

<form method='post' id='contact' enctype="multipart/form-data">
<?php
include 'connection.php';
$q = "SELECT * FROM contact";
$res = mysqli_query($conn , $q);
while($row = mysqli_fetch_assoc($res)){
echo "<input type='text' name='contact_name' class='fadeIn third' placeholder='Name' Value='".$row['contact_name']."'/>";
echo "<input type='text' name='contact_career' class='fadeIn fourth' placeholder='Career' value='".$row['contact_career']."'/>";
echo "<input type='text' name='contact_about' class='fadeIn sixth' placeholder='About' value='".$row['contact_about']."'/>";
echo "<br>";
echo "Profile Picture";
echo "<input type='file' name='profile' class='fadeIn second' placeholder='Profile'>";
}
?>

<input type="submit" name="submit" class='fadeIn eighth' value="Edit"/>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['contact_name'];
    $career=$_POST['contact_career'];
    $about=$_POST['contact_about'];
    $profile = $_FILES['profile']['name'];
    
    $dir = "profilePic/";
    // $target_files = $dir .basename($_FILES['profile']['name']);
    // $imageFileType = strtolower(pathinfo($target_files , PATHINFO_EXTENSION));
    // $ex_array = array("jpg" , "jpeg" , "png");
    // if(in_array($imageFileType , $ex_array)){
        $q= "UPDATE `contact` SET `contact_name`='{$name}',`contact_career`= '{$career}',`contact_photo`= '{$profile}',`contact_about`= '{$about}' WHERE `contact_id` = 1";
        $res = mysqli_query($conn , $q);
        move_uploaded_file($_FILES['profile']['tmp_name'] , $dir.$profile);
        header("location:main.php");
    //}
    
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

<script>
function showService(id){
    var in = document.getElementById('ser');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fillService.php?id='+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                in.innerHTML += this.responseText;
            }
        };
        xhttp.send();
}

</script>

<style>
    .fas:hover{
        color:#71B7E8;
    }
    </style>