<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
         body{
            background-color: black;
            color: rgb(243, 242, 241);
            overflow-x: hidden;
            
        }
        h2{
          font-weight: 900;
          text-shadow: red 2px 2px;
          
        } 
    </style>
</head>
<body>
    <!-- Start Nav bar -->
<?php require 'partials/nav.php' ?>


 
<div class="container mt-5">
    <div class="row featurette d-flex justify-content-center align-items-center">
        <div class="col-md-7">
          <h2 class="featurette-heading">What is HTML used for? </h2>
          <p class="lead">First developed by Tim Berners-Lee in 1990, HTML is short for Hypertext Markup Language. HTML is used to create electronic documents (called pages) that are displayed on the World Wide Web. Each page contains a series of connections to other pages called hyperlinks.</p>
        </div>
        <div class="col-md-5">
          <img src="html.jpg"  class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 300px; height: 300px"; >
        </div>
      </div>
</div>

<div class="container mt-5">
    <div class="row featurette d-flex justify-content-center align-items-center">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">What is meant by CSS? </h2>
          <p class="lead">CSS stands for Cascading Style Sheets. CSS describes how HTML elements are to be displayed on screen, paper, or in other media. CSS saves a lot of work. It can control the layout of multiple web pages all at once. External stylesheets are stored in CSS files.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="css.jpg"  class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="300x300" style="width: 300px; height: 300px;" >
        </div>
      </div>
</div>

<div class="container mt-5">
    <div class="row featurette d-flex justify-content-center align-items-center">
        <div class="col-md-7 ">
          <h2 class="featurette-heading">What does JavaScript mean? </h2>
          <p class="lead">JavaScript is a programming language commonly used in web development. It was originally developed by Netscape as a means to add dynamic and interactive elements to websites. ... Like server-side scripting languages, such as PHP and ASP, JavaScript code can be inserted anywhere within the HTML of a webpage.</p>
        </div>
        <div class="col-md-5">
          <img src="java.jpg" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 300px; height: 300px;" >
        </div>
      </div>
</div>


<?php require 'partials/footer.php' ?>
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
