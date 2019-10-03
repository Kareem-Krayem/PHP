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
        <h2 class="active fadeIn first"> Services  <i class='fas fa-plus-circle fa-2x'></i></h2>

<form method='post' id='ser' enctype="multipart/form-data">
<?php
include 'connection.php';
$q = "SELECT * FROM services";
$res = mysqli_query($conn , $q);

$qq = "SELECT * FROM services";
$ress = mysqli_query($conn , $qq);
$roww = mysqli_fetch_assoc($ress);
echo "<Select class='gender' onchange= 'showService(".$roww['service_id'].")'>";
echo "<option selected disabled>Please select a service</option>";

while($row = mysqli_fetch_assoc($res)){
    echo "<option id='".$row['service_id']."'> ".$row['service_name']." </option>";
}
echo "</select>";
?>

<input type="submit" name="submit" value="Edit"/>

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