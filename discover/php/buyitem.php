<?php
    require_once('header.php');

    if(!$_SESSION['userid']){
        header("location:login.php");
        }
    require_once('nav.php');
?>
<br><br>
<section id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Get in touch with us by filling <strong>make  reservation form below</strong></h4>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <div class="card-body">
            <div class="card text-center mt-5">
                <div class="card-header bg-dark text-white">
                    Buy Ticket
                </div>
                <div class="card-body">
                <form method="post">
                        <div class="form-group">
                            <label for="country"" class="float-left">Where are you going?</label>
                            <select class="form-control country-dropdown loading" name="country">
                                //use sql statements to display all destinations from items table
                                        <option value="item_destination">USA</option>
                                        <option value="item_destination">UK</option>
                                        <option value="item_destination">CA</option>
                                        <option value="item_destination">AUS</option>
                                        <option value="item_destination">NZ</option>
                                        <option value="item_destination">PH</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="schedule" class="float-left">From When</label>
                        <input type="date" name="schedul" id="schedul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="schedule" class="float-left">Utill When</label>
                        <input type="date" name="schedul" id="schedul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="float-left">Quantity</label>
                        <input type="number" name="number" id="number" class="form-control">
                    </div>
                        </div>
                        <hr>
                        <input type="submit" value="Reservation" name="reservation" class="btn btn-outline-secondary btn-block"><br>
                        </select>
                    </form>

                </div>
            </div>
        </div>
<?php
    require_once('footer.php');

?>
