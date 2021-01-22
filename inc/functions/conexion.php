<?php
    $conn = new mysqli('localhost', 'root', '', 'abarrotes');
    if($conn->connect_error ){
        echo $error -> $conn->connect_error;
    } else{
        /* echo "Succesfully"; */
    }
?>