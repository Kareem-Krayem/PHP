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
        <h2 class="active fadeIn first"> Social Media </h2>

<form method='post' id='contact' enctype="multipart/form-data">
<?php
include 'connection.php';
$q = "SELECT * FROM social";
$res = mysqli_query($conn , $q);
while($row = mysqli_fetch_assoc($res)){
echo "<input type='text' name='contact_name' class='fadeIn third' placeholder='Social Media' Value='".$row['social_name']."'/>";
echo "<input type='text' name='contact_career' class='fadeIn fourth' placeholder='Link' value='".$row['social_link']."'/>";
}
?>

<input type="submit" name="submit" class='fadeIn eighth' value="Update"/>

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

<style>
    .fas:hover{
        color:#71B7E8;
    }
    </style>