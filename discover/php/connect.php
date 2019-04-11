<?php
    
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $db = 'portfolio';

    $conn = mysqli_connect($host, $user, $pass, $db);
    
    if(!$conn){
        die("error! cannot connect to database.");
    }

?>