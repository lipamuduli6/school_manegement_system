<?php
include 'connectA.php';
if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    // echo $delete_id;
    $delete_data=mysqli_query($conn,"Delete from `attendance` where id=$delete_id")
    or die ("Query failed");
    if($delete_data){
        header('location:displayATT.php');
    }else{
        header('location:displayATT.php');
    }


}
?>







