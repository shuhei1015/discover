<?php
    require_once('header.php');    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/font-awesome.min.css" />
  <link rel="stylesheet" href="../css/font-awesome.css" />
  <link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/isotope.css" media="screen" />
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- =======================================================
    Theme Name: Hidayah
    Theme URL: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
<header>
    <div class="main-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">			Discover <i class="fas fa-plane" ></i></a></h1>
						</a></h1>
          </div>
          <div class="col-md-8">
            <div class="dropdown">
              <ul class="nav nav-pills">
                <li><a href="experience.html">Experience</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="php/registrer.php">Registration</a></li>
                <li><a href="php/login.php">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


  </header>

  <section id="content">
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51862.588973987076!2d139.65759651965405!3d35.66686073044725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cb2eb3108d1%3A0xf11cd9b2395b6677!2z5pel5pys44CB5p2x5Lqs6YO95riL6LC35Yy6!5e0!3m2!1sja!2sph!4v1554785203636!5m2!1sja!2sph" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Get in touch with us by filling <strong>make registration form below</strong></h4>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <div class="card-body">
              <form method="post">
                  <div class="form-group">
                      <label for="username" class="float-left">Username</label>
                      <input type="text" name="username" id="username" class="form-control" placeholder="User name">
                  </div>
                  <div class="form-group">
                      <label for="password" class="float-left">Password</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                      <label for="email" class="float-left">Email address</label>
                      <input type="email" name="email" id="email" class="form-control "placeholder="Email">
                  </div>
                  <div class="form-group">
                      <label for="number" class="float-left">Contact number</label>
                      <input type="number" name="number" id="number" class="form-control "placeholder="number">
                  </div>
                  <div class="form-row mb-3">
                      <div class="col">
                          <label for="firstname" class="float-left">Firstname</label>
                          <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name">
                      </div><br>
                      <div class="col">
                          <label for="lastname" class="float-left">Lastname</label>
                          <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name">
                      </div>
                  </div>
                  <hr>
                  <input type="submit" value="Register" name="register" class="btn btn-outline-secondary btn-block"><br>
              </form>

        </div>
      </div>
    </div>
  </section>
  <footer>

        <div class="col-sm-12 text-center">
          <p>Discover.inc</p>
          <div class="credits">

            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>>
      </div>

    </section>
    <a href="#" class="scrollup"><i class="fa fa-chevron-up"> </i></a>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>

<?php

// require('registrer.php');
require('connect.php');

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    
    $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";

    $query  = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) >= 1){
        echo "Username or Email already exist";
        }
        
        else{
            $sql2 = "INSERT INTO users(username, password, firstname, lastname, email ,number) VALUES('$username', '$password', '$firstname','$lastname', '$email','$number')";

            $query2 = mysqli_query($conn, $sql2);
            if($query2 == TRUE){
                header("Location:login.php");

            }
        else{
            die(mysqli_error($conn));
        }
    }
}

?>


<?php
    require_once('footer.php');

?>