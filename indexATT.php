
<?php
include 'connectA.php';


if (isset($_POST['submit'])) {

    $studentname = $_POST['studentname'];
    $classname = $_POST['classname'];
    $date = $_POST['date'];
    $attendancestatus = $_POST['attendanceStatus'];


    $sql = "INSERT INTO `attendance` (studentname, classname, date, attendancestatus)
            VALUES ('$studentname', '$classname', '$date', '$attendancestatus')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:displayATT.php');
    } else {
        die("Data not inserted");
    }
}
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
    <style>
        /* Add your CSS styles here */
        body {
            margin: 0;
            padding: 0;
        }

        .sidebar {
            height: 100vh; 
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
            display: none;
        }

        .xyz {
            max-height: 700px;
            overflow-y: auto;
            position: relative;
        }

        .xyz::-webkit-scrollbar {
            width: 2px;
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
    left: 60%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    width: 1000px; 
    padding: 70px ;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 225, 0.5);
    transition: left 0.5s;
    
            
        }
        #check:checked ~ .center-box{
        left: 830px;
        
        }
        

        .logout-btn {
            position: fixed;
            top: 10px;
            right: 10px;
             transition: right 0.5s;
        }
        check:checked ~ .logout-btn {
        right: 30px;
        
        }

        .container-box {
            background-color: #ffffff; 
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }

        button {
            background-color: #007bff; 
            color: #fff;
        }

        button:hover {
            background-color: #0056b3; 
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
.btn {

width: 100px;
background-color: rgb(7, 105, 105);
color: #fff;
font-family: bold;
font-size: 17px;

}

td {
border: 1px double #000;
padding:5px;

}


.container-box h1 {
    font-family: 'YourChosenFont', sans-serif; 
}


.container-box {
            width: 750px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 15px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
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

            <a href="#" onclick="toggleSubMenu();"> <i class="fas fa-chart-pie"></i><span style="font-size: 20px;" >MIS</span></a>
            <div class="submenu">
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Accountes</span></a>
                <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Classes</span></a>
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Classes Routines</span></a>
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Examination</span></a>
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Attendance</span></a>
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Accounting</span></a>
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Event</span></a>
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manage salary</span></a>
            <a href=""><i class="fa fa-circle" aria-hidden="true"></i><span>Manag school panel</span></a>
            </div>
        </div>
    </div>

    <!-- Centered box for the welcome message -->
     <!-- Content Header (Page header) -->
     
     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT ATTENDANCE FORM</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">
    
        
</head>
<body>

<div class="container-box">
    <h1 class="text-center">STUDENT ATTENDANCE FORM</h1>
    <a href="displayATT.php">View</a>
    <a href="indexATT.php"  class="btn btn-success">Back</a>
    <form action="indexATT.php" method="post">
        <div class="form-group">
            <label>Student Name:</label>
            <input type="text" placeholder="Enter Your name" required autocomplete="off" name="studentname">
        </div>
        <div class="form-group">
            <label>Class Name:</label>
            <input type="text" placeholder="Enter Your email" required autocomplete="off" name="classname">
        </div>
        <div class="form-group">
            <label>Attendance Date:</label> <!-- Corrected label -->
            <input type="date" required autocomplete="off" name="date">
        </div>
        <div class="form-group">
            <label>Attendance Status:</label>
            <select class="form-control" name="attendanceStatus">
                <option value="present">Present</option>
                <option value="absent">Absent</option>
            </select>
        </div>
        <input type="submit" class="btn" name="submit">
    </form>
</div>


</body>
</html>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap4.min.js"></script>

    
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>


   
</body>

</html>

     

<?php include('footer.php') ?>
    <!-- /.content -->
    <script>
        function toggleSubMenu() {
            var submenu = document.querySelector('.submenu');
            var sidebar = document.querySelector('.sidebar');
            var isCollapsed = sidebar.classList.toggle('collapsed');

            // Show/hide submenu based on the collapsed state
            submenu.style.display = isCollapsed ? 'none' : 'block';
        }

        document.getElementById('logout').addEventListener('click', function () {
            // Add your logout logic here

            // Show an alert message
            alert('Logout successful!');

            // Redirect to login.jsp
            window.location.href = 'login.php';
        });
    </script>
</body>

</html>