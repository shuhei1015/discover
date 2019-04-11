<?php
    require_once('header.php');

    if(!$_SESSION['userid']){
        header("location:login.php");
    }

    require_once('nav.php');

    $userid = $_GET['userid'];

    $sql = "SELECT * FROM users WHERE user_id = '$userid'";

    $query = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($query);

?>
        <div class="container">
        
            <div class="card text-center mt-5">
                <div class="card-header bg-dark text-white">
                    Edit User
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="username" class="float-left">Username</label>
                            <input type="text" name="username" id="username" value="<?php echo $row['username']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="float-left">Email</label>
                            <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" class="form-control">
                        </div>
                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="firstname" class="float-left">Firstname</label>
                                <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo $row['firstname']; ?>" placeholder="First name">
                            </div>
                            <div class="col">
                                <label for="lastname" class="float-left">Lastname</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name" value="<?php echo $row['lastname']; ?>">
                            </div>
                        </div>
                        <hr>
                        <input type="submit" value="Register" name="register" class="btn btn-outline-secondary btn-block">
                    </form>

                    <?php

                        if(isset($_POST['register'])){
                            $username = $_POST['username'];
                            $firstname = $_POST['firstname'];
                            $lastname = $_POST['lastname'];
                            $email = $_POST['email'];
                                    $sql2 = "UPDATE users SET username = '$username', email = '$email', firstname = '$firstname', lastname = '$lastname', WHERE user_id = '$userid'";
                                    $query2 = mysqli_query($conn, $sql2);
                                    if($query2 == TRUE){
                                        header("Location:index.php");

                                    }
                                else{
                                    die(mysqli_error($conn));
                                }
                            }

                    ?>

                </div>
            </div>
        </div>
<?php
    require_once('footer.php');

?>
