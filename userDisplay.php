<?php
// Connect to your database (replace with your database credentials)
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM your_table_name"; // Replace 'your_table_name' with your actual table name
$result = $conn->query($sql);

// Display the data in a table
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h1 class="text-ceneter"> DISPLAY STUDENT DATA</h1>
    <a href="indexW.php">Back</a>
<?php
    $display_data=mysqli_query($conn,"select * from studenta");
    $num=1;
    if(mysqli_num_rows($display_data)>0);{
        echo " <table>
        <thead>
        <th>departmentName</th>
        <th>description</th>
        </thead>
        <tbody>";
        while($row=mysqli_fetch_assoc($display_data)){
            ?>
           
           <tr>
                <td><?php echo $num;?></td>
                <td><?php echo $row['departmentName']?></td>
                <td><?php echo $row['description']?></td>
        

                <?php
    $num++;
    }
}
    

    ?>

</body>
</html>
