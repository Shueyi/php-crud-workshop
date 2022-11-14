<?php

$con=new mysqli('localhost','root','','workshop');

if(!$con){
    // echo "Successful";
    die(mysqli_error($con));
}

?>