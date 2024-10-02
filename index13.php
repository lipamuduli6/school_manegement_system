<?php
include "db_conn12.php";

if (isset($_POST["submit"])) {
   $department = $_POST['department'];
   $year = $_POST['year'];
   $course_fee = $_POST['course_fees'];

   $sql = "INSERT INTO `course_fee`(`id`, `department`, `year`, `course_fees`) VALUES (NULL,?,?,?)";
   
   $stmt = mysqli_prepare($conn, $sql);
   mysqli_stmt_bind_param($stmt, "sss", $department, $year, $course_fees);
   
   $result = mysqli_stmt_execute($stmt);

   if ($result) {
      header("Location: display13.php.php?msg=New record created successfully");
      exit(); 
   } else {
      echo "Failed: " . mysqli_error($conn);
   }

   mysqli_stmt_close($stmt);
   mysqli_close($conn);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course Fee</title>
     <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
<body>

    

    <form action="display13.php" method="post">
    <h2>Add Course Fee</h2>
        <label for="department">Department:</label>
        <input type="text" name="department" required><br>

        <label for="year">Year:</label>
        <input type="text" name="year" required><br>

        <label for="course_fees">Course Fee:</label>
        <input type="text" name="course_fees" required><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
