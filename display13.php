<?php
$servername = "your_database_server";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "crud";


$conn =mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $department = $_POST['department'];
    $year = $_POST['year'];
    $course_fee = $_POST['course_fees'];

   
    $insert_sql = "INSERT INTO course_fee (department, year, course_fees) VALUES ('$department', '$year', '$course_fee')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "Course fee added successfully";
    } else {
        echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }
}


$sql = "SELECT * FROM course_fee";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<h2>Course Fee</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Department</th><th>Year</th><th>Course Fee</th></tr>";

    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["department"] . "</td>";
        echo "<td>" . $row["year"] . "</td>";
        echo "<td>" . $row["course_fees"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course Fee</title>
</head>
<body>

    <h2>Add Course Fee</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
