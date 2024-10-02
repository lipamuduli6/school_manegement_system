<?php

include "db_conn12.php";


if (isset($_POST['submit'])) {
    $tittle = $_POST['tittle'];

    
    
    $query = mysqli_query($conn, "INSERT INTO section (tittle) VALUES ('$tittle')");

   
    if ($query) {
        echo '<script>alert("Section added successfully!");</script>';
    } else {
        echo '<script>alert("Error adding section. Please try again.");</script>';
    }
}


$sql = "SELECT * FROM section";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style9.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

<head>
    <style>
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
     


    <section class="content pt-5">
        <div class="container pt-4">
            <div class="row">
                <div class='col-lg-8'>
                    <div class="card">
                        <div class="card-header py-0">
                            <h3 class="card-title">
                                Sections
                            </h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive bg-white">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Tittle</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<tr>
                                                    <td>' . $count++ . '</td>
                                                    <td>' . $row['tittle'] . '</td>
                                                    <td> <!-- Add your action buttons here --></td>
                                                  </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header py-5">
                            <h3 class="card-title">
                                Add New Section
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="tittle">Tittle</label>
                                    <input type="text" name="tittle" placeholder="Tittle" required class="form-control">
                                </div>
                                <button name="submit" class="btn btn-success float-right">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
