<?php
// Include the database connection file
include 'connectA.php';

// Number of records per page
$recordsPerPage = 10;

// Get the current page number
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the offset for the query
$offset = ($page - 1) * $recordsPerPage;

// Fetch all records with pagination
$query = "SELECT * FROM 
 LIMIT $offset, $recordsPerPage";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Search functionality
$searchTerm = isset($_POST['search']) ? $_POST['search'] : '';

if ($searchTerm) {
    $searchQuery = "SELECT * FROM attendance WHERE studentname LIKE '%$searchTerm%' LIMIT $offset, $recordsPerPage";
    $result = mysqli_query($conn, $searchQuery);

    if (!$result) {
        die("Search query failed: " . mysqli_error($conn));
    }
}

// Count total records
$totalRecordsQuery = "SELECT COUNT(*) AS total FROM attendance";
$totalResult = mysqli_query($conn, $totalRecordsQuery);
$totalRecords = mysqli_fetch_assoc($totalResult)['total'];

// Calculate total pages
$totalPages = ceil($totalRecords / $recordsPerPage);

$prevPage = ($page > 1) ? $page - 1 : 1;
$nextPage = ($page < $totalPages) ? $page + 1 : $totalPages;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Records</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</head>
 <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        #datatableid {
            width: 100%;
            margin: 20px auto;
            background-color: #fff;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #datatableid th,
        #datatableid td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        #datatableid th {
            background-color: #f2f2f2;
        }

        .btn-container {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 15px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
        }

        .btn-primary {
            background-color: #007BFF;
            color: #fff;
        }

        .btn-warning {
            background-color: #FFC107;
            color: #333;
        }

        .pagination {
            margin: 20px auto;
            text-align: center;
        }

        .pagination a {
            padding: 8px 12px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 5px;
        }

        .pagination a:hover {
            background-color: #0056b3;
        }
        .search-box {
    padding: 8px;
    padding-left: 20%; /* Add left padding */
}

.search-button {
    padding: 8px 15px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    cursor: pointer;
}

    </style>

<body>

    <h1>Attendance Records</h1>

    <!-- Search Form -->
  <div>
    <a href="indexATT.php"  class="btn btn-success">Back</a>
</div>
    <!-- Display Records -->
    <table id="datatableid" border="1">
        <thead>
            <tr>
                <th>SL no</th>
                <th>studentname</th>
                <th>classname</th>
                <th>Date</th>
                <th>attendancestatus</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the records and display them in a table
            $num = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$num}</td>
                        <td>{$row['studentname']}</td>
                        <td>{$row['classname']}</td>
                        <td>{$row['date']}</td>
                        <td>{$row['attendancestatus']}</td>
                        <td>
                            <button class='btn btn-primary' onclick='confirmDelete({$row['id']})'>
                                <a href='updateATT.php?edit={$row['id']}' style='text-decoration: none; color: #fff;'>edit</a>
                            </button>
                            <button class='btn btn-warning text-light'>
                                <a href='deleteATT.php?delete={$row['id']}' style='text-decoration: none; color:  #FF0000;'>delete</a>
                            </button>
                        </td>
                      </tr>";
                $num++;
            }
            ?>
        </tbody>
    </table>
 <!-- Pagination -->
 <div class="pagination">
        <?php
        // Display previous button
        if ($page > 1) {
            echo "<a href='?page=$prevPage'>&laquo; Previous</a> ";
        }

        // Display page numbers
        for ($i = 1; $i <= $totalPages; $i++) {
            $activeClass = ($i == $page) ? 'active' : '';
            echo "<a class='$activeClass' href='?page=$i'>$i</a> ";
        }

        // Display next button
        if ($page < $totalPages) {
            echo "<a href='?page=$nextPage'>Next &raquo;</a> ";
        }
        ?>
    </div>

    <script>
        // Initialize DataTable
        $(document).ready(function () {
            $('#datatableid').DataTable();
        });
    </script>

</body>

</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
