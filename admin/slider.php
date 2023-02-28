<?php
    include "header.php";
?>
<form method="post" action="" enctype="multipart/form-data">
<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">Slider</h1>
		</div>
		<div class="col-md-6">
			<label>Slider Image</label>
			<input type="file" name="slider_img" class="form-control">
		</div>
		<div class="col-md-6">
			<label>Slider Title</label>
			<input type="text" name="slider_title" class="form-control">
		</div>
		<div class="col-md-6">
			<label>Slider Desc</label>
			<!-- <textarea class="form-control" name="slider_desc"></textarea> -->
			<input type="text" name="slider_desc" class="form-control">
		</div>
		<div class="col-md-12 mt-3">
			<button class="btn btn-primary">Save</button>
		</div>
	</div>
</div>
</form>


<?php
    
    if(isset($_POST['slider_title'])){
        $imgname=$_FILES['slider_img']['name'];
        $rand=rand(11111,99999);
        $ex=explode('.',$imgname);
        $img='slider'.$rand.".".$ex[count($ex)-1];
        $path='images/'.$img;
        move_uploaded_file($_FILES['slider_img']['tmp_name'],$path);
        $query="INSERT INTO slider_data(slider_img, slider_title, slider_desc) VALUES ('".$img."','".$_POST['slider_title']."','".$_POST['slider_desc']."')";
        $exi=mysqli_query($conn,$query);
        if($exi){
        	echo "<script>window.location.href='slider.php';</script>";
        }
        else{
        	echo "error";
        }
    }
?>



<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">Slider Data</h1>
		</div>
		<div class="col-md-12 mt-5">
			<table width="100%" class="table table-striped table-bordered table-hover">
				<tr>
					<th>Sr.No.</th>
					<th>Slider Img</th>
					<th>Slider Title</th>
					<th>Slider Desc</th>
					<th>Action</th>
				</tr>
				<?php
				    $i=1;
				    $query="SELECT * FROM slider_data";
				    $ex=mysqli_query($conn,$query);
				    while ($row=mysqli_fetch_assoc($ex)){
				?>
				<tr>
					<td><?=$i++;?></td>
					<td>
						<img src="images/<?=$row['slider_img']?>" style="height: 100px; width: 100px;">
					</td>
					<td><?=$row['slider_title']?></td>
					<td><?=$row['slider_desc']?></td>
					<td>
						<div class="btn-group">
							<a href="update_slider.php?id=<?=$row['slider_id'];?>"><button class="btn btn-warning">Update</button></a>
							<a href="delete_slider.php?id=<?=base64_encode($row['slider_id']);?>"><button class="btn btn-danger" onclick="return confirm('Are You Sure...')">Delete</button></a>
						</div>
					</td>
				</tr>
				<?php
				    }
				?>
			</table>
		</div>
	</div>
</div>

<?php
    include "footer.php";
?>