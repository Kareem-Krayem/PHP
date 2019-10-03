<?php
include 'connection.php';

echo "<thead>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Video</th>";
echo "<th>Description</th>";
echo "<th>Action</th>";
echo "</tr>";
echo "</thead>";

$q = "SELECT * FROM video";
$res= mysqli_query($conn , $q);

while($row = mysqli_fetch_assoc($res)){
echo "<tr>";
echo "<td>".$row['video_id']."</td>";
echo "<td><a href='slideshow001/".$row['video_files']."'><img src=slideshow001/".$row['video_files']." style='width: 60px ; height: 60px ; border-radius: 100px'/></td>";
echo "<td>".$row['video_description']."</td>";
echo "<td>";
//echo "<i class='fa fa-pencil-square-o fa-2x edit' style='margin-right:30px;'></i>";
echo "<i class='fa fa-trash fa-2x delete' onclick='dltGallery(".$row['gallery_id'].")' ></i>";
echo "</td>";
echo "</tr>";
 }
?>
    <style>
    .fa:hover{
        color:#71B7E8;
    }
    </style>
