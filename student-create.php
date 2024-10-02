<?php
session_start();
?>

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
                  <a href="./indexB.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Accountes</span></a>
                <a href="indexAC.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Classes</span></a>
            <a href="indexCor.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Classes Routines</span></a>
            <a href="indexB.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Examination</span></a>
            <a href="indexB.php"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Attendance</span></a>
            <a href="manage-leave.jsp"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Accounting</span></a>
            <a href="manage-leave.jsp"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage Event</span></a>
            <a href="manage-leave.jsp"><i class="fa fa-circle" aria-hidden="true"></i><span>Manage salary</span></a>
            <a href="manage-leave.jsp"><i class="fa fa-circle" aria-hidden="true"></i><span>Manag school panel</span></a>
            
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <?php include('message'); ?>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add
                            <a href="" class="btn btn-danger float-end">BACK</a>
    
                      </h4>
                    </div>
                    <div class="card-body"> 
                        <form action="code.php" method="POST">

                        <div class="mb-3">
                            <label>Student Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Student Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Student Phone</label>
                            <input type="text"name="phone" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Student Course</label>
                            <input type="text" name="course" class="form-control">
                        </div>
                    <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">save student</button>    

                          </div>
                    </form>
                 </div> 
            </div> 
        </div> 
    </div> 


    <!-- Centered box for the welcome message -->
    
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
            window.location.href = 'login.jsp';
        });
    </script>
</body>

</html>