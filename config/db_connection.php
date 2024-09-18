<?php
    $connection = mysqli_connect("localhost","root","","delock");
    if (mysqli_connect_errno()) { 
        printf("", mysqli_connect_error());
    }else{
        echo "good";
    }
?>