<body>
  <header>
    <div class="main-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-4">

              <h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">			Discover <i class="fas fa-plane" ></i></a></h1>

          </div>

          <div class="col-md-8">
            <div class="dropdown">
              <ul class="nav nav-pills">
      
                <li><a href="experience.html">Experience</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="php/registrer.php">Registration</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="content">
    <div class="container">
            <div class="card text-center mt-5">
                <div class="card-header bg-dark text-white">
                    Buy Ticket
                </div>
      <div class="row">
        <div class="col-lg-12">
          <h4>Get in touch with us by filling <strong>make  reservation form below</strong></h4>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <div class="card-body">
              <form method="post">
                <div class="form-group">
                    <label for="schedule" class="float-left">Where are you going?</label>
                    <select class="form-control country-dropdown loading" name="country"><option selected="selected" value=""></option><option value="0">アメリカ</option><option value="1">イギリス</option><option value="2">カナダ</option><option value="3">オーストラリア</option><option value="4">ニュージーランド</option><option value="5">フィリピン</option></select>
                </div>
                  <label for="schedule" class="float-left">From When</label>
                  <input type="date" name="schedul" id="schedul" class="form-control">
              </div>
              <div class="form-group">
                <label for="schedule" class="float-left">Utill When</label>
                <input type="date" name="schedul" id="schedul" class="form-control">
            </div>
            <div class="form-row mb-3">
                      <div class="col">
                          <label for="firstname" class="float-left">How many</label>
                          <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name">
                      </div><br>
                      <div class="form-row mb-3">
                      <div class="col">
                          <label for="firstname" class="float-left">Firstname</label>
                          <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name">
                      </div><br>
                  <div class="form-row mb-3">
                      <div class="col">
                          <label for="firstname" class="float-left">Firstname</label>
                          <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name">
                      </div><br>
                      <div class="col">
                          <label for="lastname" class="float-left">Lastname</label>
                          <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name">
                      </div><br>
                      <div class="col">
                          <label for="number" class="float-left">Contact number</label>
                          <input type="number" class="form-control" name="number" id="number" placeholder="number">
                      </div><br>
                      <div class="form-group">
                        <label for="email" class="float-left">Email</label>
                        <input type="email" name="email" id="email" class="form-control "placeholder="Email">
                    </div>
                  </div>
                  <div class="form-row mb-3">
                      <div class="col">
                          <label for="email" class="float-left">Check Email</label>
                          <input type="text" class="form-control" name="email" id="email" placeholder="email">
                      </div><br>
                  <hr>
                  <input type="submit" value="Reservation" name="reservation" class="btn btn-outline-secondary btn-block"><br>
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

if(isset($_POST['add'])){
    $itemname = $_POST['itemname'];
    $category = $_POST['category'];
    $itemdescription = $_POST['itemdescription'];
    $itemprice = $_POST['itemprice'];
    $itemquantity = $_POST['itemquantity'];
    

    $sql = "SELECT * FROM items WHERE item_name = '$itemname'";

    $query  = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) >= 1){
        echo "Item already exist";
        }
        
        else{
            $sql2 = "INSERT INTO items(category_id, item_name, item_description, item_price, item_quantity) VALUES('$category', '$itemname', '$itemdescription', '$itemprice', '$itemquantity')";

            $query2 = mysqli_query($conn, $sql2);
            if($query2 == TRUE){
                header("Location:items.php");

            }
        else{
            die(mysqli_error($conn));
        }
    }
}

?>


<?php

    if(!$_SESSION['user_id']){
        header("location:login.php");
        }
    require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">


<?php
    require_once('footer.php');

?>
