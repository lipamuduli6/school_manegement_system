<?php
// Database connection parameters
$servername = "your_database_host";
$username = "your_username";
$password = "your_password";
$dbname = "sms_project";

// Create connection
$conn = mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create
if (isset($_POST['submit'])) {
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact_name = $_POST['contact_name'];
    $student_name = $_POST['student_name'];
    $email = $_POST['email'];
    $emergency_contact = $_POST['emergency_contact'];
    $relationship = $_POST['relationship'];

    $sql = "INSERT INTO parent (father_name, mother_name, dob, gender, contact_name, student_name, email, emergency_contact, relationship)
            VALUES ('$father_name', '$mother_name', '$dob', '$gender', '$contact_name', '$student_name', '$email', '$emergency_contact', '$relationship')";

    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Read
$sql = "SELECT * FROM parent";
$result = $conn->query($sql);

// Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $new_father_name = $_POST['new_father_name'];
    $new_mother_name = $_POST['new_mother_name'];
    $new_dob         = $_POST['new_dob '];
    $new_gender_name = $_POST['new_gender_name'];
    $new_contact_name    = $_POST['new_contact_name '];
    $new_student_name    = $_POST['new_student_name'];
    $new_email           = $_POST['new_email'];
    $new_emergency_contact =$_POST['new_emergency_contact'];
    $new_relationship      =$_POST['new_relationship'];
   
    $update_sql = "UPDATE parent SET father_name='$new_father_name' WHERE id=$id";
    $conn->query($update_sql);
}

// Delete
if (isset($_GET['delete'])) {
    $id_to_delete = $_GET['delete'];
    $delete_sql = "DELETE FROM parents WHERE id=$id_to_delete";
    $conn->query($delete_sql);
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Example</title>
    <!-- Add your CSS styles here -->
</head>
<body>

    <div class="container">
        <div class="title">Parent Details</div>

        <form action="#" method="post">
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Father's Name</span>
                    <input type="text" name="father_name" placeholder="Father's Name" required>
                </div>
                <div class="input__box">
                    <span class="details">Mother's Name</span>
                    <input type="text" name="mother_name" placeholder="Mother's Name" required>
                </div>

                <div class="input__box">
                    <span class="details">Date of Birth</span>
                    <input type="date" required>
                </div>
                <div class="input__box">
                    <span class="details">Gender</span>
                    <select required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                        
                    </select>
                </div>
                <div class="input__box">
                    <span class="details">Contact Name</span>
                    <input type="text" placeholder="contact name" required>
                </div>
                <div class="input__box">
                    <span class="details">Student's Name</span>
                    <input type="text" placeholder="student's name" required>
                </div>
                <div class="input__box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter email ID" required>
                </div>
                <div class="input__box">
                    <span class="details">Emergency Contact</span>
                    <input type="tel" placeholder="123-456-7890" required>
                </div>
                <div class="input__box">
                    <span class="details">Relationship with Child</span>
                    <input type="text" placeholder="E.g: Parent, Guardian" required>
                </div>
            </div>
           
            <div class="button">
                <input type="submit" value="Submit">
            </div>
        </form>
    

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>contact Number</th>
                <th>student Name</th>
                <th>email</th>
                <th>emergency contact</th>
                <th>occupation</th>
                <th>Relationship with child</th>
                <th>Action</th>
            </tr>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['father_name'] . "</td>";
                    echo "<td>" . $row['mother_name'] . "</td>";
                    echo "<td>" . $row['dob'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['contact_name'] . "</td>";
                    echo "<td>" . $row['student_name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['emergency_contact'] . "</td>";
                    echo "<td>" . $row['relationship'] . "</td>";
                    echo "<td><a href='?delete=" . $row['id'] . "'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='11'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>



