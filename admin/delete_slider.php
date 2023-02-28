<?php
$ab=base64_decode($_REQUEST['id']);
$conn=mysqli_connect('localhost','root','','slider');
$q="DELETE FROM slider_data WHERE slider_id='".$ab."'";
$f=mysqli_query($conn,$q);
header('location:slider.php');
?>