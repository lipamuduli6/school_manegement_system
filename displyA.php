<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style9.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    
    <h1>wel cm</h1>
    <a href="student-create.php">juh</a>
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
</body>

</html>