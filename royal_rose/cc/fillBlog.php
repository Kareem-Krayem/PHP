<?php
include 'connection.php';
?>

<div class="card-body">
    <div class="card-title">
    <h3 class="text-center title-2">Blog</h3>
    </div>
    <hr>

    <div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
    <thead>
    <tr style='align:center ; border-bottom:1px solid'>
    <th style='text-align:center'>Title</th>
    <th style='text-align:center ; direction:rtl'>العنوان</th>
    <th style='text-align:center'>Name</th>
    <th style='text-align:center ; direction:rtl'>الأسم</th>
    <th style='text-align:center'>Description</th>
    <th style='text-align:center ; direction:rtl'>الوصف</th>
    <th style='text-align:center'>Image</th>
    <th style='text-align:center'>Action</th>
    <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $q="SELECT * FROM `blog`";
    $res= mysqli_query($conn , $q);
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr style='align:center ;'>";
        echo "<td style='text-align:center'>".$row['blog_title']."</td>";
        echo "<td style='text-align:center'>".$row['blog_title_ar']."</td>";
        echo "<td style='text-align:center'>".$row['blog_name']."</td>";
        echo "<td style='text-align:center'>".$row['blog_name_ar']."</td>";
        echo "<td style='text-align:center'>".$row['blog_description']."</td>";
        echo "<td style='text-align:center'>".$row['blog_description_ar']."</td>";
        echo "<td style='text-align:center'><a href='blogs/".$row['blog_image']."'><img src=blogs/".$row['blog_image']." style='width: 50px ; height: 50px ; border-radius: 100px'/></td>";
        echo "<td style='text-align:center ; position:absolute ; margin-left:50px'>";
        echo "<div class='table-data-feature' style='text-align:center'>";
        echo "<button class='item' data-toggle='tooltip' data-placement='top' title='Delete' onclick='dltBlog(".$row['blog_id'].")'>";
        echo "<i class='zmdi zmdi-delete'></i></button>";
        echo "</div></td></tr>";
        echo "<tr class='spacer'></tr>";
        echo "<tr class='tr-shadow'>";
    }
    ?>
<style>
.zmdi:hover{
 background:gold;
}

.item:hover{
    background:gold;
}
</style>


    </tbody>
    </table>
    </div>

    </div>