<?php


    session_start();
    $connection = mysqli_connect("localhost:3307","root","","student");

    if(mysqli_connect_errno()){
        echo "failed to connect". mysqli_connect_errno();
    }

    

?>