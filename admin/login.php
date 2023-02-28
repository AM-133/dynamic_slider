<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <style type="text/css">
    	.box1:hover{
    		box-shadow: 10px 10px 50px 10px black;
    	}
    </style>
</head>
<body class="p-5 bg-light">
	<form action="" method="post">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 bg-dark p-5 m-5 border box1">
				<h2 class="text-center text-white">Admin Login</h2>
				<label class="text-light">User Name</label>
				<input type="text" name="user_name" class="form-control" required>
				<label class="text-light mt-3">Password</label>
				<input type="password" name="password" class="form-control" required>

				<div class="mt-3">
				    <a href="#">forgot password</a><br>
			    </div>
				<button class="btn btn-primary mt-3">Login</button>
			</div>
		</div>
	</div>
	</form>
</body>
</html>

<?php
if (isset($_POST['user_name'])) {
    $conn=mysqli_connect('localhost','root','','slider');
        $query="SELECT * from login WHERE user_name='".$_POST['user_name']."' AND password='".$_POST['password']."'";
        $row=mysqli_query($conn,$query);
        $data=mysqli_fetch_assoc($row);

        if($_POST['user_name']==$data['user_name'] && $_POST['password']==$data['password']){

        	$_SESSION['login_id']=$data['login_id'];
        	$_SESSION['user_name']=$data['admin_name'];

        	header('location:slider.php');

        }
        else{
        	echo "<script>alert('Invalid username or password');</script>";
        	header('locaton:login.php');
        }

    }
   
?>