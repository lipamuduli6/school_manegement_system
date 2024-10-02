<?php include 'connect.php';
    // <!-- inserting data inside table -->
    if(isset($_POST['submit'])){
        // echo "success";
        $username=$_POST['username'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        
        // insert query
        $sql="insert into `phpcrud` (username,email,mobile,address)
        values('$username','$email','$mobile','$address')";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:display.php');
        }else{
            echo die("Data not inserted");
        }



    }


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php sms crud-project</title>
    <!-- css -->
    <link rel="stylesheet" href="styleCD.css">
</head>
<body>
    <h1>php crud</h1>
    <a href="display.php">View data</a>
    <form action="" method="post">
        <input type="text" placeholder="Enter your name" required autocomplate="off" name="username">
        <input type="text" placeholder="Enter your Email" required autocomplate="off" name="email">
        <input type="text" placeholder="Enter your mobile number" required autocomplate="off" name="mobile">
        <input type="text" placeholder="Enter your Address" required autocomplate="off" name="address">
        <input type="submit" class="btn" name="submit">
</form>

</body>
</html>