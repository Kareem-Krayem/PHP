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
    <h2 class="active fadeIn first"> Add User </h2>
<form method="POST">
    <div class="register">
        <input type="text"  id="login" class="fadeIn second" name="user" placeholder="Username"/>
        <br>
        <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Password"/>
        <br>
        <input type="text" id="login" class="fadeIn fourth" name="role" placeholder="Role"/>
        <br>
        <input type="submit" class="fadeIn fifth" name="register" value="Sign Up"/>
    </div>
    <?php
    include 'connection.php';
    if(isset($_POST['register'])){
        $username =$_POST['user'];
        $password=$_POST['pass'];
        $role=$_POST['role'];
        $q = "INSERT INTO `user`(`user_username`, `user_password`, `user_role`) VALUES ('{$username}' , '{$password}' , '{$role}')";
        $res = mysqli_query($conn , $q) or die('error!!!');
        header("Location: main.php");
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