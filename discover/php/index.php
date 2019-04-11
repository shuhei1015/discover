<?php
    require_once('header.php');
    
    if(!$_SESSION['userid']){
    header("location:login.php");
    }

    require_once('nav.php');
?>



<div class="container" id="navbarContent">
        <div class="row">
            <div class="col-8">
                <div class="row">
                <div class="col-4"><br>
                    <a href="buyitem.php" class="btn btn-secondary btn-block">Buy Item</a>
                    </div>
                    <div class="col-4"><br>
                    <a href=" items.php" class="btn btn-secondary btn-block">Display Item Bought</a>
                    </div>
                    <div class="col-4"><br>
                    <a href="updateuser.php" class="btn btn-secondary btn-block">Update User Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="container">

    <table class="table mt-3">
        <thead class="bg-dark text-white">
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email Address</th> 
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM users";
            $query = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($query)){
        ?>
            <tr>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <a href="edituser.php?userid=<?php echo $row['user_id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="deleteuser.php?userid=<?php echo $row['user_id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        <?php
            }
        ?>
        </tbody>
    </table>

    <a href="updateuser.php" class="btn btn-secondary">Add User</a>
</div>

<?php
    require_once('footer.php');
?>