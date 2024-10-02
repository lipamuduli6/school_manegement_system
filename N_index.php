<?php include 'connectA.php';
    // <!-- inserting data inside table -->
    if(isset($_POST['submit'])){
        // echo "success";
        $username=$_POST['username'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        
        // insert query
        $sql="insert into `studenta` (username,email,mobile,address)
        values('$username','$email','$mobile','$address')";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:N_display.php');
        }else{
            echo die("Data not inserted");
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
            height: 100vh; /* Full height */
            position: fixed;
            top: 0;
            left: 0;
            background-color: #2E86C1 ; /* Set your desired background color */
            padding-top: 60px; /* Adjust based on your header's height */
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
            display: none; /* Hide submenus when the collapsed class is present */
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




 {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #333;
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
    <div class="container">
        <h1>STUDENT DATA</h1>
        <form action="" method="post">
            <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <label for="username">Name:</label>
                <input type="text" id="username" placeholder="Enter Your name" required autocomplete="off" name="username">

                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Enter Your email" required autocomplete="off" name="email">

                <label for="mobile">Mobile Number:</label>
                <input type="text" id="mobile" placeholder="Enter Your mobile number" required autocomplete="off" name="mobile">

                <label for="address">Address:</label>
                <input type="text" id="address" placeholder="Enter Your address" required autocomplete="off" name="address">

                <input type="submit" value="Submit" class="btn" name="submit">
            </div>
        </form>
    </div>

    
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
            window.location.href = 'login.php';
        });
    </script>
</body>

</html>