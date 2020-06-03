<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
}


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <title>NTech World!</title>
  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 95vh;
    }
  </style>
</head>

<body>
  <!-- Start Nav bar -->
<?php require 'partials/nav.php' ?>

  <!--carousel -->

  <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/1200x900/?code,java" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Welcome Vishal Coding World</h3>
          <p>Technology News,Development And Trends</p>
          <button type="button" class="btn btn-success">Technology News</button>
          <button type="button" class="btn btn-danger">Web Development</button>
          <button type="button" class="btn btn-primary">Tech Fun</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1200x900/?program,php" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">

          <h3>Best Coding Blog</h3>
          <p>Technology News,Development And Trends</p>
          <button type="button" class="btn btn-success">Technology News</button>
          <button type="button" class="btn btn-danger">Web Development</button>
          <button type="button" class="btn btn-primary">Tech Fun</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1200x900/?web Development,love" alt="New York" width="1100" height="500">
        <div class="carousel-caption">

          <h3>Award Winning Blog</h3>
          <p>Technology News,Development And Trends</p>
          <button type="button" class="btn btn-success ">Technology News</button>
          <button type="button" class="btn btn-danger ">Web Development</button>
          <button type="button" class="btn btn-primary ">Tech Fun</button>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

 <!--blog div -->
  <div class="container my-4">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">PROCESSOR</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">Microcontrollers</a>
            </h3>
            
            
            <p class="card-text mb-auto">8051 microcontroller is designed by Intel in 1981. It is an 8-bit microcontroller. It is built with 40 pins DIP (dual inline package), 4kb of ROM storage and 128 bytes of RAM storage, 2 16-bit timers.</p>
            <a href="mic.html"  target="_blank">Continue reading</a>
          </div>
          <img src="mic1.jpg" class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
            alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
          >
        </div>
      </div>
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">PROCESSOR
            </strong>
             <h3 class="mb-0">
              <a class="text-dark" href="#">ARM7</a>
            </h3>
            
            
            <p class="card-text mb-auto">Embedded system and SOC (system on chip) designers choose particular microprocessor cores, libraries, and different tools to develop microprocessor based applications. </p>
            <a href="arm.html" target="_blank">Continue reading</a>
          </div>
          <img src="arm1.jpg" class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
            alt="Thumbnail [200x250]" style="width: 200px; height: 250px;">
        </div>
      </div>
    </div>
  </div>

 
 
  <div class="container my-4">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">PROCESSOR</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="Qualcomm.html">Qualcomm Snapdragon 865</a>
            </h3>
            
            <p class="card-text mb-auto">Our leading 5th gen Qualcomm® Artificial Intelligence (AI) Engine drives on-device experiences that are more intuitive, intelligent and responsive</p>
            <a href="Qualcomm.html">Continue reading</a>
          </div>
          <img src="Qua.jpg" class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
            alt="Thumbnail [200x250]" style="width: 200px; height: 260px;"
            >
        </div>
      </div>
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">PROCESSOR</strong>
            <h3 class="mb-0">
              <a class="text-dark pt-3" href="samsung.html">Samsung Exynos 990</a>
            </h3>
          
            <p class="card-text mb-2">The next-level of intelligence is coming. With the Exynos 990, a mobile processor designed with a powerful AI processing capability, mobile experiences will evolve to meet the new aspects of mobility </p>
            <a href="samsung.html">Continue reading</a>
          </div>
          <img src="svs.jpg" class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
            alt="Thumbnail [200x250]" style="width: 200px; height: 260px;"
            >
        </div>
      </div>
    </div>
  </div>





  


















  <?php require 'partials/footer.php' ?>
  <div class="container">
  <p>© 2020 NTech. All Rights Reserved. By: NTech </p>
</div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>