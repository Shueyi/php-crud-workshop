<?php

include 'connect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `crud` where id='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted!";
        header('location:display.php');

    }else{
        die(mysqli_error($con));
    }
}

?>