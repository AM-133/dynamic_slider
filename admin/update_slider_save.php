<?php
    $conn=mysqli_connect('localhost','root','');
    $ab=mysqli_select_db($conn,'slider');
if(isset($_FILES['slider_img']['name']) && $_FILES['slider_img']['name'] != ""){
    $imgname=$_FILES['slider_img']['name'];
        $rand=rand(11111,99999);
        $ex=explode('.',$imgname);
        $img='slider'.$rand.".".$ex[count($ex)-1];
        $path='images/'.$img;
        move_uploaded_file($_FILES['slider_img']['tmp_name'],$path);
}
else{
    $img=$_POST['slider_img'];
    }
   echo $query="UPDATE slider_data SET slider_title='".$_POST['slider_title']."',slider_img='".$img."',slider_desc='".$_POST['slider_desc']."' WHERE slider_id='".$_POST['id']."'";

    $f=mysqli_query($conn,$query);
    if($f){
    	header('location:slider.php');
    }
    else{
    	echo "error";
    }
?>