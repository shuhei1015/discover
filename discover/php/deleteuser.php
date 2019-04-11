<?php 

    require_once('connect.php');

    $userid = $_GET['userid'];

    $sql = "DELETE FROM users WHERE user_id = '$userid'";

    $query = mysqli_query($conn, $sql);

    header('location:index.php');


?>