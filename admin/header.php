<?php

    session_start();
    if(!isset($_SESSION['login_id'])){
        session_destroy();
        header('location:login.php');
    }
    $conn=mysqli_connect('localhost','root','','slider');
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
    <body>
        <div class="container-fluid">
            <div class="row bg-dark">
                <div class="col-md-9">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <!-- <a class="navbar-brand" href="#"><img src="../logo1.jpg"></a> --><h3 class=" text-light" >hello</h3>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item ml-3">
                                    <a class="nav-link ml-5 " href="index.php">Home</a>
                                </li>
                                <li class="nav-item ml-3">
                                    <a class="nav-link ml-5" href="slider.php">Slider</a>
                                </li>
                              
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-3 btn-group">
                    <marquee><span class="mt-3 d-flex flex-column font-weight-bold text-white text-capitalize">Welcome <?=$_SESSION['user_name'];?></span></marquee>
                    <a class="nav-link" href="logout.php"><button class="float-right justify-content-end btn btn-danger mt-2">logout</button></a>
                </div>
            </div>
        </div>
        