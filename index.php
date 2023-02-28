<?php

$conn=mysqli_connect('localhost','root','','slider'); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Dynamic Slider
    </title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Dynamic Slider</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class=" my-2">
        <a href="admin/login.php" style="color: gray; font-size: 30px;"><i class="fas fa-user-cog"></i></a>
      </li>
      
    </ul>
    
  </div>
</nav>

<div class="container-fluid">
        <?php
            
            $query="SELECT * FROM slider_data WHERE slider_img!=''";

            $res=mysqli_query($conn,$query);
        ?>
      <div class="row">
        <div class="col-12">
            <div id="carouselExampleCaptions" class="carousel slide1" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
                        $i=0;

                        foreach($res as $row)
                        {
                            if($i==0){
                                $class='active';
                            }
                            else{
                                $class='';
                            }
                    ?>
                    <li data-target="#carouselExampleCaptions" data-slide-to="<?=$i?>" class="<?=$class?>"></li>
                    <?php
                        $i++;
                        }
                    ?>
                </ol>
                <div class="carousel-inner">
                    <?php
                        $i=0;
                        foreach($res as $row)
                        {
                            if($i==0){
                                $class='active';
                            }
                            else{
                                $class='';
                            }
                    ?>
                    <div class="carousel-item <?=$class?> bgimg">
                        <img src="admin/images/<?=$row['slider_img']?>" class="d-block w-100" style="height: 600px;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            
                            <h1 class="font-weight-light text-left" style="font-size: 100px;"><?=$row['slider_title']?></h1>
                            <h3 class="font-weight-light text-left" style="font-size: 50px; margin-bottom: 200px;"><?=$row['slider_desc']?></h3>
                        </div>
                    </div>
                    <?php
                        $i++;
                        }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
      </div>
    </div>
    
</body>
</html>
