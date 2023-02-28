<?php
    $id=($_REQUEST['id']);
    $conn=mysqli_connect('localhost','root','','slider');
    $q="SELECT * FROM slider_data WHERE slider_id='".$id."'";
    $f=mysqli_query($conn,$q);
    $row=mysqli_fetch_assoc($f);
?>

<?php
    include "header.php";
?>
<form method="post" action="update_slider_save.php" enctype="multipart/form-data">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Update Slider Info</h1>
            </div>
            <input type="hidden" name="id" value="<?=$row['slider_id'];?>">
            <div class="col-md-6">
                <label>Slider Image</label>
                <input type="hidden" name="slider_img" value="<?=$row['slider_img'];?>">
                <input type="file" name="slider_img" value="<?=$row['slider_img'];?>" class="form-control">
            </div>
            <div class="col-md-6">
                <img src="images/<?=$row['slider_img']?>" width="300px" height="150px">
            </div>
            <div class="col-md-6 mt-3">
                <label>Slider Title</label>
                <input type="text" name="slider_title" value="<?=$row['slider_title'];?>" class="form-control">
            </div>
            <div class="col-md-6 mt-3">
                <label>Slider Desc</label>
                <!-- <textarea class="form-control" name="slider_desc" value="<?=$row['slider_desc'];?>"></textarea> -->
                <input type="text" name="slider_desc" value="<?=$row['slider_desc'];?>" class="form-control">
            </div>
            <div class="col-md-12 mt-3">
                <button class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</form>

<?php
    include "footer.php";
?>