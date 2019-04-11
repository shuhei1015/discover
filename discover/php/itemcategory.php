<?php
    require_once('header.php');
    
    if(!$_SESSION['userid']){
    header("location:login.php");
    }

    require_once('nav.php');

    $categoryid = $_GET['categoryid'];
?>

    
<div class="container">

    <table class="table mt-3">
        <thead class="bg-secondary text-white">
            <tr>
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Item Description</th>
                <th>Item Price</th>
                <th>Item Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM items WHERE category_id = '$categoryid'";
            $query = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($query)){
        ?>
            <tr>
                <td><?php echo $row['item_id']; ?></td>
                <td><?php echo $row['item_name']; ?></td>
                <td><?php echo $row['item_description']; ?></td>
                <td><?php echo $row['item_price']; ?></td>
                <td><?php echo $row['item_quantity']; ?></td>
                <td>
                    <a href="edititem.php?itemid=<?php echo $row['item_id']; ?>" class="btn btn-info">Edit</a>
                    <a href="deleteitem.php?itemid=<?php echo $row['item_id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        <?php
            }
        ?>
        </tbody>
    </table>

    <a href="additem.php" class="btn btn-primary">Add Item</a>
</div>

<?php
    require_once('footer.php');
?>