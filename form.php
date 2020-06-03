<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect1.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email = $_POST["email"];
    //$exists=false;
    //Check User name is Exits
    $existSql="SELECT*FROM `try` WHERE username='$username'";
    $result=mysqli_query($conn,$existSql);
    $numExistRows=mySqli_num_rows($result);

    if($numExistRows>0){
        $showError="Username Already Exists";
    }
    else{

    if(($password == $cpassword) ){
       
        $sql = "INSERT INTO `try` ( `username`, `password`,`email`, `dt`) VALUES ('$username', '$password','$email', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
            header("location: index.php");
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
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

    <title>SignUp</title>
    <style>
        body{
            background-image: url(sign.jpg)   ;
            color: aliceblue;
            background-size: 100% 100%;
            height: 100vh;
            background-repeat: no-repeat;
            
        }
        h1{
            font-weight: bolder;
            text-shadow: red 2px 2px;
        }
        label{
            color: rgb(5, 5, 5);
            font-weight: bolder;
            text-shadow: rgb(112, 183, 241) 1px 2px;
            
            
        }
        .for{
            width: 60%;
         
        }
    </style>

  </head>
  <body>
    
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    <?php require 'partials/nav.php' ?>
    <div class="container mt-4">
     <h1 class="text-center">Signup to our website</h1>
     <form action="form.php" method="post">
        <div class="form-group ">
            <label for="username">Username</label>
            <input type="text" maxlength="11" class="form-control" placeholder="Username" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group  ">
            <label for="password">Password</label>
            <input type="password" maxlength="23" class="form-control" placeholder="Password"  id="password" name="password">
        </div>
        
        <div class="form-group  ">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <div class="form-group  ">
            <label for="password">Email</label>
            <input type="email" maxlength="23" class="form-control" id="email"  placeholder="Email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">SignUp</button>
     </form>
    </div>
    <?php require 'partials/footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
