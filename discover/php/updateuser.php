<?php
    require_once('header.php');

    if(!$_SESSION['userid']){
        header("location:login.php");
        }
    require_once('nav.php');
?>
        <div class="container">
            <div class="card text-center mt-5">
                <div class="card-header bg-dark text-white">
                    Update User
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="username" class="float-left">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="float-left">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="float-left">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="firstname" class="float-left">Firstname</label>
                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name">
                            </div>
                            <div class="col">
                                <label for="lastname" class="float-left">Lastname</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name">
                            </div>
                        </div>
                        <hr>
                        <input type="submit" value="Register" name="register" class="btn btn-outline-secondary btn-block">
                    </form>

                    <?php
                        if(isset($_POST['register'])){
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $firstname = $_POST['firstname'];
                            $lastname = $_POST['lastname'];
                            $email = $_POST['email'];

                            $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";

                            $query  = mysqli_query($conn, $sql);

                            if(mysqli_num_rows($query) >= 1){
                                echo "Username or Email already exist";
                                }
                                
                                else{
                                    $sql2 = "INSERT INTO users(username, password, firstname, lastname, email) VALUES('$username', '$password', '$firstname','$lastname', '$email')";

                                    $query2 = mysqli_query($conn, $sql2);
                                    if($query2 == TRUE){
                                        header("Location:index.php");

                                    }
                                else{
                                    die(mysqli_error($conn));
                                }
                            }
                        }

                    ?>

                </div>
            </div>
        </div>
<?php
    require_once('footer.php');

?>