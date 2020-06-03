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



</head>
<style>
    #more1 {display: none;}
    #more2 {display: none;}
    #more3 {display: none;}
    #more4 {display: none;}
    body{overflow-x: hidden;}
</style>
<body>
<?php require 'partials/nav.php' ?>

<section class="text-gray-500 body-font bg-gray-900">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">Pitchfork Kickstarter Taxidermy</h1>
        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
      </div>
      <p class="lg:w-1/2 w-full leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
    </div>


    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-800 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="t2.png" alt="content">
         
          <h2 class="text-lg text-white font-medium title-font mb-4">Artificial intelligence (AI)</h2>
          <p class="leading-relaxed text-base">“Artificial intelligence (AI) is an area of computer science that emphasizes the <span id="tec1">...</span><span id="more1"> creation of intelligent machines that work and react like humans. Some of the activities computers with artificial intelligence are designed for include: speech recognition, learning, planning, problem solving…..
         <br>There are four types of artificial intelligence: reactive machines, limited memory, theory of mind and self-awareness.
         </p>
          
         </span>
        <button onclick="technology1()" id="myBtn1">Read more</button>

        </div>
      </div>


      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-800 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="arm1.jpg" alt="content">
         
          <h2 class="text-lg text-white font-medium title-font mb-4">ARM7</h2>
          
          <p class="leading-relaxed text-base">Embedded system and SOC (system on chip) designers choose particular   <span id="tec2">...</span><span id="more2">microprocessor cores, libraries,and different tools to develop microprocessor based applications. An ARM processor is one of the best alternatives obtainable for embedded system designers. In the past few years, the ARM architecture has become very popular and these are available from different IC manufacturers. The applications of ARM processors involves in mobile phones, automotive braking systems, etc. A global ARM community partners have developed semiconductor as well as product-design corporations includes an employs like engineers, designers, & developers. This article is about ARM7 based LPC2148 microcontroller, architecture and pin configuration. This article will assist you to understand the basics of the microcontroller.</span></p>
        <button onclick="technology2()" id="myBtn2">Read more</button>
        </div>
      </div>


      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-800 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="t3.jpg" alt="content">
          
          <h2 class="text-lg text-white font-medium title-font mb-4">Robotic process automation (RPA)</h2>
        
          <p class="leading-relaxed text-base"> the application of technology that allows  employees<span id="tec3">...</span><span id="more3">  in a company to configure computer software or a “robot” to capture and interpret existing applications for processing a transaction, manipulating data, triggering responses and communicating with other digital systems.<br>Robotic process automation (RPA) is the use of software with artificial intelligence (AI) and machine learning capabilities to handle high-volume, repeatable tasks that previously required humans to perform. These tasks can include queries, calculations and maintenance of records and transactions.</span></p>
        <button onclick="technology3()" id="myBtn3">Read more</button>
        </div>
      </div>


      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-800 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="svs1.jpg" alt="content">
          
          <h2 class="text-lg text-white font-medium title-font mb-4">Samsung Exynos 990</h2>
          <p class="leading-relaxed text-base">The next-level of intelligence is coming. With the Exynos 990 <span id="tec4">...</span><span id="more4">, a mobile processor designed with a powerful AI processing capability, mobile experiences will evolve to meet the new aspects of mobility in the era of AI. Featuring a dual-core neural processing unit (NPU), the Exynos 990 processor delivers faster and efficient machine learning performance. When combined with the advanced image processing technologies, AI enables the camera to produce a pro-grade photography thru intelligent optimization. The Exynos 990 processor can be paired with the 5G cellular modem to deliver hyper-fast mobile broadband speed for the era of live. To offer an experience that’s like a computer, a gaming console, and a television on a mobile device, the Exynos 990 incorporates a powerful octa-core CPU, a cutting-edge GPU, an advanced display and a video subsystem that delivers unmatched performance to suit the next-level smartphone.</span></p>
        <button onclick="technology4()" id="myBtn4">Read more</button>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require 'partials/footer.php' ?>
</body>
<script>
    function technology1() {
  var dots = document.getElementById("tec1");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("myBtn1");

  

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function technology2() {
  var dots = document.getElementById("tec2");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");

  

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}


function technology3() {
  var dots = document.getElementById("tec3");
  var moreText = document.getElementById("more3");
  var btnText = document.getElementById("myBtn3");

  

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}


function technology4() {
  var dots = document.getElementById("tec4");
  var moreText = document.getElementById("more4");
  var btnText = document.getElementById("myBtn4");

  

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
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
