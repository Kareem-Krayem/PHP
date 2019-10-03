<?php
include 'connection.php';

$id = $_GET['id'];
$q = "SELECT * FROM services WHERE service_id =".$id;
$res = mysqli_query($conn , $q);

while($row = mysqli_fetch_assoc($res)){
    echo "<input type='text' name='description' value='".$row['service_description']."' />";
}
?>