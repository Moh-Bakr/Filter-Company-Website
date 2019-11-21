<?php
   

   $connection = mysqli_connect('localhost', 'root', '', 'is');  
    if(!$connection) {
        die("Database connection failed");
    }