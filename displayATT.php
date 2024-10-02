<?php include 'connectA.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style9.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link re="stylesheet" href="style8.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">
    <style>
        /* Add your CSS styles here */
        body {
            margin: 0;
            padding: 0;
        }

        .sidebar {
            height: 100vh; /* Full height */
            position: fixed;
            top: 0;
            left: 0;
            background-color: #2E86C1 ; 
            padding-top: 60px;
            overflow-y: hidden;
        }

        .sidebar a.active {
            background-color: #4CAF50;
            color: white;
        }

        .submenu {
            display: block;
        }
        .collapsed .submenu {
            display: none; 
        }

        .xyz {
            max-height: 700px;
            overflow:auto;
            position: relative;
            
        }

        .xyz::-webkit-scrollbar {
            width: 1px;
        }

        .xyz::-webkit-scrollbar-thumb {
            background-color: #a0a0a0;
        }

        .submenu a i {
            margin-right: 10px;
        }

        .collapsed .submenu a span {
            display: none;
        }

        .collapsed .submenu a {
            display: none;
        }

        /* Additional styles for the centered box */
        .center-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 60px 130px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 225, 0.5);
            transition: left 0.5s;
        }

        /* Update the CSS selector for the checkbox */
        #check:checked ~ .center-box {
            left: 830px;
        }

        .logout-btn {
            position: fixed;
            top: 10px;
            right: 10px;
            transition: right 0.5s;
        }

        /* Update the CSS selector for the checkbox */
        #check:checked ~ .logout-btn {
            right: 30px;
        }

        body{
    max-width:500px;
    margin:0 auto;
}

input {
display:block;
margin:10px;
width:100%;
padding: 10px;

}
.btn1{

width: 100px;
background-color: rgb(7, 105, 105);
color: #fff;
font-family: bold;
font-size: 17px;

}

.btn2{

width: 100px;
background-color: rgb(7, 105, 105);
color: #F000;
font-family: bold;
font-size: 17px;

}
td,th {
border: 1px double #000;
padding:5px;

}


h1 {
            text-align: center;
        }

        table {
            width: 170%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-container {
            display: flex;
            gap: 10px;
        }

        
        .search-container {
            display: flex;
            justify-content: flex-end; /* Align to the right */
            margin-right: 20px; /* Add margin to the right to separate from the edge of the page */
            align-items: center; /* Center items vertically */
        }

        .search-box {
            padding: 8px;
        }

        .search-button {
            padding: 8px 15px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        

    </style>
</head>

<body>
    <div class="btn logout-btn">
        <button id="logout" value="Logout" style="padding: 10px 30px; border-radius: 5px; background: #527CE6; color: #fff; font-weight: 550; border: none;">
            <i class="fa fa-sign-out" aria-hidden="true"></i><span style="margin-left: 10px; font-size: 18px;">Logout</span>
        </button>
    </div>

    <input type="checkbox" id="check" style="padding: 5px 20px;"></input>

    <label for="check">
        <i class="fa fa-bars" aria-hidden="true" id="sidebar-btn"></i>
    </label>

    <div class="sidebar">
        <center>
            <h4>GVIT</h4>
        </center>
        <div class="xyz">
            <a href="index1.jsp"> <i class="fas fa-tachometer-alt"></i><span style="font-size: 20px;">DashBoard</span></a>

            <a href="#" onclick="toggleSubMenu();"> <i class="fas fa-chart-pie"></i><span style="font-size: 20px;">MIS</span></a>
            <div class="submenu">
                  <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Product</span></a>
                <a href="manage-department.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Department</span></a>
                <a href="manage-staff.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Staff</span></a>
                <a href="manage-salary.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Salary</span></a>
                <a href="download-invoice.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Download Invoice</span></a>
                <a href="manage-leave.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Leave</span></a>
                <a href="manage-attendance.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Attendance</span></a>
                <a href="courier-management.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Courier Management</span></a>
                <a href="client-document.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Client Document</span></a>
                <a href="query-management.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Query Management</span></a>
                <a href="business-mis.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Business MIS</span></a>
            </div>
        </div>
    </div>
    <h1 class="text-ceneter"> STUDENT ATTENDANCE</h1>
    
    <a href="indexATT.php"  class="btn btn-success">Back</a>
    
    <div class="search-container">
    <input type="text" class="search-box" placeholder="Search">
    <button class="search-button">Search</button>
</div>
   
    <?php
    $display_data=mysqli_query($conn,"select * from attendance");
    
    $num=1;
    if(mysqli_num_rows($display_data)>0);{
        echo " <table id>
        <thead>
            <th>SL no</th>
            <th>studentname</th>
            <th>classname</th>
            <th>Date</th>
            <th>atendancestatus</th>
            <th>Action</th>
        </thead>
        <tbody>";
           while($row=mysqli_fetch_assoc($display_data)){
            ?>
           
           <tr>
                <td><?php echo $num;?></td>
                <td><?php echo $row['studentname']?></td>
                <td><?php echo $row['classname']?></td>
                <td><?php echo $row['date']?></td>
                <td><?php echo $row['attendancestatus']?></td>
                

               
            
                <td>
                    
    <button class="btn btn-primary" onclick="confirmDelete(<?php echo $row['id']?>)">
    <a href="updateATT1.php?edit=<?php echo $row['id']?>" style="text-decoration: none; color: #fff;">edit</a>
    </button>
        
    <button class="btn btn-warning text-light">
    <a href="deleteATT.php?delete=<?php echo $row['id']?>" style="text-decoration: none; color:  #FF0000;">delete</a>
    </button>
</td>

            </tr>
    <?php
    $num++;
    }
}
    

    ?>
    
            
        </tbody>
    </table>
    
    <script>
    
    function toggleSubMenu() {
        var sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('collapsed');
    }



        document.getElementById('logout').addEventListener('click', function () {
            // Add your logout logic here

            // Show an alert message
            alert('Logout successful!');

            // Redirect to login.jsp
            window.location.href = 'login.jsp';
        });
    </script>

<script>
        function confirmPresent(id) {
            // Add logic for confirming Present and update the database if needed
            console.log("Present clicked for ID: " + id);
        }

        function confirmAbsent(id) {
            // Add logic for confirming Absent and update the database if needed
            console.log("Absent clicked for ID: " + id);
        }
    </script>
     <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap4.min.js"></script>

        <script>
        $(document).ready(function () {
            var dataTable = $('#datatableid').DataTable();

            // Add an event listener for the search button
            $('.search-button').on('click', function () {
                var searchValue = $('.search-box').val();

                // Use DataTable search API to update the table, targeting the "studentname" column
                dataTable.columns(1).search(searchValue).draw();
            });
        });
    </script>


        <script>
            $(document).ready(function() {
                $('#datatableid').DataTable();
            } );
        </script>



</body>

</html>










 
