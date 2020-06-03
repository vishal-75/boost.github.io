
<?php


if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
   $loggedin=true;
}
else{
  $loggedin=false;
}
echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">NTech</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
      </li>';
      if(!$loggedin){
      echo'<li class="nav-item">
        <a class="nav-link" href="index.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form.php">Signup</a>
      </li>';
      }
      if($loggedin){
      echo'
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Topics
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="technology.php">Technology</a>
            <a class="dropdown-item" href="web.php">Web Development</a>
            <div class="dropdown-divider"></div>
           
            <a class="dropdown-item" href="write for us.php">Write for us</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="Php CRUD Operations.php">Add Notes </a>
      </li>

      </ul>

      
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>';
    }
      
     
   echo' </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>';
?>