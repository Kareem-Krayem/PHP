<?php
session_start();
ob_start();
?>

<html>
<head>
    <link rel="stylesheet" href="css/admin.css"/>
<title>
Dark Room Studio
</title>
</head>
<body>
<a href='index.php' style='color:#ffff'> < Home</a>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active fadeIn first"> Login In </h2>
<form method="POST">
  <input type="text" id="login" class="fadeIn second" name="user" placeholder="Username" />
  <input type="password" id="password" class="fadeIn third" name="pass" placeholder="password">
  <input type="submit" class="fadeIn fourth" name="login" value="Log In"/>

    <?php
    include 'connection.php';
    if(isset($_POST['login'])){
        $username =mysqli_real_escape_string($conn,$_POST['user']);
        $password=mysqli_real_escape_string($conn,$_POST['pass']);
        $query = "SELECT * FROM user WHERE user_username = '{$username}' AND user_password = '{$password}'";
        if(!empty($username) && !empty($password)){
            $res = mysqli_query($conn , $query);
            $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
            $count = mysqli_num_rows($res);
            if( $count ==1 ){
                  switch ($row['user_role']){
                      case 1 : header("location:main.php");
                      $_SESSION['user_logged'] = $username;
                      break;
                      case 2 : header("location:main1.php");
                      $_SESSION['user_logged'] = $username;
                      break;
                  }
            }
        }
    }
    ?>
</form>
       
</body>
</html>

