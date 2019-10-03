<?php
include 'connection.php';
echo "<thead>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Picture</th>";
echo "<th>Action</th>";
echo "</tr>";
echo "</thead>";

$q = "SELECT * FROM slideshow";
$res= mysqli_query($conn , $q);

while($row = mysqli_fetch_assoc($res)){
echo "<tr>";
echo "<td>".$row['slideshow_id']."</td>";
echo "<td><a href='slideshow/".$row['slideshow_picture']."'><img src=slideshow/".$row['slideshow_picture']." style='width: 60px ; height: 60px ; border-radius: 100px'/></td>";
echo "<td>";
echo "<i class='fa fa-trash fa-2x delete' onclick='dltSlide(".$row['slideshow_id'].")' ></i>";
echo "</td>";
echo "</tr>";
}
?>
    <style>
    .fa:hover{
        color:#71B7E8;
    }
    </style>
