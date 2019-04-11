<?php
    require_once('header.php');
?>  

<div class="container">
    <div class="col-md-6 offset-md-3">
        <div class="card text-center mt-5">
            <div class="card-header bg-dark text-white">
                <h2 class="display-5">Log in</h2>
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
                        <button type="submit" name="login" class="btn btn-dark btn-block">Log in</button>
                    </div>
                </form>
                <?php
                    if(isset($_POST['login'])){
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                        $query = mysqli_query($conn, $sql)or die(mysqli_error($conn));

                        if(mysqli_num_rows($query) == 1){
                            $result = mysqli_fetch_assoc($query);

                            $_SESSION['username'] = $username;
                            $_SESSION['userid'] = $result['user_id'];

                            if($query == TRUE){
                                header("location:buyitem.php");
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>


<?php
    require_once('footer.php');
?>