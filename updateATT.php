<?php 
include 'connectA.php';

if(isset($_POST['update_btn'])){
    $data_id = $_POST['data_id'];
    $studentname = $_POST['studentname'];
    $classname = $_POST['classname'];
    $date = $_POST['date'];
    $attendancestatus = $_POST['attendancestatus'];
    
$sql = "UPDATE `attendance` SET studentname=?, classname=?, date=?, attendancestatus=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $studentname, $classname, $date, $attendancestatus, $data_id);
$result = $stmt->execute(); // Corrected the method name to 'execute'

if ($result) {
    header('location:displayATT.php');
    exit();
} else {
    die("Error in updating data: " . $stmt->error);
}

    if($result){
        header('location:displayATT.php');
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
    <style>
        .custom-form {
    max-width: 400px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input, select {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

.custom-btn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.custom-btn:hover {
    background-color: #45a049;
}

.card {
            width: 700px;
            margin: 50px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.7);
        }

        .card-body {
            padding: 40px;
        }





    </style>
</head>
<body>
    <h1>Update data</h1>
    <a href="displayATT.php">View data</a>
    <?php
    if(isset($_GET['edit'])){
        $edit_id = $_GET['edit'];
        $get_data = mysqli_query($conn, "SELECT * FROM `attendance` WHERE id=$edit_id");
        if(mysqli_num_rows($get_data) > 0){
            $fetch_data = mysqli_fetch_assoc($get_data);
    ?>
    
   <form action="" method="post">
    <input type="hidden" name="data_id" value="<?php echo $fetch_data['id'] ?>">
    <div class="card">
    <div class="card-body">
    <div class="form-group">
        <label>Student Name:</label>
        <input type="text" placeholder="Enter Your name" required autocomplete="off" value="<?php echo $fetch_data['studentname'] ?>" name="studentname">
    </div>

    <div class="form-group">
        <label>Class Name:</label>
        <input type="text" placeholder="Enter Your email" required autocomplete="off" value="<?php echo $fetch_data['classname'] ?>" name="classname">
    </div>

    <div class="form-group">
        <label>Attendance Date:</label> 
        <input type="date" required autocomplete="off" value="<?php echo $fetch_data['date'] ?>" name="date">
    </div>

    <div class="form-group">
    <label>Attendance Status:</label>
    <select class="form-control" name="attendancestatus">
        <option value="present" <?php echo ($fetch_data['attendancestatus'] == 'present') ? 'selected' : ''; ?>>Present</option>
        <option value="absent" <?php echo ($fetch_data['attendancestatus'] == 'absent') ? 'selected' : ''; ?>>Absent</option>
    </select>
</div>


    <input type="submit" class="btn" name="update_btn" value="Update">
</form>


    </form>
    <?php
        }
    }
    ?>
</body>
</html>
