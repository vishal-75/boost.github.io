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
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
         body{
            background-color: black;
            color: rgb(243, 242, 241);
            
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
<section class="text-gray-500 bg-gray-900 body-font relative">
        <div class="absolute inset-0 bg-gray-900">
          <iframe title="map" style="filter: grayscale(1) contrast(2.2) opacity(0.36);" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30152.11427430008!2d72.9163801326682!3d19.15085201167137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b86e528cb077%3A0xc32fa3a95817256d!2sBhandup%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1590831157775!5m2!1sen!2sin" width="100%" height="100%" frameborder="0"></iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
          <div class="lg:w-1/3 md:w-1/2 bg-gray-900 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
            <h2 class="text-white text-lg mb-1 font-medium title-font">Feedback</h2>
            <p class="leading-relaxed mb-5 text-gray-500">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
            <input class="bg-gray-800 text-white rounded border border-gray-700 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Email" type="email">
            <textarea class="bg-gray-800 text-white rounded border border-gray-700 focus:outline-none h-32 focus:border-indigo-500 text-base px-4 py-2 mb-4 resize-none" placeholder="Message"></textarea>
            <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
            <p class="text-xs text-gray-600 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
          </div>
        </div>
      </section>


        
        
          <footer class="container my-3">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>© 2020-2021 Vishal world Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
          </footer>

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
