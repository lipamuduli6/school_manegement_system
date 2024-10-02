<?php 
include 'connectA.php';

if(isset($_POST['update_btn'])){
    $data_id = $_POST['data_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];


    $sql = "UPDATE `studenta` SET username=?, email=?, mobile=?, address=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $username, $email, $mobile, $address, $data_id);
    $result = $stmt->execute();

    if($result){
        header('location:N_display.php');
        exit();
    } else {
        die("Error in updating data");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data project</title>
    <!-- css -->
    <link rel="stylesheet" href="styleCD.css">
</head>
<body>
    <h1>Update data</h1>
    <a href="N_index.php">View data</a>
    <?php
    if(isset($_GET['edit'])){
        $edit_id = $_GET['edit'];
        $get_data = mysqli_query($conn, "SELECT * FROM `studenta` WHERE id=$edit_id");
        if(mysqli_num_rows($get_data) > 0){
            $fetch_data = mysqli_fetch_assoc($get_data);
    ?>
    <form action="" method="post">
        <input type="hidden" name="data_id" value="<?php echo $fetch_data['id'] ?>">
        <input type="text" required autocomplete="off" value="<?php echo $fetch_data['username'] ?>" name="username">
        <input type="email" required autocomplete="off" value="<?php echo $fetch_data['email'] ?>" name="email">
        <input type="text" required autocomplete="off" value="<?php echo $fetch_data['mobile'] ?>" name="mobile">
        <input type="text" required autocomplete="off" value="<?php echo $fetch_data['address'] ?>" name="address">
        <input type="submit" class="btn" name="update_btn" value="Update">
    </form>
    <?php
        }
    }
    ?>
</body>
</html>